@extends('Backend.index')

@section('title', 'Category')

@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="col-sm-6">
        <h1>Index</h1>
      </div>
      <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>S.N</th>
              <th>Title</th>
              <th>Description</th>
              <th>Image</th>
              <th>Created_date</th>
              <th>Expire_date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data['packages'] as $package)
            <tr>
              <td> {{ $package->id }} </td>
              <td> {{ $package->title }} </td>
              <td> {{ $package->description }} </td>
              <td>
                <img height="100px" width="auto" src="{{asset('/storage/images/packages/'.$package->image)}}">
              </td>
              <td> {{ $package->created_date }} </td>
              <td> {{ $package->expire_date }} </td>
              <td>
                <a href="{{route('package.edit', $package['id'])}}" class="btn btn-primary">Edit</a>
                <form action="{{route('package.destroy', $package['id'])}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>
</div>
</div>

@endsection