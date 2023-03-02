<!DOCTYPE html>
<html lang="en">
    @include('user.layout.head')
<body>
    <div class="loading">
        <span class="loader"></span>
    </div>
    {{-- Header --}}
    @include('user.layout.header')


    <main id="home">

        {{-- Slider --}}
        <div class="home__slider__wrapper">
            <ul class="home__slider">
                <li class="home__slider__item">
                    <div class="home__slider__item__content">
                        <div class="container">
                            <div class="row">
                                <div class="col-2-o-xl col-1-o-lg"></div>
                                <div class="col-8-xl col-10-lg col-12-md col-12-sm col-12-xs">
                                    <div class="home__slider__item__box">
                                        <h1 class="home__slider__label">Inspriration for kitchen designs with Stonex</h1>
                                        <p class="home__slider__text">With awareness of our own limitations and of the business sector in the domestic market, we are step by-step improving ourr business methods with customers, and enhancing control procedures towards quality,</p>
                                        <div class="home__slider__btn">
                                            <a href="#"><p>Explore now</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="home__slider__item">
                    <div class="home__slider__item__content">
                        <div class="container">
                            <div class="row">
                                <div class="col-2-o-xl"></div>
                                <div class="col-8-xl">
                                    <div class="home__slider__item__box">
                                        <h1 class="home__slider__label">Inspriration for kitchen designs with Stonex</h1>
                                        <p class="home__slider__text">With awareness of our own limitations and of the business sector in the domestic market, we are step by-step improving ourr business methods with customers, and enhancing control procedures towards quality,</p>
                                        <div class="home__slider__btn">
                                            <a href="#"><p>Explore now</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="home__slider__item">
                    <div class="home__slider__item__content">
                        <div class="container">
                            <div class="row">
                                <div class="col-2-o-xl"></div>
                                <div class="col-8-xl">
                                    <div class="home__slider__item__box">
                                        <h1 class="home__slider__label">Inspriration for kitchen designs with Stonex</h1>
                                        <p class="home__slider__text">With awareness of our own limitations and of the business sector in the domestic market, we are step by-step improving ourr business methods with customers, and enhancing control procedures towards quality,</p>
                                        <div class="home__slider__btn">
                                            <a href="#"><p>Explore now</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        {{-- About us --}}
        <div class="home__about-us__wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12-xl col-12-lg col-12-md col-12-sm col-12-xs">
                        <div class="home__about-us">
                            <div class="home__about-us__content" data-aos="fade-right">
                                <h2 class="home__about-us__content__title">We bring comprehensive service in the natural stone area to construction projects in Vietnam</h2>
                                <p class="home__about-us__content__text">Willing to cooperate, share, and work hard to stand out in innovation and quality. We have earned a reputation for successfully implementing high quality projects</p>
                                <div class="home__about-us__content__btn">
                                    <a href="">About us</a>
                                </div>
                            </div>
                            <div class="home__about-us__content" data-aos="fade-left">
                                <img class="home__about-us__content__img" src="{{asset('assets/image/about3_3.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Products --}}
        <div class="home__product">
            <div class="container">
                <div class="row">
                    <div class="col-12-xl col-12-lg col-12-md col-12-sm col-12-xs">
                        <h1 class="home__product__title">Our products</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12-xl col-12-lg col-12-md col-12-sm col-12-xs">
                        <div class="home__product__card" >
                            <div class="home__product__card__container">
                                <div class="home__product__img" data-aos="fade-right">
                                    <img src="{{asset('assets/image/home-natural.png')}}" alt="">
                                </div>
                                <div class="home__product__content" data-aos="fade-left">
                                    <h3 class="home__product__content__label">Natural Stone</h3>
                                    <p class="home__product__content__text">Every large design company whether branding corporation or a regular down at heel tatty magazine publisher needs to fill holes in the workforce. If the canny freelance designer plays his or her cards right</p>
                                    <div class="home__product__content__btn">
                                        <a href="#">view more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12-xl col-12-lg col-12-md col-12-sm col-12-xs">
                        <div class="home__product__card">
                            <div class="home__product__card__container">
                                <div class="home__product__content" data-aos="fade-right">
                                    <h3 class="home__product__content__label">Natural Stone</h3>
                                    <p class="home__product__content__text">Every large design company whether branding corporation or a regular down at heel tatty magazine publisher needs to fill holes in the workforce. If the canny freelance designer plays his or her cards right</p>
                                    <div class="home__product__content__btn">
                                        <a href="#">view more</a>
                                    </div>
                                </div>
                                <div class="home__product__img" data-aos="fade-left">
                                    <img src="{{asset('assets/image/home-natural.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12-xl col-12-lg col-12-md col-12-sm col-12-xs">
                        <div class="home__product__card">
                            <div class="home__product__card__container">
                                <div class="home__product__img" data-aos="fade-right">
                                    <img src="{{asset('assets/image/home-natural.png')}}" alt="">
                                </div>
                                <div class="home__product__content" data-aos="fade-left">
                                    <h3 class="home__product__content__label">Natural Stone</h3>
                                    <p class="home__product__content__text">Every large design company whether branding corporation or a regular down at heel tatty magazine publisher needs to fill holes in the workforce. If the canny freelance designer plays his or her cards right</p>
                                    <div class="home__product__content__btn">
                                        <a href="#">view more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- projects --}}
        <div class="home__project">
            <div class="container">
                <div class="row">
                    <div class="col-12-xl col-12-lg col-12-md col-12-sm col-12-xs">
                        <div class="home__project__title">
                            <h3>Featured projects</h3>
                            <a href="#" class="home__project__link">All projects</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12-xl col-12-lg col-12-md col-12-sm col-12-xs">
                        <ul draggable="false"  class="home__project__slider" data-aos="fade-up">
                            <li draggable="false"  class="home__project__slider__item">
                                <img src="{{asset('assets/image/qmg-5362-hdr.jpg')}}" alt="">
                                <a href="#" class="home__project__slider__item__link">
                                    <span>Can Tho International Airport Station</span>
                                    <p>View detail</p>
                                </a>
                            </li>
                            <li draggable="false"  class="home__project__slider__item">
                                <img src="{{asset('assets/image/qmg-5362-hdr.jpg')}}" alt="">
                                <a href="#" class="home__project__slider__item__link">
                                    <span>Can Tho International Airport Station</span>
                                    <p>View detail</p>
                                </a>
                            </li>
                            <li draggable="false"  class="home__project__slider__item">
                                <img src="{{asset('assets/image/qmg-5362-hdr.jpg')}}" alt="">
                                <a href="#" class="home__project__slider__item__link">
                                    <span>Can Tho International Airport Station</span>
                                    <p>View detail</p>
                                </a>
                            </li>
                            <li draggable="false"  class="home__project__slider__item">
                                <img src="{{asset('assets/image/qmg-5362-hdr.jpg')}}" alt="">
                                <a href="#" class="home__project__slider__item__link">
                                    <span>Can Tho International Airport Station</span>
                                    <p>View detail</p>
                                </a>
                            </li>
                            <li draggable="false"  class="home__project__slider__item">
                                <img src="{{asset('assets/image/qmg-5362-hdr.jpg')}}" alt="">
                                <a href="#" class="home__project__slider__item__link">
                                    <span>Can Tho International Airport Station</span>
                                    <p>View detail</p>
                                </a>
                            </li>
                            <li draggable="false"  class="home__project__slider__item">
                                <img src="{{asset('assets/image/qmg-5362-hdr.jpg')}}" alt="">
                                <a href="#" class="home__project__slider__item__link">
                                    <span>Can Tho International Airport Station</span>
                                    <p>View detail</p>
                                </a>
                            </li>
                            <li draggable="false"  class="home__project__slider__item">
                                <img src="{{asset('assets/image/qmg-5362-hdr.jpg')}}" alt="">
                                <a href="#" class="home__project__slider__item__link">
                                    <span>Can Tho International Airport Station</span>
                                    <p>View detail</p>
                                </a>
                            </li>
                            <li draggable="false"  class="home__project__slider__item">
                                <img src="{{asset('assets/image/qmg-5362-hdr.jpg')}}" alt="">
                                <a href="#" class="home__project__slider__item__link">
                                    <span>Can Tho International Airport Station</span>
                                    <p>View detail</p>
                                </a>
                            </li>
                            <li draggable="false"  class="home__project__slider__item">
                                <img src="{{asset('assets/image/qmg-5362-hdr.jpg')}}" alt="">
                                <a href="#" class="home__project__slider__item__link">
                                    <span>Can Tho International Airport Station</span>
                                    <p>View detail</p>
                                </a>
                            </li>
                            <li draggable="false"  class="home__project__slider__item">
                                <img src="{{asset('assets/image/qmg-5362-hdr.jpg')}}" alt="">
                                <a href="#" class="home__project__slider__item__link">
                                    <span>Can Tho International Airport Station</span>
                                    <p>View detail</p>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12-xl col-12-lg col-12-md col-12-sm col-12-xs">
                        <div class="home__project__help__wrapper" data-aos="fade-up">
                            <div class="home__project__help">
                                <h3 class="home__project__help__title">Need out helps?</h3>
                                <p class="home__project__help__text">Enter your email so can give you detail information and advise about our products, services and promotion!</p>
                                <form action="" class="home__project__help__form">
                                    <input type="text" placeholder="Your email address">
                                    <button type="submit">submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    {{-- footer --}}
    @include('user.layout.footer')

    <script src="{{asset('assets/js/home.js')}}" defer></script>

</body>
</html>
