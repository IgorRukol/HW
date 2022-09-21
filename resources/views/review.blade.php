

@extends('res.app')

@section('title')Отзывы@endsection

@section('main_content')

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="post" action="/review/check" class="form-control" >
        @csrf
        <input type="email" name="email" id="email" placeholder="Введите email" class="form-control">
        <input type="tema" name="tema" id="tema" placeholder="Введите тему" class="form-control">
        <textarea name="message" id="message" class="form-control" placeholder="Введите отзыв"></textarea>
        <button type="submit" class="btn btn-success">Отправить
        </button>
    </form>
    <h1>Все отзывы</h1>

    @foreach($reviews as $rev)
        <div class="alert alert-warning">
            <h3>{{ $rev->tema }}</h3>
        </div>


    @endforeach


@endsection
