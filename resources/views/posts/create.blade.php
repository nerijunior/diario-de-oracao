@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Novo dia</h1>
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


    <form action="{{ route('savePost') }}" method="post">

        {{ csrf_field() }}

        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label>Data</label>
                    <input type="date" class="form-control" name="date" autofocus/>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-4">
                <div class="form-group">
                    <label>Dia da semana</label>
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-primary active">
                            <input type="radio" name="week_day" value="1" checked> Domingo
                        </label>
                        <label class="btn btn-primary">
                            <input type="radio" name="week_day" value="2" checked> Segunda
                        </label>
                        <label class="btn btn-primary">
                            <input type="radio" name="week_day" value="3"> Terça
                        </label>
                        <label class="btn btn-primary">
                            <input type="radio" name="week_day" value="4"> Quarta
                        </label>
                        <label class="btn btn-primary">
                            <input type="radio" name="week_day" value="5"> Quinta
                        </label>
                        <label class="btn btn-primary">
                            <input type="radio" name="week_day" value="6"> Sexta
                        </label>
                        <label class="btn btn-primary">
                            <input type="radio" name="week_day" value="7"> Sábado
                        </label>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

        <div class="form-group">
            <label>O que você leu na bíblia hoje?</label>
            <textarea name="questions['bible_readed']" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label>O que Deus falou comigo?</label>
            <textarea name="questions['god_speak']" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label>O que Deus falou comigo?</label>
            <textarea name="questions['god_speak']" class="form-control"></textarea>
        </div>

        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label for="">Jejum?</label>
                    <br>
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-default">
                            <input type="radio" name="fasting" value="1"> Sim
                        </label>
                        <label class="btn btn-default active">
                            <input type="radio" name="fasting" value="0" checked> Não
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <label>Motivo do Jejum</label>
                <textarea name="fasting_purpose" class="form-control"></textarea>
            </div>
        </div>
        <div class="row">
            <button class="btn btn-success">Salvar</button>
        </div>
    </form>
</div>
@endsection
