@extends("layouts.main")

@section("title", "Blog")

@section("container")
    <h1>Blog</h1>

    @foreach ($posts as $post)
    <article class="mt-5" style="border: 1px solid black; padding: 20px; border-radius: 8px">
        <h2><a href="/posts/{{ $post['slug'] }}">{{ $post["title"] }}</a></h2>
        <h6>By: {{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>
        
    @endforeach

@endsection