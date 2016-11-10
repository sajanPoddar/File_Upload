@extends('Dashboard.layouts.master')
@section('content')
<div class="col-md-12">

  <fieldset>
    <legend>
      Content List
      <a href="contents/create" class="btn btn-info btn-xs pull-right">New Content</a>
    </legend>
    <table class="table table-bordered table-striped data-table">
      <thead>
        <tr>
          <th>SL</th>
          <th>Content Name</th>
          <th>Content Slug</th>
          <th>Content Description</th>
          <th>Content File</th>
          <th>Content Status</th>
          <th>Category </th>
          <th>Published At</th>
          <th>action</th>
        </tr>
      </thead>
      <?php
      $i = 0;

      ?>
      <tbody>
       @foreach($contents as $content)
       <?php $i++;
       ?>
       
       <tr>
       
        <th scope="row"><?php echo $i;?></th>
       <td>{{ $content->content_name }}</td>
        <td>{{ $content->content_slug }}</td>
        <td>{{ substr($content->content_description , 0 ,50) }}</td>

        <td>
       
          <a href="{{ route('download.file', ['file' =>$content->content_file ] )}}"> <img src="/uploads/{{ $content->content_file }}" height="130px" alt=""/></a>

          <a href=""><video width="120" height="140" alt="" controls>
            <source src="/uploads/{{ $content->content_file }}" type="">

            </video> </a>
          </td>
          <td>{{ $content->content_status }}</td>
          <td>{{ $content->category_id }}</td>
          <td> {{ $content->published_at }} </td>
             

          <td><a class=" btn btn-info"  href="">Edit</a> 
            <form  method="post" action="contents/{{ $content->id }}">
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
  @endsection`