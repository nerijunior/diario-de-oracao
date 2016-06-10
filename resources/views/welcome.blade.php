@extends('layouts.app')

@section('content')
<div class="container" id="welcome">
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

    <div class="facebook-share-button share-button">
        <div class="fb-share-button" data-href="https://diariodeoracao.com.br" data-layout="button_count" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdiariodeoracao.com.br%2F&amp;src=sdkpreparse">Compartilhar</a></div>
    </div>

    <div class="twitter-share-button share-button">
        <a href="https://twitter.com/share" style="margin-top: 10px;" class="twitter-share-button" data-text="Anote tudo sobre sua relação com Deus e tenha sua memória preservada!" data-hashtags="DiarioDeOracao">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </div>

    <div class="google-share-button share-button">
        <!-- Posicione esta tag no cabeçalho ou imediatamente antes da tag de fechamento do corpo. -->
        <script src="https://apis.google.com/js/platform.js" async defer>
          {lang: 'pt-BR'}
        </script>

        <!-- Posicione esta tag onde você deseja que o botão +1 apareça. -->
        <div class="g-plusone"></div>
    </div>

</div>
@endsection
