@extends('Profile.Layout.main')
@section('content')
    <main class="admin_main">
        <div class="container">
            <div class="modal-body">
                <div class="title_main">Вход</div>
                <div class="title_descrip">Введите данные учетной записи для продолжения</div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="wpapper_search_input">
                        <div class="name_input">Почта</div>
                        <input id="email" type="email"
                            class="form-control text input_view @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="wpapper_search_input">
                        <div class="name_input ">Пароль</div>
                        <input id="password" type="password"
                            class="form-control text input_view @error('password') is-invalid @enderror" name="password"
                            required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row align-items-center justify-content-between">
                        <div class="col">
                            <div class="modal_btn_wrapper">
                                <button class="btn_modal" type="submit">Авторизация</button>
                                <a class="btn btn-link ms-auto" href="{{ route('password.request') }}">
                                    {{ __('Забыли пароль?') }}

                                </a>
                            </div>
                        </div>
                        <div class="col col-auto">
                            <div class="d-flex align-items-center ">
                                <span class="h4 me-3">Войти через</span>
                                <a href="{{ route('login.vkontakte') }}" class="me-3">
                                    <svg width="36px" height="36px" viewBox="0 0 202 202" id="VK_Logo"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        fill="#000000">

                                        <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                        <g id="SVGRepo_iconCarrier">
                                            <style>
                                                .st0 {
                                                    clip-path: url(#SVGID_2_);
                                                    fill: #5181b8
                                                }

                                                .st1 {
                                                    fill-rule: evenodd;
                                                    clip-rule: evenodd;
                                                    fill: #fff
                                                }
                                            </style>
                                            <g id="Base">
                                                <defs>
                                                    <path id="SVGID_1_"
                                                        d="M71.6 5h58.9C184.3 5 197 17.8 197 71.6v58.9c0 53.8-12.8 66.5-66.6 66.5H71.5C17.7 197 5 184.2 5 130.4V71.5C5 17.8 17.8 5 71.6 5z" />
                                                </defs>
                                                <use xlink:href="#SVGID_1_" overflow="visible" fill-rule="evenodd"
                                                    clip-rule="evenodd" fill="#5181b8" />
                                                <clipPath id="SVGID_2_">
                                                    <use xlink:href="#SVGID_1_" overflow="visible" />
                                                </clipPath>
                                                <path class="st0" d="M0 0h202v202H0z" />
                                            </g>
                                            <path id="Logo" class="st1"
                                                d="M162.2 71.1c.9-3 0-5.1-4.2-5.1h-14c-3.6 0-5.2 1.9-6.1 4 0 0-7.1 17.4-17.2 28.6-3.3 3.3-4.7 4.3-6.5 4.3-.9 0-2.2-1-2.2-4V71.1c0-3.6-1-5.1-4-5.1H86c-2.2 0-3.6 1.7-3.6 3.2 0 3.4 5 4.2 5.6 13.6v20.6c0 4.5-.8 5.3-2.6 5.3-4.7 0-16.3-17.4-23.1-37.4-1.4-3.7-2.7-5.3-6.3-5.3H42c-4 0-4.8 1.9-4.8 4 0 3.7 4.7 22.1 22.1 46.4C70.9 133 87.2 142 102 142c8.9 0 10-2 10-5.4V124c0-4 .8-4.8 3.7-4.8 2.1 0 5.6 1 13.9 9 9.5 9.5 11.1 13.8 16.4 13.8h14c4 0 6-2 4.8-5.9-1.3-3.9-5.8-9.6-11.8-16.4-3.3-3.9-8.2-8-9.6-10.1-2.1-2.7-1.5-3.9 0-6.2 0-.1 17.1-24.1 18.8-32.3z" />
                                        </g>

                                    </svg>
                                </a>
                                <a href="{{ url('/auth/google') }}" class="me-3">
                                    <svg width="36px" height="36px" viewBox="-3 0 262 262"
                                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" fill="#000000">

                                        <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                        <g id="SVGRepo_iconCarrier">

                                            <path
                                                d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"
                                                fill="#4285F4" />

                                            <path
                                                d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"
                                                fill="#34A853" />

                                            <path
                                                d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"
                                                fill="#FBBC05" />

                                            <path
                                                d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"
                                                fill="#EB4335" />

                                        </g>

                                    </svg>
                                </a>
                                <a href="{{ url('/auth/yandex') }}" class="me-3">
                                    <svg width="42px" height="42px" viewBox="0 -155.5 512 512" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        preserveAspectRatio="xMidYMid" fill="#000000">

                                        <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                        <g id="SVGRepo_iconCarrier">
                                            <g>
                                                <path
                                                    d="M83.1452991,0 L56.2637363,0 C29.3821734,0 6.25152625,20.004884 6.25152625,58.7643468 C6.25152625,81.8949939 17.5042735,99.3992674 36.8840049,108.151404 L0.625152625,173.167277 C-0.625152625,175.042735 0.625152625,176.918193 2.5006105,176.918193 L19.3797314,176.918193 C20.6300366,176.918193 21.8803419,176.29304 22.5054945,175.042735 L55.6385836,111.277167 L67.5164835,111.277167 L67.5164835,175.042735 C67.5164835,175.667888 68.1416361,176.918193 69.3919414,176.918193 L84.3956044,176.918193 C85.6459096,176.918193 86.2710623,176.29304 86.2710623,175.042735 L86.2710623,2.5006105 C85.6459096,0.625152625 85.020757,0 83.1452991,0 L83.1452991,0 Z M67.5164835,96.2735043 L57.5140415,96.2735043 C14.3785104,96.2735043 17.5042735,15.003663 55.6385836,15.003663 L68.1416361,15.003663 L68.1416361,96.2735043 L67.5164835,96.2735043 Z"
                                                    fill="#FF0000"> </path>
                                                <path
                                                    d="M173.167277,58.7643468 L158.163614,58.7643468 C156.913309,58.7643468 156.288156,59.3894994 156.288156,60.6398046 L156.288156,105.650794 L128.781441,105.650794 L128.781441,60.6398046 C128.781441,59.3894994 128.156288,58.7643468 126.905983,58.7643468 L112.527473,58.7643468 C111.277167,58.7643468 110.652015,59.3894994 110.652015,60.6398046 L110.652015,175.042735 C110.652015,176.29304 111.277167,176.918193 112.527473,176.918193 L127.531136,176.918193 C128.781441,176.918193 129.406593,176.29304 129.406593,175.042735 L129.406593,120.029304 L156.913309,120.029304 L156.913309,175.042735 C156.913309,176.29304 157.538462,176.918193 158.788767,176.918193 L173.79243,176.918193 C175.042735,176.918193 175.667888,176.29304 175.667888,175.042735 L175.667888,60.6398046 C175.042735,59.3894994 174.417582,58.7643468 173.167277,58.7643468 L173.167277,58.7643468 Z M510.749695,161.289377 C510.749695,160.664225 510.124542,160.664225 509.499389,160.664225 C503.247863,160.664225 465.113553,178.793651 465.113553,118.778999 C465.113553,92.5225885 475.115995,55.6385836 498.871795,77.5189255 C499.496947,78.1440781 500.1221,78.1440781 500.747253,78.1440781 C501.372405,78.1440781 501.997558,77.5189255 502.622711,76.2686203 L508.874237,65.6410256 C509.499389,65.015873 509.499389,64.3907204 509.499389,63.7655678 C509.499389,62.5152625 508.249084,61.8901099 506.998779,61.2649573 C465.738706,40.6349206 444.483516,78.7692308 444.483516,123.155067 C444.483516,180.669109 486.368742,188.796093 510.124542,171.291819 C511.374847,170.666667 511.374847,169.416361 511.374847,168.791209 L510.749695,161.289377 L510.749695,161.289377 Z M408.224664,111.90232 L436.981685,60.014652 C437.606838,59.3894994 436.981685,58.1391941 436.356532,58.1391941 L421.978022,58.1391941 C417.601954,58.1391941 416.351648,59.3894994 415.101343,62.5152625 C413.851038,65.6410256 392.595849,110.026862 390.095238,111.90232 L390.095238,60.014652 C390.095238,59.3894994 389.470085,58.1391941 388.844933,58.1391941 L373.216117,58.1391941 C372.590965,58.1391941 371.965812,58.7643468 371.965812,60.014652 L371.965812,175.042735 C371.965812,175.667888 372.590965,176.918193 373.216117,176.918193 L388.844933,176.918193 C390.095238,176.918193 390.095238,176.29304 390.095238,175.042735 L390.095238,115.653236 C391.970696,116.903541 418.227106,171.291819 418.852259,173.167277 C420.102564,175.667888 422.603175,176.918193 425.728938,176.918193 L441.357753,176.918193 C442.608059,176.918193 442.608059,176.29304 441.982906,175.042735 L408.224664,111.90232 L408.224664,111.90232 Z M271.316239,161.91453 L268.190476,161.91453 C264.43956,161.91453 263.814408,160.664225 263.814408,157.538462 L263.814408,60.014652 C263.814408,58.7643468 263.189255,58.1391941 262.564103,58.1391941 L214.42735,58.1391941 C213.177045,58.1391941 212.551893,58.7643468 212.551893,60.014652 C212.551893,86.2710623 213.177045,130.031746 195.672772,161.91453 L190.671551,161.91453 C189.421245,161.91453 188.796093,162.539683 188.796093,163.789988 L188.796093,198.173382 C188.796093,199.423687 190.046398,200.04884 190.671551,200.04884 L201.924298,200.04884 C204.424908,200.04884 205.675214,198.173382 205.675214,196.297924 L205.675214,176.918193 L256.312576,176.918193 L256.312576,198.173382 C256.312576,198.798535 256.937729,200.04884 258.188034,200.04884 L270.691087,200.04884 C271.941392,200.04884 273.81685,198.798535 273.81685,196.297924 L273.81685,163.789988 C273.191697,162.539683 272.566545,161.91453 271.316239,161.91453 L271.316239,161.91453 Z M245.059829,161.91453 L210.051282,161.91453 C220.053724,145.660562 229.431013,119.404151 229.431013,73.1428571 L245.059829,73.1428571 L245.059829,161.91453 L245.059829,161.91453 Z M320.078144,55.6385836 C294.446886,55.6385836 282.568987,87.5213675 282.568987,122.529915 C282.568987,180.043956 322.578755,188.796093 350.08547,171.916972 C351.335775,171.291819 351.335775,170.666667 351.335775,170.041514 L349.460317,161.91453 C349.460317,161.289377 348.835165,160.664225 347.58486,160.664225 C337.582418,160.664225 302.573871,178.168498 302.573871,121.279609 C315.076923,122.529915 315.076923,122.529915 352.586081,122.529915 C351.960928,93.7728938 348.835165,55.6385836 320.078144,55.6385836 L320.078144,55.6385836 Z M303.199023,108.151404 C303.199023,62.5152625 333.206349,53.7631258 333.206349,106.901099 C320.078144,106.901099 314.45177,106.901099 303.199023,108.151404 L303.199023,108.151404 Z"
                                                    fill="#000000"> </path>
                                            </g>
                                        </g>

                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>



                </form>
            </div>
        </div>
    </main>
@endsection
