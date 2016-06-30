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

    <div class="row">
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">Total de diários</div>
                <div class="panel-body text-center" style="font-size: 25px;">
                    {{ count($posts) }}
                </div>
            </div>
        </div>
    </div>

    @include('diaries.list')
</div>
@endsection
