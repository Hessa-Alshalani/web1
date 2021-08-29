<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user , Post $posts)
    {
        $user = Auth::user();
        $posts = Post::all();
     // $posts = Post::where('user_id',$user->id)->orderBy('id','desc')->get();
        return view('index',compact('user','posts'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'desc'=>'nullable',
            'file'=>'required',

        ],$this-> validationMsg,[
            'title'=>'عنوان',
            'file'=>'صورة',
        ]);
      $data = $request->except('_token');
    
      if($request->hasFile('file')){
            $data['file']= Storage::disk('public')->put('files/post',$request->file('file'));
         }
    
         Post::query()->create($data);
    
         session()->flash('success','تم النشر بنجاح');
         return redirect()->back();
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
   function show()
    {
        //
        $data = Post::paginate(5);
        return view('site.home.index',['posts'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        //
    }
}
