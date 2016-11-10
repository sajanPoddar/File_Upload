@extends('Dashboard.layouts.master')
@section('content')
<div class="col-md-8">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">
                Create Category
            </div>
        </div>
        <div class="panel-body">
            <form action="categories" method="post">
                <input type='hidden' name='_token' value='{{csrf_token()}}'>
                <div class="form-group">
                    <label for="">Category Title</label>
                     <input  class="form-control"  aria-describedby="titleHelp" placeholder="Title" name="category_title">
                </div>
                
                <div class="form-group">
                    <label for=""> Parent Category </label>
                    <select name="parent_Category" id="" class="form-control" required>
                        <option value="0" selected>No parent</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->category_title }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for=""> Slug</label>
                    <input  class="form-control"  aria-describedby="titleHelp" placeholder="Title" name="category_slug">
                    
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="category_description" class="form-control" id="ck_editor" rows="3"></textarea>
                </div>
                <div>
                    <button type="reset" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-primary pull-right">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection



