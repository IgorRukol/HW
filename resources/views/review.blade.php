

@extends('res.app')

@section('title')Отзывы@endsection

@section('main_content')
    @foreach($reviews as $rev)
        <div class="alert alert-warning">
            <h3 class="red">{{ $rev->tema }}</h3>
            <p>{{ $rev->message }}</p>
            <h3>Оценка: {{ $rev->rating }}</h3>


        </div>


    @endforeach


    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="post" action="/review/check" class="form-control tableviews">
        @csrf
        <input type="email" name="email" id="email" placeholder="Введите email" class="form-control">
        <input type="tema" name="tema" id="tema" placeholder="Введите тему" class="form-control">
        <textarea name="message" id="message" class="form-control" placeholder="Введите отзыв"></textarea>
        <div class="star-rating">
            <span class="fa fa-star-o" data-rating="1"></span>
            <span class="fa fa-star-o" data-rating="2"></span>
            <span class="fa fa-star-o" data-rating="3"></span>
            <span class="fa fa-star-o" data-rating="4"></span>
            <span class="fa fa-star-o" data-rating="5"></span>
            <input type="hidden" name="rating" class="rating-value" value="3">
        </div>
        <button type="submit" class="btn btn-success">Отправить

        </button>
        <box class="tableviews">asd</box>
    </form>
    <h1>Все отзывы</h1>



@endsection
