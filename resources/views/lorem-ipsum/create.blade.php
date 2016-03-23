@extends('layouts.master')

@section('title')
    Create Random Text
@stop

@section('head')
    <link href="/css/lorem-ipsum.css" type='text/css' rel='stylesheet'>
@stop

@section('content')
    <br><h3>Create Random Text</h3>

    <form method='POST' action='/lorem-ipsum/create'>

        {{ csrf_field() }}

        <div class='form-group'>
           <label>* Paragraph Count (Between 0-9):</label>
           <input
               type='number'
               id='count'
               name='count'
               value='{{ old('count') }}'
           >
           <div class='error'>{{ $errors->first('count') }}</div>
        </div>

        <div class='form-group'>
           <input
               type='checkbox'
               id='add_random'
               name='add_random'
               value='{{ old('add_random') }}'
           >
           <label>Shuffle Paragraphs?</label>
           <div class='error'>{{ $errors->first('add_random') }}</div>
        </div>

        <button type="submit" class="btn btn-primary">Create Random Text</button>

        <section>
            <br>
            @forelse($paragraphs as $paragraph)
                <p>
                {{ $paragraph }}
            @empty
                <h3>No Random Text Created Yet</h3>
            @endforelse
        </section>

        {{--
        <ul class=''>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        --}}

        <div class='error'>
            @if(count($errors) > 0)
                Please correct the errors above and try again.
            @endif
        </div>
    </form>
@stop

@section('body')
    <script src="/js/lorem-ipsum.js"></script>
@stop
