<!DOCTYPE html>
<html lang="en">

    @include('user.layout.head')
<body>
    {{-- Header --}}
    @include('user.layout.header')

    <main class="product">
        <div class="product__banner">
            <span class="product__banner__title">Product</span>
            <div class="product__banner__link"><a href="/">Home</a>/Product</div>
        </div>
        <div class="container product__container">
            <div class="row gap-3">
                <div class="col-3-xl col-3-lg col-4-md">
                    <div class="product__content">
                        <div class="product__content__filter">
                            <h3>Filters</h3>
                            <div class="product__content__filter__box">
                                <span>Material</span>
                                <ul class="product__content__filter__list">
                                    <li class="product__content__filter__list__item"><a href="">Basalt</a></li>
                                    <li class="product__content__filter__list__item"><a href="">Bluestone</a></li>
                                    <li class="product__content__filter__list__item"><a href="">Granite</a></li>
                                    <li class="product__content__filter__list__item"><a href="">Marble</a></li>
                                    <li class="product__content__filter__list__item"><a href="">Onyx</a></li>
                                </ul>
                            </div>

                            <div class="product__content__filter__box">
                                <span>Color</span>
                                <ul class="product__content__filter__list">
                                    <li class="product__content__filter__list__item"><a href="">Basalt</a></li>
                                    <li class="product__content__filter__list__item"><a href="">Bluestone</a></li>
                                    <li class="product__content__filter__list__item"><a href="">Granite</a></li>
                                    <li class="product__content__filter__list__item"><a href="">Marble</a></li>
                                    <li class="product__content__filter__list__item"><a href="">Onyx</a></li>
                                </ul>
                            </div>

                            <div class="product__content__filter__box">
                                <span>Type of use</span>
                                <ul class="product__content__filter__list">
                                    <li class="product__content__filter__list__item"><a href="">Basalt</a></li>
                                    <li class="product__content__filter__list__item"><a href="">Bluestone</a></li>
                                    <li class="product__content__filter__list__item"><a href="">Granite</a></li>
                                    <li class="product__content__filter__list__item"><a href="">Marble</a></li>
                                    <li class="product__content__filter__list__item"><a href="">Onyx</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-9-xl col-9-lg col-8-md col-12-sm col-12-xs">
                    <div class="row">
                        <div class="col-12-sm col-12-xs">
                            <div class="mobile-filter">
                                <div class="mobile-filter__content filter__btn">
                                    <svg width="42" class="mt-1" height="24" viewBox="0 0 22 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="0301 icon filter">
                                            <rect id="Rectangle" y="2" width="22" height="2" fill="#998543"></rect>
                                            <rect id="Rectangle Copy 3" y="11" width="22" height="2" fill="#998543"></rect>
                                            <path id="Oval" fill-rule="evenodd" clip-rule="evenodd" d="M8.5 5C9.88071 5 11 3.88071 11 2.5C11 1.11929 9.88071 0 8.5 0C7.11929 0 6 1.11929 6 2.5C6 3.88071 7.11929 5 8.5 5Z" fill="#998543"></path>
                                            <path id="Oval Copy" fill-rule="evenodd" clip-rule="evenodd" d="M15.5 14C16.8807 14 18 12.8807 18 11.5C18 10.1193 16.8807 9 15.5 9C14.1193 9 13 10.1193 13 11.5C13 12.8807 14.1193 14 15.5 14Z" fill="#998543"></path>
                                        </g>
                                    </svg>
                                    <span>Filter</span>
                                </div>

                                <div class="mobile-filter__menu__wrapper">
                                    <div class="mobile-filter__menu">
                                        <div class="mobile-filter__menu__title">
                                            <svg width="42" class="mt-1" height="24" viewBox="0 0 22 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="0301 icon filter">
                                                    <rect id="Rectangle" y="2" width="22" height="2" fill="#998543"></rect>
                                                    <rect id="Rectangle Copy 3" y="11" width="22" height="2" fill="#998543"></rect>
                                                    <path id="Oval" fill-rule="evenodd" clip-rule="evenodd" d="M8.5 5C9.88071 5 11 3.88071 11 2.5C11 1.11929 9.88071 0 8.5 0C7.11929 0 6 1.11929 6 2.5C6 3.88071 7.11929 5 8.5 5Z" fill="#998543"></path>
                                                    <path id="Oval Copy" fill-rule="evenodd" clip-rule="evenodd" d="M15.5 14C16.8807 14 18 12.8807 18 11.5C18 10.1193 16.8807 9 15.5 9C14.1193 9 13 10.1193 13 11.5C13 12.8807 14.1193 14 15.5 14Z" fill="#998543"></path>
                                                </g>
                                            </svg>
                                            <span>Filter</span>
                                        </div>
                                        <ul class="mobile-filter__menu__list">
                                            <li class="mobile-filter__menu__list__item">
                                                <span>Material</span>
                                                <ul class="mobile-filter__list">
                                                    <li class="mobile-filter__list__item"><a href="">Basalt</a></li>
                                                    <li class="mobile-filter__list__item"><a href="">Bluestone</a></li>
                                                    <li class="mobile-filter__list__item"><a href="">Granite</a></li>
                                                    <li class="mobile-filter__list__item"><a href="">Marble</a></li>
                                                    <li class="mobile-filter__list__item"><a href="">Onyx</a></li>
                                                </ul>
                                            </li>

                                            <li class="mobile-filter__menu__list__item">
                                                <span>Color</span>
                                                <ul class="mobile-filter__list">
                                                    <li class="mobile-filter__list__item"><a href="">Basalt</a></li>
                                                    <li class="mobile-filter__list__item"><a href="">Bluestone</a></li>
                                                    <li class="mobile-filter__list__item"><a href="">Granite</a></li>
                                                    <li class="mobile-filter__list__item"><a href="">Marble</a></li>
                                                    <li class="mobile-filter__list__item"><a href="">Onyx</a></li>
                                                </ul>
                                            </li>

                                            <li class="mobile-filter__menu__list__item">
                                                <span>Type of use</span>
                                                <ul class="mobile-filter__list">
                                                    <li class="mobile-filter__list__item"><a href="">Basalt</a></li>
                                                    <li class="mobile-filter__list__item"><a href="">Bluestone</a></li>
                                                    <li class="mobile-filter__list__item"><a href="">Granite</a></li>
                                                    <li class="mobile-filter__list__item"><a href="">Marble</a></li>
                                                    <li class="mobile-filter__list__item"><a href="">Onyx</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="mobile-filter__menu__bottom">
                                            <a href="#" class="mobile-filter__menu__btn--apply">Apply</a>
                                            <a href="#" class="mobile-filter__menu__btn--reset">Reset</a>
                                        </div>

                                    </div>

                                    <div class="mobile-filter__menu__close">
                                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;}</style></defs><title></title><g data-name="Layer 2" id="Layer_2"><path d="M4,29a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42l24-24a1,1,0,1,1,1.42,1.42l-24,24A1,1,0,0,1,4,29Z"></path><path d="M28,29a1,1,0,0,1-.71-.29l-24-24A1,1,0,0,1,4.71,3.29l24,24a1,1,0,0,1,0,1.42A1,1,0,0,1,28,29Z"></path></g><g id="frame"><rect class="cls-1" height="32" width="32"></rect></g></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gap-1">
                        <div class="col-4-xl col-4-lg col-6-md col-6-sm col-12-xs">
                            <div class="product__card">
                                <div class="product__card__img">
                                    <a href="{{route('product_detail')}}"><img src="{{asset('assets/image/absolute-black-01.jpg')}}" alt=""></a>
                                    <span class="product__card__btn">quick view
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path id="view icon" fill-rule="evenodd" clip-rule="evenodd" d="M6.30227 0C9.77735 0 12.6045 2.8272 12.6045 6.30227C12.6045 7.82415 12.0623 9.22172 11.1609 10.312L17 16.1512L16.1512 17L10.312 11.1609C9.22172 12.0623 7.82415 12.6045 6.30227 12.6045C2.8272 12.6045 0 9.77735 0 6.30227C0 2.8272 2.82717 0 6.30227 0ZM6.30227 11.4041C9.11543 11.4041 11.4041 9.11543 11.4041 6.30227C11.4041 3.48912 9.11543 1.20043 6.30227 1.20043C3.48912 1.20043 1.20043 3.48912 1.20043 6.30227C1.20043 9.11543 3.48912 11.4041 6.30227 11.4041ZM9.39474 5.69378H6.83254V3.13158H5.69378V5.69378H3.13158V6.83254H5.69378V9.39474H6.83254V6.83254H9.39474V5.69378Z" fill="#fff"></path>
                                        </svg>
                                    </span>
                                    <div class="quick-view__wrapper">
                                        <div class="quick-view">
                                            <div class="quick-view__left">
                                                <img src="{{asset('assets/image/absolute-black-01.jpg')}}" alt="">
                                            </div>
                                            <div class="quick-view__right">
                                                <div class="quick-view__right__close">
                                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;}</style></defs><title/><g data-name="Layer 2" id="Layer_2"><path d="M4,29a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42l24-24a1,1,0,1,1,1.42,1.42l-24,24A1,1,0,0,1,4,29Z"/><path d="M28,29a1,1,0,0,1-.71-.29l-24-24A1,1,0,0,1,4.71,3.29l24,24a1,1,0,0,1,0,1.42A1,1,0,0,1,28,29Z"/></g><g id="frame"><rect class="cls-1" height="32" width="32"/></g></svg>
                                                </div>
                                                <div class="quick-view__content">
                                                    <div class="quick-view__content__title">
                                                        <a href="#">Natural stone</a>
                                                        <a href="#">/ Marble</a>
                                                    </div>
                                                    <span>Arabestaco Corchia</span>
                                                    <p>Tumbled tiles genarally have have a soft, smooth and worn look to them. These title have been put in a large drum like a washing machine and tumbled, chipping away their edge and surface. This method is mostly used with natural stones</p>
                                                    <div class="quick-view__content__btn">
                                                        <a href="{{route('product_detail')}}">View detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product__card__content">
                                    <span class="product__card__content__category">Marble</span>
                                    <a href="{{route('product_detail')}}" class="product__card__content__name">Antique Black</a>
                                    <a href="{{route('product_detail')}}" class="product__card__content__view">View detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4-xl col-4-lg col-6-md col-6-sm col-12-xs">
                            <div class="product__card">
                                <div class="product__card__img">
                                    <a href="#"><img src="{{asset('assets/image/absolute-black-01.jpg')}}" alt=""></a>
                                    <span class="product__card__btn">quick view
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path id="view icon" fill-rule="evenodd" clip-rule="evenodd" d="M6.30227 0C9.77735 0 12.6045 2.8272 12.6045 6.30227C12.6045 7.82415 12.0623 9.22172 11.1609 10.312L17 16.1512L16.1512 17L10.312 11.1609C9.22172 12.0623 7.82415 12.6045 6.30227 12.6045C2.8272 12.6045 0 9.77735 0 6.30227C0 2.8272 2.82717 0 6.30227 0ZM6.30227 11.4041C9.11543 11.4041 11.4041 9.11543 11.4041 6.30227C11.4041 3.48912 9.11543 1.20043 6.30227 1.20043C3.48912 1.20043 1.20043 3.48912 1.20043 6.30227C1.20043 9.11543 3.48912 11.4041 6.30227 11.4041ZM9.39474 5.69378H6.83254V3.13158H5.69378V5.69378H3.13158V6.83254H5.69378V9.39474H6.83254V6.83254H9.39474V5.69378Z" fill="#fff"></path>
                                        </svg>
                                    </span>
                                    <div class="quick-view__wrapper">
                                        <div class="quick-view">
                                            <div class="quick-view__left">
                                                <img src="{{asset('assets/image/absolute-black-01.jpg')}}" alt="">
                                            </div>
                                            <div class="quick-view__right">
                                                <div class="quick-view__right__close">
                                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;}</style></defs><title/><g data-name="Layer 2" id="Layer_2"><path d="M4,29a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42l24-24a1,1,0,1,1,1.42,1.42l-24,24A1,1,0,0,1,4,29Z"/><path d="M28,29a1,1,0,0,1-.71-.29l-24-24A1,1,0,0,1,4.71,3.29l24,24a1,1,0,0,1,0,1.42A1,1,0,0,1,28,29Z"/></g><g id="frame"><rect class="cls-1" height="32" width="32"/></g></svg>
                                                </div>
                                                <div class="quick-view__content">
                                                    <div class="quick-view__content__title">
                                                        <a href="#">Natural stone</a>
                                                        <a href="#">/ Marble</a>
                                                    </div>
                                                    <span>Arabestaco Corchia</span>
                                                    <p>Tumbled tiles genarally have have a soft, smooth and worn look to them. These title have been put in a large drum like a washing machine and tumbled, chipping away their edge and surface. This method is mostly used with natural stones</p>
                                                    <div class="quick-view__content__btn">
                                                        <a href="#">View detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product__card__content">
                                    <span class="product__card__content__category">Marble</span>
                                    <a href="#" class="product__card__content__name">Antique Black</a>
                                    <a href="#" class="product__card__content__view">View detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4-xl col-4-lg col-6-md col-6-sm col-12-xs">
                            <div class="product__card">
                                <div class="product__card__img">
                                    <a href="#"><img src="{{asset('assets/image/absolute-black-01.jpg')}}" alt=""></a>
                                    <span class="product__card__btn">quick view
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path id="view icon" fill-rule="evenodd" clip-rule="evenodd" d="M6.30227 0C9.77735 0 12.6045 2.8272 12.6045 6.30227C12.6045 7.82415 12.0623 9.22172 11.1609 10.312L17 16.1512L16.1512 17L10.312 11.1609C9.22172 12.0623 7.82415 12.6045 6.30227 12.6045C2.8272 12.6045 0 9.77735 0 6.30227C0 2.8272 2.82717 0 6.30227 0ZM6.30227 11.4041C9.11543 11.4041 11.4041 9.11543 11.4041 6.30227C11.4041 3.48912 9.11543 1.20043 6.30227 1.20043C3.48912 1.20043 1.20043 3.48912 1.20043 6.30227C1.20043 9.11543 3.48912 11.4041 6.30227 11.4041ZM9.39474 5.69378H6.83254V3.13158H5.69378V5.69378H3.13158V6.83254H5.69378V9.39474H6.83254V6.83254H9.39474V5.69378Z" fill="#fff"></path>
                                        </svg>
                                    </span>
                                    <div class="quick-view__wrapper">
                                        <div class="quick-view">
                                            <div class="quick-view__left">
                                                <img src="{{asset('assets/image/absolute-black-01.jpg')}}" alt="">
                                            </div>
                                            <div class="quick-view__right">
                                                <div class="quick-view__right__close">
                                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;}</style></defs><title/><g data-name="Layer 2" id="Layer_2"><path d="M4,29a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42l24-24a1,1,0,1,1,1.42,1.42l-24,24A1,1,0,0,1,4,29Z"/><path d="M28,29a1,1,0,0,1-.71-.29l-24-24A1,1,0,0,1,4.71,3.29l24,24a1,1,0,0,1,0,1.42A1,1,0,0,1,28,29Z"/></g><g id="frame"><rect class="cls-1" height="32" width="32"/></g></svg>
                                                </div>
                                                <div class="quick-view__content">
                                                    <div class="quick-view__content__title">
                                                        <a href="#">Natural stone</a>
                                                        <a href="#">/ Marble</a>
                                                    </div>
                                                    <span>Arabestaco Corchia</span>
                                                    <p>Tumbled tiles genarally have have a soft, smooth and worn look to them. These title have been put in a large drum like a washing machine and tumbled, chipping away their edge and surface. This method is mostly used with natural stones</p>
                                                    <div class="quick-view__content__btn">
                                                        <a href="#">View detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product__card__content">
                                    <span class="product__card__content__category">Marble</span>
                                    <a href="#" class="product__card__content__name">Antique Black</a>
                                    <a href="#" class="product__card__content__view">View detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4-xl col-4-lg col-6-md col-6-sm col-12-xs">
                            <div class="product__card">
                                <div class="product__card__img">
                                    <a href="#"><img src="{{asset('assets/image/absolute-black-01.jpg')}}" alt=""></a>
                                    <span class="product__card__btn">quick view
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path id="view icon" fill-rule="evenodd" clip-rule="evenodd" d="M6.30227 0C9.77735 0 12.6045 2.8272 12.6045 6.30227C12.6045 7.82415 12.0623 9.22172 11.1609 10.312L17 16.1512L16.1512 17L10.312 11.1609C9.22172 12.0623 7.82415 12.6045 6.30227 12.6045C2.8272 12.6045 0 9.77735 0 6.30227C0 2.8272 2.82717 0 6.30227 0ZM6.30227 11.4041C9.11543 11.4041 11.4041 9.11543 11.4041 6.30227C11.4041 3.48912 9.11543 1.20043 6.30227 1.20043C3.48912 1.20043 1.20043 3.48912 1.20043 6.30227C1.20043 9.11543 3.48912 11.4041 6.30227 11.4041ZM9.39474 5.69378H6.83254V3.13158H5.69378V5.69378H3.13158V6.83254H5.69378V9.39474H6.83254V6.83254H9.39474V5.69378Z" fill="#fff"></path>
                                        </svg>
                                    </span>
                                    <div class="quick-view__wrapper">
                                        <div class="quick-view">
                                            <div class="quick-view__left">
                                                <img src="{{asset('assets/image/absolute-black-01.jpg')}}" alt="">
                                            </div>
                                            <div class="quick-view__right">
                                                <div class="quick-view__right__close">
                                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;}</style></defs><title/><g data-name="Layer 2" id="Layer_2"><path d="M4,29a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42l24-24a1,1,0,1,1,1.42,1.42l-24,24A1,1,0,0,1,4,29Z"/><path d="M28,29a1,1,0,0,1-.71-.29l-24-24A1,1,0,0,1,4.71,3.29l24,24a1,1,0,0,1,0,1.42A1,1,0,0,1,28,29Z"/></g><g id="frame"><rect class="cls-1" height="32" width="32"/></g></svg>
                                                </div>
                                                <div class="quick-view__content">
                                                    <div class="quick-view__content__title">
                                                        <a href="#">Natural stone</a>
                                                        <a href="#">/ Marble</a>
                                                    </div>
                                                    <span>Arabestaco Corchia</span>
                                                    <p>Tumbled tiles genarally have have a soft, smooth and worn look to them. These title have been put in a large drum like a washing machine and tumbled, chipping away their edge and surface. This method is mostly used with natural stones</p>
                                                    <div class="quick-view__content__btn">
                                                        <a href="#">View detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product__card__content">
                                    <span class="product__card__content__category">Marble</span>
                                    <a href="#" class="product__card__content__name">Antique Black</a>
                                    <a href="#" class="product__card__content__view">View detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4-xl col-4-lg col-6-md col-6-sm col-12-xs">
                            <div class="product__card">
                                <div class="product__card__img">
                                    <a href="#"><img src="{{asset('assets/image/absolute-black-01.jpg')}}" alt=""></a>
                                    <span class="product__card__btn">quick view
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path id="view icon" fill-rule="evenodd" clip-rule="evenodd" d="M6.30227 0C9.77735 0 12.6045 2.8272 12.6045 6.30227C12.6045 7.82415 12.0623 9.22172 11.1609 10.312L17 16.1512L16.1512 17L10.312 11.1609C9.22172 12.0623 7.82415 12.6045 6.30227 12.6045C2.8272 12.6045 0 9.77735 0 6.30227C0 2.8272 2.82717 0 6.30227 0ZM6.30227 11.4041C9.11543 11.4041 11.4041 9.11543 11.4041 6.30227C11.4041 3.48912 9.11543 1.20043 6.30227 1.20043C3.48912 1.20043 1.20043 3.48912 1.20043 6.30227C1.20043 9.11543 3.48912 11.4041 6.30227 11.4041ZM9.39474 5.69378H6.83254V3.13158H5.69378V5.69378H3.13158V6.83254H5.69378V9.39474H6.83254V6.83254H9.39474V5.69378Z" fill="#fff"></path>
                                        </svg>
                                    </span>
                                    <div class="quick-view__wrapper">
                                        <div class="quick-view">
                                            <div class="quick-view__left">
                                                <img src="{{asset('assets/image/absolute-black-01.jpg')}}" alt="">
                                            </div>
                                            <div class="quick-view__right">
                                                <div class="quick-view__right__close">
                                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;}</style></defs><title/><g data-name="Layer 2" id="Layer_2"><path d="M4,29a1,1,0,0,1-.71-.29,1,1,0,0,1,0-1.42l24-24a1,1,0,1,1,1.42,1.42l-24,24A1,1,0,0,1,4,29Z"/><path d="M28,29a1,1,0,0,1-.71-.29l-24-24A1,1,0,0,1,4.71,3.29l24,24a1,1,0,0,1,0,1.42A1,1,0,0,1,28,29Z"/></g><g id="frame"><rect class="cls-1" height="32" width="32"/></g></svg>
                                                </div>
                                                <div class="quick-view__content">
                                                    <div class="quick-view__content__title">
                                                        <a href="#">Natural stone</a>
                                                        <a href="#">/ Marble</a>
                                                    </div>
                                                    <span>Arabestaco Corchia</span>
                                                    <p>Tumbled tiles genarally have have a soft, smooth and worn look to them. These title have been put in a large drum like a washing machine and tumbled, chipping away their edge and surface. This method is mostly used with natural stones</p>
                                                    <div class="quick-view__content__btn">
                                                        <a href="#">View detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product__card__content">
                                    <span class="product__card__content__category">Marble</span>
                                    <a href="#" class="product__card__content__name">Antique Black</a>
                                    <a href="#" class="product__card__content__view">View detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    {{-- footer --}}
    @include('user.layout.footer')
    <script src="{{asset('assets/js/product.js')}}"></script>

</body>
</html>
