@extends('layout.master')
@section('header')
<h1>Create new cat</h1>
@stop

@section('content')
	<a  class="btn btn-primary" href="{{URL('index')}}">Trở về trang chủ</a>


  {!! Form::model($student,['url' => 'update/'. $student->id, 'method' => 'put']) !!}
    @include('form.student')
    {!! Form::submit('Thay đổi thông tin', ['class' => 'btn btn-primary']) !!}
  {!! Form::close() !!}
  
@stop
