@extends('layouts.main')
@section('content')
    <div>
        @foreach($posts as $post)
            <p>
                <a href="{{ route('post.show', $post->id) }}">
                    {{ $post->id }}. 
                    {{ $post->title }}</p>
                </a>
        @endforeach
    </div>
@endsection