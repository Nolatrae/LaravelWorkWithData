@extends('layouts.main')
@section('content')
<div>
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <label for="title">title</label>
        <input name="title" type="text" id="title">
        <br>
        <label for="content">content</label>
        <textarea name="content" type="text" id="content"></textarea>
        <br>
        <button type="submit">create</button>
    </form>
</div>

@endsection