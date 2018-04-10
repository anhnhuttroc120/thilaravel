@extends('layout.master')
@section('header')
 <h1>List all Student  page </h1>
 <a href="add" class="btn btn-primary pull-right"> Create new student </a>
@stop


@section('content')
  <div id="dialog-confirm" title="Thông báo!" style="display: none;">
      <p>Bạn có chắc muốn xóa phần tử này hay không?</p>
  </div>  
  <form action="" method="post" id="admin-Form">
         <input type="hidden" name="_token" value="{{ csrf_token() }}" />
  <table class="table table-bordered">
    <select style="width: 200px;" name="shool" >
        
    @foreach($test as $k =>$v)
      
      <option  value="{{$k}}" >{{$v}}</option>
    
      @endforeach
    </select>
    <tr>
      <th style="position: relative;width: 50px;"><a style="color: black;"  onclick="javascript:sortList('id','asc')" id="id-asc"><img style="position: absolute; top:5px;left: 30px;" src="images/sort_asc.png" alt=""></a><a style="color: black;" onclick="javascript:sortList('id','desc')"  id="id-desc"><img style="position: absolute; top:20px;left: 30px;" src="images/sort_desc.png" alt=""></a>ID</th>
      <th style="position: relative;"><a style="color: black;"  onclick="javascript:sortList('name','asc')" id="id-asc"><img style="position: absolute; top:5px;left: 100px;" src="images/sort_asc.png" alt=""></a><a style="color: black;" onclick="javascript:sortList('name','desc')"  id="id-desc"><img style="position: absolute; top:20px;left: 100px;" src="images/sort_desc.png" alt=""></a>Name</th>
      <th>School</th>
      <th>address</th>
      <th>dateofbirth</th>
      <th>Update</th>
      <th>Delete</th>
    </tr>
  
    <tr id="item-">
      <td></td>
      <td><a href="show/"></a></td>
      <td>  <a style="color: black"></a></td>
      <td></td>
      <td></td>
      <td><a href="update/" class="demo btn btn-success">
  Update</a></td>

      <td><a href="javascript:deleteItem('')" class="btn btn-warning " ><span class="glyphicon glyphicon-remove"></span></a></td>
    </tr>
  
    <input type="hidden" name="filter_column" value="id">
    <input type="hidden" name="filter_dir" value="asc">

  </table>
  </form>
@stop

