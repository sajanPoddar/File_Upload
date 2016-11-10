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
      <th>Category Slug</th>
      <th>Category Description</th>
      <th>Category Parent</th>
      <th>action</th>
    </tr>
   </thead>
   <?php
    $i = 0;

   ?>
  <tbody>
   @foreach($categories as $category)
    <?php $i++;
    ?>
    <tr>
      <th scope="row"><?php echo $i;?></th>
      <td>{{ $category->category_title }}</td>
      <td>{{ $category->category_slug }}</td>
      <td>{{ substr($category->category_description , 0 ,50) }}</td>
      <?php if($category->parent_Category == 0){?>
      <td>No Parent</td>
      <?php } else{?>
      <?php
      $results = DB::table('categories')->where('id' , $category->parent_Category)->get();
      // dd($results);
      ?>
      <td> {{ $category->category_title }} </td>
        
    <?php }?>  
    <td><a class=" btn btn-info"  href="">Edit</a> 
    <form  method="post" action="categories/{{ $category->id }}">
    <input type='hidden' name='_token' value='{{csrf_token()}}'>
    <input type="hidden" name="_method" value="DELETE">
   <button class="btn btn-danger" onclick="return confirm('are you sure to delete');" type="submit">Delete</button>
   </form>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>

</fieldset>
@endsection