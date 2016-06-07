@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <div class="btn-toolbar pull-right">
            <div class="btn-group">
                <!-- <button class="">Novo dia</button> -->
                <a href="{{ route('newPost') }}" class="btn btn-primary">Novo dia</a>
            </div>
        </div>
        <h1>Meu Diário</h1>
    </div>

    <ul class="posts">
    @foreach ($posts as $post)
        <li>{{ $post->id }}</li>
    @endforeach
    </ul>
</div>
@endsection
