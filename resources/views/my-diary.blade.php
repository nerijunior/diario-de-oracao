@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <div class="btn-toolbar pull-right">
            <div class="btn-group">
                <!-- <button class="">Novo dia</button> -->
                <a href="{{ route('posts.new') }}" class="btn btn-primary">Novo dia</a>
            </div>
        </div>
        <h1>Meu Diário</h1>
    </div>

    <ul class="posts">
    @foreach ($posts as $post)
        <li>
            <a href="{{ route('posts.edit', ['id' => $post->id]) }}">
                {{ date('d/m/Y', strtotime($post->date)) }} - {{ $post->questions['bible_readed'] }}
            </a>
        </li>
    @endforeach
    </ul>
</div>
@endsection
