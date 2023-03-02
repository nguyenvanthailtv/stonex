<!DOCTYPE html>
<html lang="en">

    @include('user.layout.head')
<body>
    {{-- Header --}}
    @include('user.layout.header')

    <main class="product-detail">
        <div class="container">
            <div class="row">
                <div class="col-12-xl col-12-lg col-12-md col-12-sm col-12-xs">
                    <div class="product-detail__link">
                        <a href="/">Home</a><a href="{{Route('product')}}">/ Products</a><a href="#">/ Natural Stonex</a><p>/Firenze Carrara Polished</p>
                    </div>
                </div>
            </div>
            <div class="row gap-2">
                <div class="col-6-xl col-6-lg col-12-md col-12-sm col-12-sx">
                    <div class="product-detail__img">
                        <div class="product-detail__img__primary">
                            <img id="img-original" src="{{asset('assets/image/home-1.png')}}" class="xzoom" xoriginal='{{asset('assets/image/home-1.png')}}'>
                            <div id="img-zoom" class="product-detail__img__primary--zoom">
                            </div>
                        </div>
                        <ul class="product-detail__img__list">
                            <li class="product-detail__img__list__item">
                                <img src="{{asset('assets/image/home-manmade.png')}}" alt="">
                            </li>
                            <li class="product-detail__img__list__item">
                                <img src="{{asset('assets/image/home-1.png')}}" alt="">
                            </li>
                            <li class="product-detail__img__list__item">
                                <img src="{{asset('assets/image/home-1.png')}}" alt="">
                            </li>
                            <li class="product-detail__img__list__item">
                                <img src="{{asset('assets/image/home-1.png')}}" alt="">
                            </li>
                            <li class="product-detail__img__list__item">
                                <img src="{{asset('assets/image/home-1.png')}}" alt="">
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-6-xl col-6-lg col-12-md col-12-sm col-12-sx">
                    <div class="product-detail__content">
                        <div class="product-detail__content__link">
                            <a href="#">Natural stone</a>
                            <a href="#">/ Marble</a>
                        </div>
                        <span class="product-detail__content__name">Firence Carrara Polished</span>
                        <p class="product-detail__content__desc">Tumbled tiles generally have have a soft. smooth and worn look to them. These tiles have been put in a large drum like a washing machine and tumbled, chipping away their edge and suface. This method is mostly used with natural stones.</p>
                        <div class="product-detail__content__btn">
                            <a href="#" class="product-detail__content__btn--enquire">Unquire</a>
                            <a href="tel:+" class="product-detail__content__btn--call">Call us</a>
                        </div>
                        <table>
                            <tr>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    {{-- footer --}}
    @include('user.layout.footer')
    <script src="{{asset('assets/js/product_detail.js')}}"></script>

</body>
</html>
