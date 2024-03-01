<div id="movie" class="contentMovie">
    <div class="inner">
        <div class="header-entry" data-aos="fade-up">
            <h2 class="heading-block heading-center js-fadein">
                <span class="ttl-ja">30秒で分かる大成建設</span>
            </h2>
        </div>
        <div class="sliderMovie">
            <div id="movieList" class="swiper-wrapper js-fadein">
                <div class="movieItem swiper-slide" data-aos="fade-up">
                    <a target="_blank" href="https://d1ekkmgtajtxvf.cloudfront.net/public_iframe_html/EHfkFHSFMJ5yowIxHxg1p240AxcFpKITHJgkFaV4MTMKZ2uPqJERnatkMP02Gy8lMGEPqT1eZxIEMSIwZwqcFQuFFwt3qwL4pGSFDIWnLzSmnIyDFR5GDmysnISlH3MSqKIDASAhITy4Dz1VZIAnJwuWrQqSomyEql4hYTu0qUOmBv8iMQSyqJIbqzWkMTZkowxhL2kiqJEzpz9hqP5hMKDiZQNkY2I2nKW5Y2cmY2I2nKW5YaOfLKyypv5gnJ4hnaZfYQNfZGpjAmp4AwHjAN%3D%3D/index.html" data-lity="data-lity">
                        <p class="movieImg">
                            <picture>
                                <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/movie/top_movie_img01_sp.png 2x')}}">
                                <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/movie/top_movie_img01_pc.png')}}">
                                <img class="sizes" src="{{asset('images/contentBox/movie/top_movie_img01_pc.png')}}" alt="">
                            </picture>
                        </p>
                        <p class="movieTxt">部門紹介</p>
                    </a>
                </div>
                <div class="movieItem swiper-slide" data-aos="fade-up">
                    <a target="_blank" href="https://d1ekkmgtajtxvf.cloudfront.net/public_iframe_html/EHfkK3OeYKOBHTqSZ1ykJyuBG1AbqR1OFS9srGqcq0uPqTAVEx1xMv1zGGMiMRcfLySYDv1sIUuKFIZgETkHJQMXL3M1MTIAH0csDGV1qyt5qTcLIIcWJR9PHSEEpHgxoKEwM0L1JJZlD2x1oyyVAHEcISWRAwWLDF4hYTu0qUOmBv8iMQSyqJIbqzWkMTZkowxhL2kiqJEzpz9hqP5hMKDiZQNkY2I2nKW5Y2cmY2I2nKW5YaOfLKyypv5gnJ4hnaZfYQNfZGpjAmp4AwDkBN%3D%3D/index.html" data-lity="data-lity">
                        <p class="movieImg">
                            <picture>
                                <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/movie/top_movie_img02_sp.png 2x')}}">
                                <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/movie/top_movie_img02_pc.png')}}">
                                <img class="sizes" src="{{asset('images/contentBox/movie/top_movie_img02_pc.png')}}" alt="">
                            </picture>
                        </p>
                        <p class="movieTxt">社員紹介</p>
                    </a>
                </div>
                <div class="movieItem swiper-slide" data-aos="fade-up">
                    <a target="_blank" href="https://d1ekkmgtajtxvf.cloudfront.net/public_iframe_html/EHfkEHgarIS5rHW3DJMuAS85FT5QnUyGMl10Az01E0bkFUOupaOWZzuzp1EapaEDFGIsHIyQExgRFz1BGJ9DGzc5YHfmoQSYHzSnpyufrJyXIKMYLGWfGzgCI1WUp25uJyScMUqWpRMkF1EPAz1OAwM5E09snxLmql4hYTu0qUOmBv8iMQSyqJIbqzWkMTZkowxhL2kiqJEzpz9hqP5hMKDiZQNkY2I2nKW5Y2cmY2I2nKW5YaOfLKyypv5gnJ4hnaZfYQNfZGpjAmp4AwZjBD%3D%3D/index.html" data-lity="data-lity">
                        <p class="movieImg">
                            <picture>
                                <source media="(max-width: 767px)" srcset="{{asset('images/contentBox/movie/top_movie_img03_sp.png 2x')}}">
                                <source media="(min-width: 768px)" srcset="{{asset('images/contentBox/movie/top_movie_img03_pc.png')}}">
                                <img class="sizes" src="{{asset('images/contentBox/movie/top_movie_img03_pc.png')}}" alt="">
                            </picture>
                        </p>
                        <p class="movieTxt">大成建設の取り組み</p>
                    </a>
                </div>
            </div>
            <button type="button" class="arrowSlider prevSlide-movie">
                <svg xmlns="http://www.w3.org/2000/svg" width="24.828" height="45.657" viewBox="0 0 24.828 45.657">
                    <path id="_" data-name="&lt;" d="M629,1733.265l-20,20,20,20" transform="translate(-607 -1730.437)" fill="none" stroke="#003180" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                </svg>
            </button>
            <button type="button" class="arrowSlider nextSlide-movie">
                <svg xmlns="http://www.w3.org/2000/svg" width="24.828" height="45.657" viewBox="0 0 24.828 45.657">
                    <path id="_" data-name="&lt;" d="M609,1733.265l20,20-20,20" transform="translate(-606.172 -1730.437)" fill="none" stroke="#003180" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                </svg>
            </button>
        </div>

    </div>
</div>

<script>
    $(function() {
        if ($(window).width() < 768) {
            let mySwiperRecommend = new Swiper('.sliderMovie', {
                loop: true,
                effect: 'slide',
                speed: 900,
                slidesPerView: 3,
                spaceBetween: 93,
                centeredSlides: true,
                autoplay: {
                    delay: 3000,
                    stopOnLastSlide: false,
                    disableOnInteraction: false,
                    reverseDirection: false
                },
                navigation: {
                    nextEl: '.nextSlide-movie',
                    prevEl: '.prevSlide-movie'
                },
                breakpoints: {
                    767: {
                        slidesPerView: 1,
                        centeredSlides: true
                    }
                },
                simulateTouch: false,
                autoResize: false,
                autoHeight: false,
                resizeReInit: true,
                watchOverflow: true
            });
        }
    });

</script>
