@extends('Dashboard.layouts.master')
@section('content')
<div class="col-md-8">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">
                Create Content
            </div>
        </div>
        <div class="panel-body">
            <form action="contents" method="post" enctype="multipart/form-data">
                <input type='hidden' name='_token' value='{{csrf_token()}}'>
                <div class="form-group">
                    <label for="">Content Name</label>
                    <input id="text"  type="text" class="form-control"   placeholder="content name" name="content_name">
                </div>
                <p id="demo">Visit Microsoft!</p>
                <div class="form-group">
                    <label for="">  Category </label>
                    <select name="category_id" id="" class="form-control" required>
                        <option  selected>Select Category</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->category_title }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for=""> Slug</label>
                   
                    <a href="javascript: myFunction(this.form);" >try</a>
                    <input id="slug" type="text" class="form-control"  placeholder="slug" name="content_slug" value="">
                    
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="content_description" class="form-control" id="ck_editor" rows="3"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" name="content_file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Publish Date</label>
                    <div class="hero-unit">
                        <input class="form-control" name="published_at"  type="text" placeholder="click to show datepicker"  id="example1">
                    </div>

                </div>
                <fieldset class="form-group">
                    <legend>Status</legend>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="content_status" id="optionsRadios1" value="2" checked>
                        Unpublish
                    </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="content_status" id="optionsRadios2" value="1">
                    Publish
                </label>
            </div>

        </fieldset>


        <div>
            <button type="reset" class="btn btn-default">Cancel</button>
            <button type="submit" class="btn btn-primary pull-right">Save</button>
        </div>
    </form>
</div>
</div>
</div>
@endsection



