<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="carousel-item">
      <img class="d-block w-100" src="{{URL::asset('/images/slide1.jpg')}}" data-color="lightblue" alt="First Image">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="{{URL::asset('/images/slide2.jpg')}}" data-color="firebrick" alt="Second Image">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="{{URL::asset('/images/slide3.jpg')}}" data-color="violet" alt="Third Image">
    </div>
  </div>
  <!-- Controls -->
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>

<script>
  var $item = $('.carousel-item'); 
  var $wHeight = $(window).height();
  
    $item.eq(0).addClass('active');
    $item.height($wHeight); 
    $item.addClass('full-screen');

$('.carousel img').each(function() {
  var $src = $(this).attr('src');
  var $color = $(this).attr('data-color');
  $(this).parent().css({
    'background-image' : 'url(' + $src + ')',
    'background-color' : $color
  });
  $(this).remove();
});

$(window).on('resize', function (){
  $wHeight = $(window).height();
  $item.height($wHeight);
});

$('.carousel').carousel({
  interval: 3000,
  pause: "false"
});
</script>