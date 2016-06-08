@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
    @if(isset($post))
        <h1>Atualizando dia</h1>
    @else
        <h1>Novo dia</h1>
    @endif
    </div>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if (isset($post))
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'put']) !!}
    @else
        {!! Form::open(['route' => 'posts.save', 'method' => 'post']) !!}
    @endif

         <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label>Data</label>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-default">Ontem</button>
                        </span>
                        {!! Form::date('date', old('date'),['class' => 'form-control', 'autofocus']) !!}
                        <span class="input-group-btn">
                            <button class="btn btn-default">Hoje</button>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-md-offset-2">
                <div class="form-group">
                    <label>Dia da semana</label>
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-primary">
                            {!! Form::radio('week_day', 1) !!} Domingo
                        </label>
                        <label class="btn btn-primary">
                            {!! Form::radio('week_day', 2) !!} Segunda
                        </label>
                        <label class="btn btn-primary">
                            {!! Form::radio('week_day', 3) !!} Terça
                        </label>
                        <label class="btn btn-primary">
                            {!! Form::radio('week_day', 4) !!} Quarta
                        </label>
                        <label class="btn btn-primary">
                            {!! Form::radio('week_day', 5) !!} Quinta
                        </label>
                        <label class="btn btn-primary">
                            {!! Form::radio('week_day', 6) !!} Sexta
                        </label>
                        <label class="btn btn-primary">
                            {!! Form::radio('week_day', 7) !!} Sábado
                        </label>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

        <div class="form-group">
            <label>O que você leu na bíblia hoje?</label>
            {!! Form::textarea('questions[bible_readed]', old('questions[bible_readed]'),['class' => 'form-control', 'autofocus']) !!}
        </div>

        <div class="form-group">
            <label>Onde você orou?</label>
            {!! Form::textarea('questions[where_i_pray]', old('questions[where_i_pray]'),['class' => 'form-control', 'autofocus']) !!}
        </div>

        <div class="form-group">
            <label>O que Deus falou com você?</label>
            {!! Form::textarea('questions[god_speak]', old('questions[god_speak]'),['class' => 'form-control', 'autofocus']) !!}
        </div>

        <div class="form-group">
            <label>O que você falou com Deus?</label>
            {!! Form::textarea('questions[i_speak]', old('questions[i_speak]'),['class' => 'form-control', 'autofocus']) !!}
        </div>

        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label for="">Jejum?</label>
                    <br>
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-default">
                            {!! Form::radio('fasting', 1) !!} Sim
                        </label>
                        <label class="btn btn-default">
                            {!! Form::radio('fasting', 0) !!} Não
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <label>Motivo do Jejum</label>
                {!! Form::textarea('questions[fasting_purpose]', old('questions[fasting_purpose]'),['class' => 'form-control', 'autofocus']) !!}
            </div>
        </div>
        <div class="row">
            <button class="btn btn-success">Salvar</button>
        </div>
    {!! Form::close() !!}
</div>
@endsection
