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
            <div class="col-md-3">
                <div class="form-group">
                    <label>Data</label>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-default ontem">Ontem</button>
                        </span>
                        {!! Form::date('date', date('Y-m-d', strtotime(old('date'))),['class' => 'form-control', 'autofocus']) !!}
                        <span class="input-group-btn">
                            <button class="btn btn-default hoje">Hoje</button>
                        </span>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

        <div class="form-group">
            <label>O que você leu na bíblia hoje?</label>
            {!! Form::textarea('questions[bible_readed]', old('questions[bible_readed]'),['class' => 'form-control', 'rows' => 4]) !!}
        </div>

        <div class="form-group">
            <label>Onde você orou?</label>
            {!! Form::textarea('questions[where_i_pray]', old('questions[where_i_pray]'),['class' => 'form-control', 'rows' => 4]) !!}
        </div>

        <div class="form-group">
            <label>O que Deus falou com você?</label>
            {!! Form::textarea('questions[god_speak]', old('questions[god_speak]'),['class' => 'form-control', 'rows' => 4]) !!}
        </div>

        <div class="form-group">
            <label>O que você falou com Deus?</label>
            {!! Form::textarea('questions[i_speak]', old('questions[i_speak]'),['class' => 'form-control', 'rows' => 4]) !!}
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
                {!! Form::textarea('fasting_purpose', old('fasting_purpose'),['class' => 'form-control', 'rows' => 2]) !!}
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-success">Salvar</button>
            </div>
        </div>
    {!! Form::close() !!}
</div>
@endsection

@section('scripts')
<script type="text/javascript">
$(function(){
    $('.ontem').bind('click', function(e){
        e.preventDefault()

        var date = moment()
            .subtract(1, 'day')

        $('input[name=date]').val(date.format('Y-MM-DD'))
    })

    $('.hoje').bind('click', function(e){
        e.preventDefault()

        $('input[name=date]').val(moment().format('Y-MM-DD'))
    })
})
</script>
@endsection
