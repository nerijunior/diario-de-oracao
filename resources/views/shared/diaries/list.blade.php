@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>Diário de Oração <small>de {{ $user->name }}</small></h1>
    </div>

    @include('diaries.list', ['shared' => true])
</div>
@endsection
