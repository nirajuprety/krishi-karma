@extends('Backend.index')

@section('title', 'Packages')


@section('content')
<div class="content-wrapper">
  <div class="col-sm-6">
    <h1>Package</h1>
  </div>
  <br>
  <div class="row">
    <!-- left column -->
    <div class="col">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Package</h3>
        </div>
        <form action="{{ route('package.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card-body">

            <div class="form-group">
              <label for="name">Title</label>
              <input type="text" name="title" class="form-control" id="name" placeholder="Enter the Category Name">
            </div>
            <div class="form-group">
              <label for="tag">tag</label>
              <input type="text" name="tag" class="form-control" id="tag" placeholder="Enter tag">
            </div>
            <div class="form-group">
              <label for="type">type</label>
              <input type="text" name="type" class="form-control" id="type" placeholder="Enter type">
            </div>

            <div class="form-group">
              <label>Categories</label>
              <select class="form-control" name="category_id" id="category_id">
                @foreach($data['categories'] as $category)
                <option value="{{$category->id}}"> {{$category->name}} </option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" name="description" class="form-control" id="description"
                placeholder="Enter Description for the package">
            </div>
            <div class="form-group">
              <label for="created_date">Created Date</label>
              <input type="date" name="created_date" id="created_date" placeholder="">
            </div>
            <div class="form-group">
              <label for="expire_date">Expire Date</label>
              <input type="date" name="expire_date" id="expire_date" placeholder="">
            </div>

            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" name="image" id="image">
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