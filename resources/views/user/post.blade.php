@extends('app')


@section('bg-img', Storage::disk('local')->url($post->image))

@section('title', $post->title)
@section('subheading', $post->subtitle)

@section('main-content')

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0&appId=393952921203456&autoLogAppEvents=1"></script>

 <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          
          <small>created at {{$post->created_at->diffForHumans()}}</small>
          
          @foreach($post->categories as $category)

          <a href="{{route('category',$category->slug)}}">
          <small style="float: right; margin-right: 10px; padding: 4px; border-radius: 4px; border: 2px solid black;">

              {{$category->name}}
           
          </small>
          </a>

          @endforeach

          <p>{!! htmlspecialchars_decode($post->body) !!}</p>
          <h3><b>Tags available for this post</b></h3>

          @foreach($post->tags as $tag)
          <a href="{{route('tag',$tag->slug)}}">
          <small style="float: left; margin-right: 10px; padding: 4px; border-radius: 4px; border: 2px solid black;">
          
           {{$tag->name}} 

          </small>
          </a>
          @endforeach

          
        </div>
      </div>

      <div class="fb-comments" data-href="{{Request::url()}}" data-width="" data-numposts="5"></div>

    </div>
  </article>


@endsection