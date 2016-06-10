@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <div class="btn-toolbar pull-left">
            <a href="{{ route('shared.diaries.see', ['id' => $user->id]) }}" class="btn btn-primary">
                <span class="glyphicon glyphicon-chevron-left"></span> Voltar ao diário
            </a>
        </div>

        <div class="text-center">
            <h1>{{ $post->date->format('d/m/Y') }} <small>de {{ $user->name }}</small> </h1>
        </div>
    </div>

    <h3>O que você leu na bíblia hoje?</h3>
    <p>{{ $post->questions['bible_readed'] }}</p>

    <hr>

    <h3>Onde você orou?</h3>
    <p>{{ $post->questions['where_i_pray'] }}</p>

    <hr>

    <h3>O que Deus falou com você?</h3>
    <p>{{ $post->questions['god_speak'] }}</p>

    <hr>

    <h3>O que você falou com Deus?</h3>
    <p>{{ $post->questions['i_speak'] }}</p>

    <hr>

    <h3>Estava de jejum?</h3>
    <p>{{ ($post->fasting) ? 'Sim' : 'Não'  }}</p>

    @if($post->fasting)
        <p>{{ $post->fasting_purpose }}</p>
    @endif
</div>
@endsection
