@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-header">
        <h2>Compartilhar seu diário</h2>
    </div>

    <form>
        <div class="form-group">
            <label>
                <i class="fa fa-spinner fa-spin" style="display: none;"></i>

                <input type="checkbox" name="share_link" value="1" {{ (isset($config['share_link']) && $config['share_link']) ? 'checked' : ''  }}>
                Permitir que outros leiam seu diário através de um link?
            </label>
            <p class="text-info"><span class="glyphicon glyphicon-lock"></span> Isso <strong>não</strong> permite que outros usuários editem seu diário!</p>

        </div>
        <input type="text" class="form-control link" style="display: none;" readonly="">
    </form>
</div>
@endsection

@section('scripts')
<script>
    $(function(){
        var $input = $('input.link')

        if($('input[type=checkbox]').is(':checked')) {
            showHiddenField();
        }

        $('input[type=checkbox]').bind('click', function(){
            var $that = $(this)
            var $spinner = $('.fa-spin')

            $.ajax('{{ route('diaries.share.save') }}', {
                data : $('form').serialize(),
                dataType: 'json',
                method: 'post',
                beforeSend: function(){
                    $spinner.show()
                },
                success: function(data){
                    console.log(data)
                    if ($that.is(':checked'))
                        return showHiddenField()

                    return hideHiddenField()
                },
                complete: function(){
                    $spinner.hide()
                }
            })
        })

        function showHiddenField(){
            $input.show()
        }

        function hideHiddenField() {
            $input.hide();
        }
    })
</script>
@endsection
