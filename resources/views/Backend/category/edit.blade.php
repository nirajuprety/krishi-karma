@extends('Backend.index')

@section('title', 'Edit Category')

@section('content')
<div class="content-wrapper">
  <div class="col-sm-6">
    <h1>Category</h1>
  </div>
  <br>
  <div class="row">
    <!-- left column -->
    <div class="col">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Edit</h3>
        </div>

        <form action="{{ route('category.update', $category->id) }}" method="POST">
          {{-- <input type="hidden" name="_token" value="<?php //echo csrf_token(); ?>"> --}}
          @csrf
          @method('PUT')
          <div class="card-body">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" value="{{$category->name}}" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label for="tag">Tag</label>
              <input type="text" name="tag" value="{{$category->tag}}" class="form-control" id="tag">
            </div>
            <div class="form-group">
              <label for="type">Type</label>
              <input type="text" name="type" value="{{$category->type}}" class="form-control" id="type">
            </div>
            <div class="form-group">
              <label for="amount">Field</label>
              <input type="text" name="field" value="{{$category->field}}" class="form-control" id="field">
            </div>
          </div>
          <!-- /.card-body -->
          <div class=" card-footer">
            <button type="submit" value="Edit" class="btn btn-success">Edit</button>
            {{-- <button type="submit" class="btn btn-danger">Cancel</button> --}}
            <a href="" class="btn btn-danger" target="_blank" rel="noopener noreferrer">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection