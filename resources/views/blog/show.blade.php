@extends('base')
@section('title', $post->title)
@section('content')
    <h1>Mon article</h1>

        <article>
            <h2> {{ $post->title }}</h2>
            <p> {{ $post->content }}</p>

        </article>
@endsection
