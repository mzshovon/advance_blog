@extends('app')


@section('bg-img', asset('blog/img/post-bg.jpg'))

@section('title', $post->title)
@section('subheading', $post->subtitle)

@section('main-content')

 <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          
          <small>created at {{$post->created_at->diffForHumans()}}</small>
          
          @foreach($post->categories as $category)
          <small style="float: right; margin-right: 10px;">
          
            <label class="btn btn-primary btn-sm" style="padding: 3.5px; border-radius: 4px;">{{$category->name}}</label>

          </small>
          @endforeach

          <p>{!! htmlspecialchars_decode($post->body) !!}</p>
          <h3><b>Tags available for this post</b></h3>

          @foreach($post->tags as $tag)
          <small style="float: left; margin-right: 10px;">
          
            <label style="padding: 4px; border-radius: 4px; border: 2px solid black;">{{$tag->name}}</label>

          </small>
          @endforeach

          
        </div>
      </div>
    </div>
  </article>


@endsection