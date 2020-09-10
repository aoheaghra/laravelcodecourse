@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                    
                    <div class="card-body">
                        @if (!count($posts))
                        <p>There are no posts</p>
                        @else
                            @foreach($posts as $post)
                                <div>
                                <a href="{{route('posts.show', $post->id)}}">{{ $post->title}}</a>
                                </div>
                            @endforeach
                        @endif
                        <form action="/posts" method="POST" {{ $post }}>
                            @csrf
                            <h3>Title</h3>
                        <input type="text" >
                            <h3>Body</h3>
                        <textarea name="post"  id="post" cols="50" rows="5" >Add item here</textarea>
                        <button class="submit" id="submit">Add item</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
                                