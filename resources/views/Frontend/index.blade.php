@include('Frontend.layouts.html_head')
@include('Frontend.layouts.scripts')
@include('Frontend.layouts.navbar')
@include('Frontend.layouts.categories')
@include('Frontend.layouts.footer')
@include('Frontend.layouts.contactus')
@include('Frontend.layouts.services')

@yield('html_head')
@yield('navbar')

<main>

  <section class="hero d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
      <div class="row">

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{asset('assets/images/peoples_greenHouse.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{asset('assets/images/peoples_infrontOffice.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{asset('assets/images/peoples_meeting.jpg')}}" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

      </div>
    </div>


  </section>
  <section class="about section-padding" id="section_2">
    <div class="container">
      <div class="row">

        <div class="col-lg-6 col-12">
          <img src="{{asset('assets/images/officer.jpg')}}" class="about-image img-fluid" alt="">
        </div>

        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
          <div class="about-thumb">

            <div class="section-title-wrap d-flex justify-content-end align-items-center mb-4">
              <h2 class="text-white me-4 mb-0">KrishiKarma</h2>

              <img src="{{asset('assets/images/Agricultural-Development-Bank.jpg')}}" class="avatar-image img-fluid"
                alt="">
            </div>

            <h3 class="pt-2 mb-3">Introduction</h3>

            <p>With the main objective of providing institutional credit for enhancing the production
              and productivity of the agricultural sector in the country, the
              <a href="index.html" target="_blank">KrishiKarma,</a> was established in 2008 under
              the<a href="https://www.adbl.gov.np/about-us/overview/" target="_blank">ADBN Act
                1967</a> and is suppported by <a href="https://adbl.gov.np/#!" target="_blank">Agricultural
                Development Bank Ltd., Nepal.</a> he main objective of
              this organization is provide the grant related to all the agricultural sectors.
            </p>

            <p> large number of governtment bodies are working online digitally.So, From the <a
                href="http://www.doanepal.gov.np/index.php" target="_blank">Department of
                Agriculture, Government of Nepal</a> is activating this portal.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <section class="clients section-padding">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-lg-12 col-12">
          <h3 class="text-center mb-5">Government bodies that supported US</h3>
        </div>

        <div class="col-lg-2 col-4 ms-auto clients-item-height">
          <img src="{{asset('assets/images/nepalBanijyabank.png')}}" class="clients-image img-fluid" alt="">
          <P class="supported-bodies-name">
            Nepal Baniya Bank
          </P>
        </div>

        <div class="col-lg-2 col-4 clients-item-height">
          <img src="{{asset('assets/images/nepalgov.jpg')}}" class="clients-image img-fluid" alt="">
          <P class="supported-bodies-name">
            Nepal Baniya Bank
          </P>
        </div>
        <div class="col-lg-2 col-4 clients-item-height">
          <img src="{{asset('assets/images/nepalRastraBank.jpg')}}" class="clients-image img-fluid" alt="">
          <P class="supported-bodies-name">
            Nepal Baniya Bank
          </P>
        </div>

        <div class="col-lg-2 col-4 clients-item-height">
          <img src="{{asset('assets/images/Agricultural-Development-Bank.jpg')}}" class="clients-image img-fluid"
            alt="">
          <P class="supported-bodies-name">
            Nepal Baniya Bank
          </P>
        </div>
        <div class="col-lg-2 col-4 clients-item-height">
          <img src="{{asset('assets/images/FAO_logo.svg.png')}}" class="clients-image img-fluid" alt="">
          <P class="supported-bodies-name">
            Nepal Baniya Bank
          </P>
        </div>
      </div>
    </div>
  </section>

  {{-- categories --}}
  @yield('categories')
  {{-- services --}}
  @yield('services')
  {{-- contactus --}}
  @yield('contactus')
</main>

@yield('footer')

<!-- JAVASCRIPT FILES -->
@yield('scripts')
</body>

</html>