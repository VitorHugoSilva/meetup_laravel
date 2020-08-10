@extends('template.site.index');
@section('title-page')  {{ $post->title }}@endsection
@section('content')

    <div class="row mt-3">

        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title  }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $post->sub_title  }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $post->category->name  }}</h6>
                    <p class="card-text">{{ $post->content  }}</p>
                    <a href="/" class="btn btn-info">Voltar</a>
                </div>

        </div>

    </div>
@endsection
