@include('Frontend.layouts.html_head')
@include('Frontend.layouts.navbar')
@include('Frontend.layouts.scripts')

@yield('html_head')
@yield('navbar')
<main>
  <section class="services section-padding" id="section_3">
    <div class="container">
      <div class="row">

        <div class="col-lg-10 col-12 mx-auto">
          <div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
            <img src="{{asset('assets/images/mixed_agriculture.jpg')}}" class="avatar-image img-fluid" alt="">

            <h2 class="text-white ms-4 mb-0">Packages</h2>
          </div>
          <div>
            {{-- <a class="btn btn-primary" href="index.html" role="button">Back</a> --}}
          </div>
          <div class="row pt-lg-5">
            @foreach($data['packages'] as $package)
            <div class="card flex" style="width: 18rem;">
              <img height="250px" width="200px" src="{{asset('/storage/images/packages/'.$package->image)}}"
                class="card-img-top" alt="photo">
              <div class="card-body">
                <h5 class="card-title">{{$package->title}}</h5>
                <p class="card-text">{{$package->description}}</p>
                <a href="#" class="btn btn-primary">Apply Now</a>
              </div>
            </div>
            @endforeach
          </div>
          {{-- <div class=" mt-4">
            <nav aria-label="...">
              <ul class="pagination">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div> --}}
        </div>

      </div>
    </div>
  </section>
</main>

@yield('scripts')