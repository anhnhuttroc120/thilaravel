@extends('layout.master')
@section('header')
<h1>Create new cat</h1>
@stop

@section('content')
	<a  class="btn btn-primary" href="{{URL('index')}}">Trở về trang chủ</a>


  {!! Form::open(['url' => 'add', 'method' => 'post']) !!}
    @include('form.main')
      {!! Form::submit('Save Học sinh', ['class' => 'btn btn-primary']) !!}
  {!! Form::close() !!}

@stop
