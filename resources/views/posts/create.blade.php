@extends('index')

@section('content')
    <form class="form" method="post" action="#">
        <div class="form__title">
            <label for="title">Título</label>
            <input id="title" name="title" type="text">
        </div>
        <div class="form__body">
            <label for="body">Texto</label>
            <textarea id="body"></textarea>
        </div>
    </form>
@endsection