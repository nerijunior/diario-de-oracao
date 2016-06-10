@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Diário de Oração</h1>

    <div class="row">
        <div class="col-md-3">
            <div class="well"> {{ $totals->users }} Usuários</div>
        </div>
        <div class="col-md-3">
            <div class="well"> {{ $totals->diaries }} Diários</div>
        </div>
        <div class="col-md-3">
            <div class="well"> {{ $totals->prayers }} Orações</div>
        </div>
        <div class="col-md-3">
            <div class="well"> {{ $totals->god_responses }} Respostas de Deus</div>
        </div>
    </div>
</div>
@endsection
