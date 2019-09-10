@extends('app')


@section('bg-img', asset('blog/img/home-bg.jpg'))
@section('title', 'Advance Blog')
@section('subheading', 'Learn and teach together')

@section('main-content')

 <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        @foreach($posts as $post)
        <div class="post-preview">
          <a href="{{Route('post',$post->slug)}}">
            <h2 class="post-title">
              {{$post->title}}
            </h2>
            <h3 class="post-subtitle">
              {{$post->subtitle}}
            </h3>
          </a>
          <p class="post-meta">Posted at
            {{$post->created_at->diffForHumans()}}
        </div>
        @endforeach
        <hr>
     
       
        <!-- Pager -->
        <div class="clearfix">
          {{$posts->links()}}
          <a class="btn btn-primary float-left" href="#">Older Posts &rarr;</a>
          
        </div>
      </div>
    </div>
  </div>

  <hr>

@endsection