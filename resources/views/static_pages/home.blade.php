@extends('layouts.default')
@section('content')
<div class="jumbotron">
    <h1>Hello laravel</h1>
    <p class="lead">
        你现在所看到的是 <a href="https://fsdhub.com/books/laravel-essential-training-5.1">laravel入门教程</a>
        的主页
    </p>
    <p>一切，将从这里开始</p>
    <p>
        <a href="{{ route('singup') }}" class="btn btn-lg btn-success" role="button">现在注册</a>
    </p>
</div>
@stop
