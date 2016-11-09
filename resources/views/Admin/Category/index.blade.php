@extends('Dashboard.layouts.master')
@section('content')
<div class="col-md-12">

<fieldset>
  <legend>
    Category List
<a href="categories/create" class="btn btn-info btn-xs pull-right">New Category</a>
    </legend>
<table class="table table-bordered table-striped data-table">
  <thead>
    <tr>
      <th>SL</th>
      <th>Category Title</th>
      
      <th>Category uri</th>
      <th>Category Description</th>
      <th>Category Parent</th>
      
      <th>action</th>
    </tr>
   </thead>
  <tbody>
  
    <tr>
      <th scope="row">1</th>
      <td>dsfads</td>
      <td></td>
      <td> </td>
      
      <td> </td>
        
      
      <td><a class=" btn btn-info"  href="">Edit</a>&nbsp;<a class="btn btn-danger" onclick="return confirm('are you sure to delete');" href="">Delete</a></td>
    </tr>
    
  </tbody>
</table>

</fieldset>
@endsection