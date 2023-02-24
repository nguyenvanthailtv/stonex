<!DOCTYPE html>
<html lang="en">
    @include('user.layout.head')
<body>
    <div class="loading">
        <span class="loader"></span>
    </div>
    {{-- Header --}}
    @include('user.layout.header')

    <main class="about">
        <div class="about__banner">
            <span class="about__banner__title">About us</span>
            <div class="about__banner__link"><a href="/">Home</a>/About us</div>
        </div>
        <div class="about__responsibility__wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12-xl col-12-lg col-12-md col-12-sm col-12-xs">
                        <div class="about__responsibility">
                            <div class="about__responsibility__left" data-aos="fade-right">
                                <p>our mission</p>
                                <h2>To work at the highest level of professional capacity and responsibility on chanllenging projects that require a variety of natural stone products while providing unparalleled customer service</h2>
                            </div>
                            <img class="about__responsibility__img" data-aos="fade-left" src="{{asset('assets/image/about3_3.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12-xl col-12-lg col-12-md col-12-sm col-12-xs">
                        <ul class="about__responsibility__list"  data-aos="fade-upt">
                            <li class="about__responsibility__list__item">
                                <img src="{{asset('assets/image/photo_2023-02-24_15-11-08.jpg')}}" alt="">
                                <h4>Expirence</h4>
                                <p>one of my favourite things I like to watch is the bloopers and outtakes that are shown of mistakes made</p>
                            </li>
                            <li class="about__responsibility__list__item">
                                <img src="{{asset('assets/image/photo_2023-02-24_15-11-11.jpg')}}" alt="">
                                <h4>Excellence</h4>
                                <p>Above the master bathroom and kitchen sits a mezzanine, acting as a loft space to further maximize funcitionality of the small space</p>
                            </li>
                            <li class="about__responsibility__list__item">
                                <img src="{{asset('assets/image/photo_2023-02-24_15-10-46.jpg')}}" alt="">
                                <h4>Exploration</h4>
                                <p>A delicate monotone palette runs throughout the apartment, heightening the intensity of light</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="about__vision">
            .container
        </div>
    </main>

    {{-- footer --}}
    @include('user.layout.footer')


</body>
</html>
