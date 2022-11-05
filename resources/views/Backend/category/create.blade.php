@extends('Backend.index')

@section('title', 'Create Category')

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
          <h3 class="card-title">Create Category</h3>
        </div>
        <form action="{{ route('category.store') }}" method="POST">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Enter the Category Name">
            </div>
            <div class="form-group">
              <label for="tag">Tag</label>
              <input type="text" name="tag" class="form-control" id="tag" placeholder="Enter tag">
            </div>
            <div class="form-group">
              <label for="type">Type</label>
              <input type="text" name="type" class="form-control" id="type" placeholder="Enter type for the package">
            </div>
            <div class="form-group">
              <label for="amount">Field</label>
              <input type="text" name="field" class="form-control" id="field" placeholder="Enter the field">
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-success">Submit</button>
            <a href="" class="btn btn-danger">Clear</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection