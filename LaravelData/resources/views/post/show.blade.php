@extends('layouts.main')
@section('content')
    <div>
            <p>
                {{ $post->id }}. {{ $post->title }}
                <a href="{{ route('post.edit', $post->id) }}">edit</a>
                <form action="{{ route('post.delete', $post->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="delete" >
                </form>
            </p>
            

    </div>
@endsection