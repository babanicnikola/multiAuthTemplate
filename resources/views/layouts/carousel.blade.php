<div class="container-fluid px-0">
  <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleControls" data-slide-to="1"></li>
      <li data-target="#carouselExampleControls" data-slide-to="2"></li>
    </ol>
      <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
              <div class="d-flex align-items-center justify-content-center min-vh-100">
                <img class="d-block w-100" src="{{URL::asset('/images/slide1.jpg')}}" alt="First slide">
              </div>
          </div>
          <div class="carousel-item">
              <div class="d-flex align-items-center justify-content-center min-vh-100">
                <img class="d-block w-100" src="{{URL::asset('/images/slide2.jpg')}}" alt="Second slide">
              </div>
          </div>
          <div class="carousel-item">
              <div class="d-flex align-items-center justify-content-center min-vh-100">
                <img class="d-block w-100" src="{{URL::asset('/images/slide3.jpg')}}" alt="Third slide">
              </div>
          </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
      
  </div>
</div>
<script>
  $('.carousel').carousel({
  interval: 3500
})
</script>