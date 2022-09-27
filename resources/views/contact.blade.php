
@extends('res.app')

@section('title')Контакты@endsection
@section('main_content')
    <br>
<span class="mt-1">Привет<span id="hello"></span>!</span>
<input class="form-control tableviews" type="text" placeholder="Введите имя">
<input class="form-control tableviews" type="text" placeholder="Введите телефон">
<input class="form-control tableviews" type="text" placeholder="Введите email">
<input type="submit" class="btn btn-success"><br>

@endsection
