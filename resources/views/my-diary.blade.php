@extends('layouts.app')

@section('content')
<div class="container">

    <div class="btn-toolbar hidden-lg">
        <a href="{{ route('diaries.share') }}" class="btn btn-warning">
            <span class="glyphicon glyphicon-wrench"></span>
            Preferências
        </a>
        <a href="{{ route('posts.new') }}" class="btn btn-primary">Novo dia</a>
    </div>

    <div class="page-header">
        <div class="btn-toolbar pull-right hidden-xs">
            <a href="{{ route('diaries.share') }}" class="btn btn-warning">
                <span class="glyphicon glyphicon-wrench"></span>
                Preferências
            </a>
            <a href="{{ route('posts.new') }}" class="btn btn-primary">Novo dia</a>
        </div>
        <h1>Meu Diário</h1>
    </div>



    @include('diaries.list')
</div>
@endsection
