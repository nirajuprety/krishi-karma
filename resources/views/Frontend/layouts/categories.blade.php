@section('categories')
<section class="services section-padding" id="section_3">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-12 mx-auto">
        <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
          <img src="{{('assets/images/mixed_agriculture.jpg')}}" class="avatar-image img-fluid" alt="">
          <h2 class="text-white ms-4 mb-0">Our Categories</h2>
        </div>
        <div class="row pt-lg-5">
          @foreach ($data['categories'] as $category)
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$category->name}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$category->tag}}</h6>
              <p class="card-text">{{$category->field}}</p>
              <a href="" class="card-link btn btn-primary">Discover More</a>
            </div>
          </div>
          @endforeach


        </div>
      </div>
    </div>
  </div>
  </div>
</section>

@endsection