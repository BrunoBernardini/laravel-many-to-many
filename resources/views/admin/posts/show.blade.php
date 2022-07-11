@extends("layouts.admin")

@section("content")
    <div class="container">
        <h1>{{$post->title}}</h1>
        <h4 class="my-4">Categoria: {{$post->category ? $post->category->name : "-"}}</h4>
        @if(count($post->tags))
            <h5 class="mb-4">
                <span>Tags:</span>
                @foreach($post->tags as $tag)
                    <span class="badge badge-success">{{$tag->name}}</span>
                @endforeach
            </h5>
        @endif
        <p>
            {{$post->content}}
        </p>

        <a class="btn btn-primary" href="{{route('admin.posts.index')}}">Torna all'elenco</a>
    </div>
@endsection
