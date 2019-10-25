@extends('layouts.app')

@section('content');

    <h1>Posts</h1>
    @if(count($posts)>0)
       @foreach ($posts as $post)
            <div class="card p-3 mt-3 mb-3">
                <a href="/posts/{{$post->id}}"><h3>{{$post->title}}</h3></a>
                <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>no psots found</p>
    @endif
    
@endsection