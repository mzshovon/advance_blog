<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Model\user\Posts;
use App\Model\user\Tags;
use App\Model\user\Categories;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $posts = posts::all();
       return view('admin.post.show',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

            if (Auth::user()->can('posts.create')) {
               $tags = tags::all();
        $categories = categories::all();

        return view('admin.post.post',compact('tags','categories')); 
    
}

    return redirect(route('admin.home'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request=>all();

        $request->validate([

            'title'=>'required',
            'subtitle'=>'required',
            'slug'=>'required',
            'body'=>'required',
            'image'=>'required'
            
        ]);

         if($request->hasFile('image')){

            $imageName = $request->image->store('public');

       }


        $post = new posts;
        $post->image = $imageName;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->status = $request->status;

        $post -> save();


        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        return redirect(route('post.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        if (Auth::user()->can('posts.update')) {
           $post = posts::with('tags','categories')->where('id',$id)->first();
          $tags = tags::all();
        $categories = categories::all();

        return view('admin.post.edit',compact('post','tags','categories'));
    
}
     return redirect(route('admin.home'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $request->validate([

            'title'=>'required',
            'subtitle'=>'required',
            'slug'=>'required',
            'body'=>'required',
            'image'=>'required'
        ]);

       if($request->hasFile('image')){

            $imageName = $request->image->store('public');

       }


        $post = posts::find($id);
        $post->image = $imageName;
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->status= $request->status;
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);

        $post -> save();
        return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        posts::where('id',$id)->delete();
        return redirect()->back();
    }
}
