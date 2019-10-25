@extends('layouts.app')

@section('content');

    <h1>Posts</h1>
    @if(count($posts)>0)
       @foreach ($posts as $post)
            <div class="card p-3 mt-3 mb-3">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                    <img style="width:100%" src="/storage/cover_images/{{$post->cover_img}}" alt="">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <a href="/posts/{{$post->id}}"><h3>{{$post->title}}</h3></a>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
               
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>no psots found</p>
    @endif
    
@endsection