<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;
use App\Author;
use Illuminate\Http\File;
use Illuminate\Http\Request;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['posts'] =Post::all();
        $data['categories'] = Category::orderBy('name')->get();
        $data['authors'] = Author::orderBy('name')->get();
        $data['serial']= 1;
        return view('admin.post.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        $data['categories'] = Category::orderBy('name')->get();
        $data['authors'] = Author::orderBy('name')->get();
        return view('admin.post.create',$data);
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
            'category_id' =>'required',
            'author_id' =>'required',
            'title' =>'required',
            'content' =>'required',
            'status' =>'required',
            'image' =>'mimes:jpeg,png',

        ]);

     if($request->hasFile('image')){
        $file=$request->file('image');
        $path='images/upload/posts';
        $file_name = encrypt(time().rand(00000,99999)).'.'.$file->getClientOriginalExtension();
        $file->move($path,$file_name);
        $data['image'] = $path.'/'.$file_name;
    }

    $data['category_id'] = $request->category_id;
    $data['author_id'] = $request->author_id;
    $data['title'] = $request->title;
    $data['content'] = $request->content;
    $data['image'] = 'mims:jpeg,png';
    if($request->status=='published'){
        $data['published_at']=date('Y-m-d');
    }

     if($request->has('is_featured')){
        $data['is_featured']= $request->is_featured;
    }

    Post::create($data);
    session()->flash('message','Post Update Successfully');
    return redirect()->route('post.index');
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $data['post'] = $post;
        $data['categories'] = Category::orderBy('name')->get();
        $data['authors'] = Author::orderBy('name')->get();
        return view('admin.post.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $data['post'] =$post;
        $data['categories'] = Category::orderBy('name')->get();
        $data['authors'] = Author::orderBy('name')->get();
        return view('admin.post.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Post $post)
    {
          $request->validate([
            'category_id' =>'required',
            'author_id' =>'required',
            'title' =>'required',
            'content' =>'required',
            'status' =>'required',
            'image' =>'mimes:jpeg,png',

        ]);

        if($request->hasFile('image')){

            $file=$request->file('image');
            $path='images/upload/posts';
            $file_name = encrypt(time().rand(00000,99999)).'.'.$file->getClientOriginalExtension();
            $file->move($path,$file_name);
            $data['image'] = $path.'/'.$file_name;
            if(file_exists($post->image)){
                unlink($post->image);
            }
            
        }

        $data['category_id'] = $request->category_id;
        $data['author_id'] = $request->author_id;
        $data['title'] = $request->title;
        $data['content'] = $request->content;
        $data['status'] = $request->status;
        $post->update($data);
        session()->flash('message','Post update Successfully');
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)

    {
        if(file_exists($post->image)){
            unlink($post->image);
        }
        $post->delete();
        session()->flash('message','Post Delete Successfully');
        return redirect()->route('post.index');
    }
}
