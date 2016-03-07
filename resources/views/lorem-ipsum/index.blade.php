@extends('layouts.master')

@section('title')
    Show all books
@stop

{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}

@section('head')
    <link href="/css/books/index.css" type='text/css' rel='stylesheet'>
@stop

@section('content')
    <h1>Show all books...</h1>
@stop

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}

@section('body')
    <script src="/js/books/index.js"></script>
@stop
