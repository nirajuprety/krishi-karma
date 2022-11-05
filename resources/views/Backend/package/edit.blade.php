@extends('Backend.index')

@section('title', 'Edit Packages')


@section('content')
<div class="content-wrapper">
  <div class="col-sm-6">
    <h1>Edit Package</h1>
  </div>
  <br>
  <div class="row">
    <!-- left column -->
    <div class="col">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Edit Package</h3>
        </div>
        <form action="{{route('package.update', $package->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">

            <div class="form-group">
              <label for="name">Title</label>
              <input type="text" name="title" class="form-control" id="name" value="{{$package->title}}">
            </div>
            <div class="form-group">
              <label for="tag">tag</label>
              <input type="text" name="tag" class="form-control" id="tag" value="{{$package->tag}}">
            </div>
            <div class="form-group">
              <label for="type">type</label>
              <input type="text" name="type" class="form-control" id="type" value="{{$package->type}}">
            </div>
            <div class="form-group">
              <label for="categories">Categories</label>
              <select name="category_id" id="category_id">
                @foreach($data['categories'] as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
              </select>
            </div>

            {{-- --}}
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" name="description" class="form-control" id="description"
                value="{{$package->description}}">
            </div>
            <div class="form-group">
              <label for="expire_date">Expire Date</label>
              <input type="date" value="{{$package->expire_date}}" name="expire_date" id="expire_date" placeholder="">
            </div>

            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" value="{{$package->image}}" name="image" id="image">
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