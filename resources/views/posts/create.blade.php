@extends('index')

@section('content')
    <form id="form" class="form" method="post" action="#">
        <div class="form__title">
            <label for="title">Título</label>
            <input id="title" name="title" type="text">
        </div>
        <div class="form__body">
            <label for="body">Texto</label>
            <textarea id="body" name="body"></textarea>
        </div>
        <div class="form__controls">
            <button type="submit">Publicar</button>
            <button type="reset">Limpar</button>
            <button><a href="/">Fechar</a></button>
        </div>
        {{csrf_field()}}
    </form>
@endsection