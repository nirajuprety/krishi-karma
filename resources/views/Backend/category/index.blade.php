@extends('Backend.index')

@section('title', 'Category')

@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="col-sm-6">
        <h1>Category Index</h1>
      </div>
      <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>S.N</th>
              <th>Name</th>
              <th>Tag</th>
              <th>Type</th>
              <th>Field</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
            <tr>
              <td> {{ $category['id'] }} </td>
              <td>{{$category['name']}}</td>
              <td>{{$category['tag']}}</td>
              <td>{{$category['type']}}</td>
              <td>{{$category['field']}}</td>
              <td>
                <a href="{{ route('category.edit',$category->id)}}" class="btn btn-primary">Edit</a>
                <form action="{{ route('category.destroy', $category->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>S.N</th>
              <th>Name</th>
              <th>Tag</th>
              <th>Type</th>
              <th>Field</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>
</div>
</div>

@endsection