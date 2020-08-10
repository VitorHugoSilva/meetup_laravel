@extends('template.site.index');
@section('title-page') Bem vindo @endsection
@section('content')

    <div class="row mt-3">
        <div class="col-sm-2">
            <ul class="nav flex-column">
                @foreach($categories as $category)
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('posts.from_category', $category->id)}}">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-sm-10">
            <div class="row">
                @foreach($posts as $post)
                    <div class="card col-md-4" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $post->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $post->category->name }}</h6>
                            <p class="card-text">{{ $post->content }} </p>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">Ver</a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </div>

        <div class="float-right m-3">
            {{ $posts->links() }}
        </div>
@endsection
