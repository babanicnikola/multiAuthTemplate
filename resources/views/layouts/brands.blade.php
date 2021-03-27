<div class="brands">
    <div class="container" style="max-width: 100% !important">
        <div class="row">
            <div class="col">
                <div class="brands_slider_container">
                    <div class="owl-carousel owl-theme brands_slider">
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="{{URL::asset('/images/brands/1.png')}}" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="{{URL::asset('/images/brands/2.png')}}" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="{{URL::asset('/images/brands/3.png')}}" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="{{URL::asset('/images/brands/4.png')}}" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="{{URL::asset('/images/brands/5.png')}}" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="{{URL::asset('/images/brands/6.png')}}" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="{{URL::asset('/images/brands/7.png')}}" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="{{URL::asset('/images/brands/8.png')}}" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="{{URL::asset('/images/brands/9.png')}}" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="{{URL::asset('/images/brands/10.png')}}" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="{{URL::asset('/images/brands/11.png')}}" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="{{URL::asset('/images/brands/12.png')}}" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="{{URL::asset('/images/brands/13.png')}}" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="{{URL::asset('/images/brands/14.png')}}" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="{{URL::asset('/images/brands/15.png')}}" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="{{URL::asset('/images/brands/16.png')}}" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="{{URL::asset('/images/brands/17.png')}}" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="{{URL::asset('/images/brands/18.png')}}" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="{{URL::asset('/images/brands/19.png')}}" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="{{URL::asset('/images/brands/20.png')}}" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="{{URL::asset('/images/brands/21.png')}}" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="{{URL::asset('/images/brands/22.png')}}" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="{{URL::asset('/images/brands/23.png')}}" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="{{URL::asset('/images/brands/24.png')}}" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="{{URL::asset('/images/brands/25.png')}}" alt=""></div>
                        </div>
                        
                    </div> <!-- Brands Slider Navigation -->
                    <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                    <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){

if($('.brands_slider').length)
{
var brandsSlider = $('.brands_slider');

brandsSlider.owlCarousel(
{
loop:true,
autoplay:true,
autoplayTimeout:1000,
nav:true,
dots:false,
autoWidth:true,
items:25,
margin:42
});

if($('.brands_prev').length)
{
var prev = $('.brands_prev');
prev.on('click', function()
{
brandsSlider.trigger('prev.owl.carousel');
});
}

if($('.brands_next').length)
{
var next = $('.brands_next');
next.on('click', function()
{
brandsSlider.trigger('next.owl.carousel');
});
}
}


});
</script>