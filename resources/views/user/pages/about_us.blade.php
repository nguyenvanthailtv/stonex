<!DOCTYPE html>
<html lang="en">
    @include('user.layout.head')
<body>
    {{-- <div class="loading">
        <span class="loader"></span>
    </div> --}}
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
            <div class="container">
                <div class="row">
                    <div class="col-6-xl col-6-lg col-7-md col-12-sm col-12-xs">
                        <div class="about__vision__content" data-aos="fade-up">
                            <svg width="51" height="30" viewBox="0 0 51 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.4946 0L0 30H12.2554L29.75 0H17.4946Z" fill="white"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M38.7446 0L21.25 30H33.5054L51 0H38.7446Z" fill="white"></path>
                            </svg>
                            <p>Promote econamocally-sustainable values by using products in accorrdance with international standards and maintaining a staff of creative, disciplined, and dedicated employees</p>
                            <span>- Stonex vision</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about__core-value" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-12 xl col-12-lg col-12-md col-12-sm col-12-xs">
                        <h2 class="about__core-value__title">Core values of Stonex</h2>
                    </div>
                </div>
                <div class="row gap-2">
                    <div class="col-4-xl col-4-lg col-4-md col-6-sm col-12-xs">
                        <div class="about__core-value__content">
                            <div class="about__core-value__content__svg">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="40px" height="42px" viewBox="0 0 30 32" enable-background="new 0 0 30 32" xml:space="preserve">
                                    <g>
                                        <path fill="#998543" d="M0.567,24c0.785,1.36,2.548,2.079,5.097,2.079c0,0,0,0,0.001,0c1.146,0,2.407-0.161,3.722-0.438
                                            C10.653,29.52,12.674,32,15,32s4.347-2.48,5.613-6.359c1.316,0.276,2.577,0.438,3.723,0.438c0,0,0,0,0,0
                                            c2.548,0,4.311-0.719,5.096-2.079c1.016-1.761,0.117-4.72-2.966-8c3.083-3.28,3.982-6.239,2.966-8
                                            c-0.785-1.36-2.548-2.079-5.097-2.079c-1.146,0-2.408,0.161-3.723,0.438C19.347,2.48,17.326,0,15,0s-4.347,2.48-5.613,6.359
                                            C8.071,6.082,6.809,5.921,5.664,5.921C3.115,5.921,1.352,6.64,0.567,8c-1.016,1.761-0.117,4.72,2.966,8
                                            C0.45,19.28-0.45,22.239,0.567,24z M15,31c-1.839,0-3.516-2.199-4.627-5.579c1.503-0.381,3.066-0.92,4.627-1.599
                                            c1.561,0.679,3.124,1.218,4.627,1.599C18.516,28.801,16.839,31,15,31z M9,16c0-1.164,0.062-2.297,0.168-3.393
                                            c0.893-0.622,1.837-1.228,2.832-1.803c0.984-0.568,1.991-1.077,3-1.533c1.009,0.455,2.016,0.964,3,1.533
                                            c0.995,0.574,1.938,1.18,2.832,1.803C20.938,13.703,21,14.836,21,16s-0.062,2.297-0.168,3.393
                                            c-0.893,0.622-1.837,1.228-2.832,1.803c-0.984,0.568-1.991,1.077-3,1.533c-1.009-0.455-2.016-0.964-3-1.533
                                            c-0.995-0.574-1.938-1.18-2.832-1.803C9.062,18.297,9,17.164,9,16z M8.098,18.623C6.952,17.762,5.914,16.878,5.012,16
                                            c0.902-0.878,1.94-1.762,3.086-2.623C8.039,14.231,8,15.102,8,16S8.039,17.769,8.098,18.623z M9.321,11.286
                                            c0.184-1.341,0.442-2.604,0.764-3.754c1.195,0.301,2.435,0.717,3.682,1.219C13.005,9.12,12.245,9.508,11.5,9.938
                                            C10.727,10.385,10.012,10.835,9.321,11.286z M16.232,8.751c1.247-0.502,2.487-0.918,3.682-1.219c0.322,1.15,0.58,2.413,0.764,3.754
                                            c-0.69-0.451-1.406-0.901-2.179-1.348C17.755,9.508,16.995,9.12,16.232,8.751z M21.902,13.377c1.147,0.861,2.184,1.744,3.086,2.623
                                            c-0.902,0.878-1.94,1.762-3.086,2.623C21.961,17.769,22,16.898,22,16S21.961,14.231,21.902,13.377z M20.679,20.714
                                            c-0.184,1.341-0.442,2.604-0.764,3.754c-1.195-0.301-2.435-0.717-3.682-1.219c0.763-0.368,1.523-0.757,2.268-1.187
                                            C19.273,21.615,19.988,21.165,20.679,20.714z M11.5,22.062c0.745,0.43,1.505,0.819,2.268,1.187
                                            c-1.247,0.502-2.487,0.918-3.682,1.219c-0.322-1.15-0.58-2.413-0.764-3.754C10.012,21.165,10.727,21.615,11.5,22.062z M28.567,23.5
                                            c-0.588,1.019-2.09,1.579-4.23,1.579c-1.056,0-2.218-0.146-3.432-0.395c0.396-1.424,0.693-3.008,0.877-4.708
                                            c1.546-1.084,2.851-2.168,3.94-3.229C28.254,19.429,29.448,21.973,28.567,23.5z M24.336,6.921c2.14,0,3.643,0.561,4.23,1.579
                                            c0.882,1.527-0.313,4.071-2.845,6.753c-1.089-1.06-2.394-2.145-3.94-3.229c-0.184-1.7-0.481-3.284-0.877-4.708
                                            C22.118,7.067,23.281,6.921,24.336,6.921z M15,1c1.839,0,3.516,2.199,4.627,5.579C18.124,6.96,16.561,7.499,15,8.178
                                            c-1.561-0.679-3.124-1.218-4.627-1.599C11.484,3.199,13.161,1,15,1z M1.433,8.5c0.588-1.019,2.09-1.579,4.23-1.579
                                            c1.056,0,2.218,0.146,3.432,0.395c-0.396,1.424-0.693,3.008-0.877,4.708c-1.546,1.084-2.851,2.168-3.94,3.229
                                            C1.746,12.571,0.552,10.027,1.433,8.5z M4.278,16.747c1.089,1.06,2.394,2.145,3.94,3.229c0.184,1.7,0.481,3.284,0.877,4.708
                                            c-1.213,0.249-2.375,0.395-3.431,0.395c0,0-0.001,0-0.001,0c-2.14,0-3.643-0.561-4.23-1.579
                                            C0.552,21.973,1.746,19.429,4.278,16.747z"/>
                                        <path fill="#998543" d="M15,18.5c1.378,0,2.5-1.121,2.5-2.5s-1.122-2.5-2.5-2.5s-2.5,1.121-2.5,2.5S13.622,18.5,15,18.5z M15,14.5
                                            c0.827,0,1.5,0.673,1.5,1.5s-0.673,1.5-1.5,1.5s-1.5-0.673-1.5-1.5S14.173,14.5,15,14.5z"/>
                                    </g>
                                </svg>
                            </div>
                            <h3>responsibility in work</h3>
                            <p>One of my favourite things I like to watch is the bllopers and outtakes that are shown of mistajes made</p>
                        </div>
                    </div>
                    <div class="col-4-xl col-4-lg col-4-md col-6-sm col-12-xs">
                        <div class="about__core-value__content">
                            <div class="about__core-value__content__svg">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    width="42px" height="42px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                                    <g>
                                        <path fill="#998543" d="M15.999,11c-2.729,0-4.971,2.22-4.999,4.949c-0.028,2.757,2.192,5.022,4.949,5.051c0.001,0,0.05,0,0.052,0
                                            c2.729,0,4.971-2.22,4.999-4.949C21.028,13.294,18.808,11.028,15.999,11z M16.001,20v0.5L15.959,20
                                            c-2.205-0.022-3.981-1.835-3.959-4.041C12.022,13.776,13.816,12,16.041,12c2.205,0.022,3.981,1.835,3.959,4.041
                                            C19.978,18.224,18.184,20,16.001,20z"/>
                                        <circle fill="#998543" cx="1" cy="16" r="1"/>
                                        <circle fill="#998543" cx="31" cy="16" r="1"/>
                                        <circle fill="#998543" cx="16" cy="1" r="1"/>
                                        <circle fill="#998543" cx="16" cy="31" r="1"/>
                                        <circle fill="#998543" cx="5" cy="5" r="1"/>
                                        <circle fill="#998543" cx="27" cy="27" r="1"/>
                                        <circle fill="#998543" cx="27" cy="5" r="1"/>
                                        <circle fill="#998543" cx="5" cy="27" r="1"/>
                                        <path fill="#998543" d="M24,16.076V8.5C24,8.224,23.776,8,23.5,8h-7.501C11.633,8,8.045,11.552,8,15.919
                                            c-0.021,2.137,0.79,4.154,2.286,5.681s3.496,2.379,5.633,2.4c0.001,0,0.081,0,0.083,0c0,0,0,0,0,0
                                            C20.367,24,23.955,20.448,24,16.076z M16.001,23v0.5L15.929,23c-1.87-0.019-3.62-0.765-4.929-2.101s-2.019-3.101-2-4.971
                                            C9.039,12.108,12.178,9,16.076,9h0H23v7.071C22.961,19.892,19.821,23.001,16.001,23z"/>
                                    </g>
                                </svg>
                            </div>
                            <h3>responsibility in work</h3>
                            <p>One of my favourite things I like to watch is the bllopers and outtakes that are shown of mistajes made</p>
                        </div>
                    </div>
                    <div class="col-4-xl col-4-lg col-4-md col-6-sm col-12-xs">
                        <div class="about__core-value__content">
                            <div class="about__core-value__content__svg">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    width="31px" height="42px" viewBox="0 0 21 32" enable-background="new 0 0 21 32" xml:space="preserve">
                                <g>
                                    <path fill="#998543" d="M21.021,0.5c0-0.276-0.224-0.5-0.5-0.5H0.479c-0.276,0-0.5,0.224-0.5,0.5S0.202,1,0.479,1h20.043
                                        C20.798,1,21.021,0.776,21.021,0.5z"/>
                                    <path fill="#998543" d="M20,6.112V2.5C20,2.224,19.776,2,19.5,2H1.582c-0.276,0-0.5,0.224-0.5,0.5v3.612
                                        c0,4.976,3.808,8.35,6.014,9.886C4.567,17.74,1,21.055,1,25.888V29.5C1,29.776,1.224,30,1.5,30h18c0.276,0,0.5-0.224,0.5-0.5
                                        v-3.583c0-4.962-3.863-8.365-6.095-9.916C16.434,14.259,20,10.945,20,6.112z M10.5,24.19L15.31,29H5.69L10.5,24.19z M12.732,15.578
                                        C12.587,15.669,12.5,15.829,12.5,16s0.087,0.331,0.232,0.422C14.617,17.617,19,20.935,19,25.917V29h-2.288
                                        c-0.009-0.011-0.013-0.025-0.023-0.035L11,23.276V22.5c0-0.276-0.224-0.5-0.5-0.5S10,22.224,10,22.5v0.776l-5.689,5.689
                                        c-0.01,0.01-0.014,0.024-0.023,0.035H2v-3.112c0-4.777,3.927-7.981,6.268-9.465C8.413,16.331,8.5,16.171,8.5,16
                                        s-0.087-0.331-0.232-0.422C6.408,14.398,2,11.115,2,6.112V3h17v3.112C19,10.89,15.073,14.093,12.732,15.578z"/>
                                    <path fill="#998543" d="M15.541,8.972H5.727c-0.179,0-0.345,0.096-0.434,0.251C5.204,9.379,5.205,9.57,5.295,9.725
                                        c1.187,2.021,2.92,3.258,4.755,4.569l0.159,0.113c0.087,0.062,0.188,0.093,0.291,0.093s0.204-0.031,0.291-0.093
                                        c0.262-0.187,0.526-0.371,0.79-0.555c1.639-1.144,3.334-2.326,4.391-4.127c0.091-0.154,0.092-0.346,0.003-0.501
                                        C15.885,9.068,15.72,8.972,15.541,8.972z M11.008,13.031c-0.169,0.118-0.338,0.236-0.507,0.355
                                        c-1.505-1.075-2.835-2.042-3.846-3.415h7.943C13.657,11.183,12.364,12.085,11.008,13.031z"/>
                                    <path fill="#998543" d="M0.479,32h20.043c0.276,0,0.5-0.224,0.5-0.5s-0.224-0.5-0.5-0.5H0.479c-0.276,0-0.5,0.224-0.5,0.5
                                        S0.202,32,0.479,32z"/>
                                    <path fill="#998543" d="M10.5,19c-0.276,0-0.5,0.224-0.5,0.5v1c0,0.276,0.224,0.5,0.5,0.5s0.5-0.224,0.5-0.5v-1
                                        C11,19.224,10.776,19,10.5,19z"/>
                                    <path fill="#998543" d="M10.5,16c-0.276,0-0.5,0.224-0.5,0.5v1c0,0.276,0.224,0.5,0.5,0.5s0.5-0.224,0.5-0.5v-1
                                        C11,16.224,10.776,16,10.5,16z"/>
                                </g>
                                </svg>
                            </div>
                            <h3>responsibility in work</h3>
                            <p>One of my favourite things I like to watch is the bllopers and outtakes that are shown of mistajes made</p>
                        </div>
                    </div>
                    <div class="col-4-xl col-4-lg col-4-md col-6-sm col-12-xs">
                        <div class="about__core-value__content">

                            <div class="about__core-value__content__svg">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    width="44px" height="42px" viewBox="0 0 34 32" enable-background="new 0 0 34 32" xml:space="preserve">
                                <g>
                                    <path fill="#998543" d="M25.5,1C25.776,1,26,0.776,26,0.5S25.776,0,25.5,0h-17C8.224,0,8,0.224,8,0.5S8.224,1,8.5,1H25.5z"/>
                                    <path fill="#998543" d="M25.5,2h-17h-2C3.217,2,1.687,3.166,0.981,4.144c-0.864,1.2-1.026,2.803-0.456,4.514
                                        c0.882,2.646,3.846,5.825,5.668,7.237C6.285,15.966,6.393,16,6.5,16c0.149,0,0.297-0.066,0.396-0.194
                                        c0.169-0.218,0.129-0.532-0.089-0.702c-1.674-1.296-4.525-4.342-5.332-6.763C1.008,6.944,1.121,5.661,1.793,4.729
                                        C2.608,3.598,4.235,3,6.5,3H8v9.5c0,6.726,6.673,10.601,8.036,11.322C16.015,23.878,16,23.937,16,24v2.5c0,0.276,0.224,0.5,0.5,0.5
                                        s0.5-0.224,0.5-0.5V24c0-0.058-0.015-0.112-0.033-0.164C18.481,23.124,26,19.25,26,12.5V3h1.5c2.265,0,3.892,0.598,4.707,1.729
                                        c0.672,0.932,0.785,2.215,0.318,3.613c-0.63,1.891-3.769,5.553-5.332,6.763c-0.218,0.169-0.258,0.483-0.089,0.702
                                        C27.203,15.934,27.351,16,27.5,16c0.107,0,0.215-0.034,0.307-0.104c1.732-1.342,4.961-5.119,5.668-7.237
                                        c0.57-1.711,0.408-3.314-0.456-4.514C32.313,3.166,30.783,2,27.5,2H25.5z M25,12.5c0,6.093-7.152,9.804-8.486,10.443
                                        C15.286,22.278,9,18.576,9,12.5V3h16V12.5z"/>
                                    <path fill="#998543" d="M11,28c-1.141,0-2,0.86-2,2v1.5C9,31.776,9.224,32,9.5,32h14c0.276,0,0.5-0.224,0.5-0.5v-1.425
                                        C24,28.912,23.121,28,22,28H11z M23,30.075V31H10v-1c0-0.589,0.411-1,1-1h11C22.57,29,23,29.462,23,30.075z"/>
                                </g>
                                </svg>
                            </div>
                            <h3>responsibility in work</h3>
                            <p>One of my favourite things I like to watch is the bllopers and outtakes that are shown of mistajes made</p>
                        </div>
                    </div>
                    <div class="col-4-xl col-4-lg col-4-md col-6-sm col-12-xs">
                        <div class="about__core-value__content">
                            <div class="about__core-value__content__svg">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                width="45px" height="42px" viewBox="0 0 35 32" enable-background="new 0 0 35 32" xml:space="preserve">
                                <g>
                                    <path fill="#998543" d="M0.812,18.896L3,16.707V17.5C3,25.089,9.911,32,17.5,32S32,25.089,32,17.5v-0.772l2.209,2.209
                                        c0.098,0.098,0.226,0.146,0.354,0.146s0.256-0.049,0.354-0.146c0.195-0.195,0.195-0.512,0-0.707l-3.018-3.018
                                        C31.807,15.087,31.667,15,31.5,15c-0.045,0-0.084,0.014-0.126,0.025c-0.092,0.019-0.181,0.054-0.249,0.121l-3.042,3.042
                                        c-0.195,0.195-0.195,0.512,0,0.707s0.512,0.195,0.707,0L31,16.686V17.5c0,6.898-6.135,13.177-13,13.472V12h8.5
                                        c0.276,0,0.5-0.224,0.5-0.5S26.776,11,26.5,11H18V6.949c1.692-0.245,3-1.691,3-3.449C21,1.57,19.43,0,17.5,0S14,1.57,14,3.5
                                        c0,1.758,1.308,3.204,3,3.449V11H8.5C8.224,11,8,11.224,8,11.5S8.224,12,8.5,12H17v18.972C10.135,30.677,4,24.398,4,17.5v-0.793
                                        l2.23,2.23c0.098,0.098,0.226,0.146,0.354,0.146s0.256-0.049,0.354-0.146c0.195-0.195,0.195-0.512,0-0.707l-3.083-3.082
                                        C3.764,15.056,3.638,15,3.5,15s-0.264,0.056-0.354,0.147l-3.041,3.041c-0.195,0.195-0.195,0.512,0,0.707S0.617,19.091,0.812,18.896
                                        z M17.5,1C18.878,1,20,2.121,20,3.5S18.878,6,17.5,6S15,4.879,15,3.5S16.122,1,17.5,1z"/>
                                </g>
                                </svg>
                            </div>
                            <h3>responsibility in work</h3>
                            <p>One of my favourite things I like to watch is the bllopers and outtakes that are shown of mistajes made</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    {{-- footer --}}
    @include('user.layout.footer')


</body>
</html>
