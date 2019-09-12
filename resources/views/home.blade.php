



@extends('app')


@section('bg-img',asset('blog/img/login1.jpg'))

@section('title', 'Welcome page')
@section('subheading','' )

@section('main-content')



 <article>
    
       
       
      <div class="container text-center" >

        <h1>Hi <span style="color: #2a9da1;">'{{Auth::user()->name}}'</span></h1>
        <h2> welcome to advance blog</h2>
      </div>

     

    </div>
  </article>


@endsection


