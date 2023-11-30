@extends('layouts.main')
@section('content')
<div>
    <form action="{{ route('post.update', $post->id) }}" method="post">
        @csrf
        @method('patch')
        <label for="title">title</label>
        <input name="title" type="text" id="title" value="{{ $post->title }}">
        <br>
        <label for="content">content</label>
        <textarea name="content" type="text" id="content"">{{ $post->content }}</textarea>
        <br>
        <button type="submit">update</button>
    </form>
</div>

@endsection