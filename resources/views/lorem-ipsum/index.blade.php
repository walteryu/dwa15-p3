@extends('layouts.master')

@section('title')
  Lorem Ipsum Generator
@stop

{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}

@section('head')
    <link href="/css/lorem-ipsum/index.css" type='text/css' rel='stylesheet'>
@stop

@section('content')
    <h3>Lorem Ipsum Generator</h3>
    <h3>Links Here...</h3>
@stop

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}

@section('body')
    <script src="/js/lorem-ipsum/index.js"></script>
@stop
