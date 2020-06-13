<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Survey Scape</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
        <style>
            html, body {
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
            }


            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #24474D;
                padding: 0 25px;
                font-size: 17px;
                font-weight: 700;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #surveyanim{
                position: absolute;
                height: 30%;
                width: 30%;
                top: 11rem;
                left: -2rem;
            }


            #logo {
                position: absolute;
                top: 42%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            #logo path:nth-child(1){
                stroke-dasharray: 250;
                stroke-dashoffset: 250;
                animation: anim 2s ease forwards;
            }
            #logo path:nth-child(2){
                stroke-dasharray: 118px;
                stroke-dashoffset: 118;
                animation: anim 2s ease forwards;
            }
            #logo path:nth-child(3){
                stroke-dasharray: 88px;
                stroke-dashoffset: 88;
                animation: anim 2s ease forwards;
            }
            #logo path:nth-child(4){
                stroke-dasharray: 155px;
                stroke-dashoffset: 155px;
                animation: anim 2s ease forwards;
            }
            #logo path:nth-child(5){
                stroke-dasharray: 209px;
                stroke-dashoffset: 209;
                animation: anim 2s ease forwards;
            }
            #logo path:nth-child(6){
                stroke-dasharray: 130px;
                stroke-dashoffset: 130;
                animation: anim 2s ease forwards;
            }
            #logo path:nth-child(7){
                stroke-dasharray: 244px;
                stroke-dashoffset: 244;
                animation: anim 2s ease forwards;
            }
            #logo path:nth-child(8){
                stroke-dasharray: 155px;
                stroke-dashoffset: 155;
                animation: anim 2s ease forwards;
            }
            #logo path:nth-child(9){
                stroke-dasharray: 118px;
                stroke-dashoffset: 118;
                animation: anim 2s ease forwards;
            }
            #logo path:nth-child(10){
                stroke-dasharray: 148px;
                stroke-dashoffset: 148;
                animation: anim 2s ease forwards;
            }
            #logo path:nth-child(11){
                stroke-dasharray: 209px;
                stroke-dashoffset: 209;
                animation: anim 2s ease forwards;
            }

            @keyframes anim {
                to {
                    stroke-dashoffset: 0;
                }
            }

            #camembert {
                animation: cam 1s ease-in-out infinite alternate;
            }

            @keyframes cam{
                from{
                    transform: rotateX(0deg);
                }
                to{
                    transform: rotateX(20deg)
                }


            }
            #photo {
                animation: sur 1s ease-in-out infinite alternate;
            }

            @keyframes sur{
                from{
                    transform: rotateX(0deg);
                }
                to{
                    transform: rotateX(20deg)
                }


            }
            #mail {
                animation: mai 1s ease-in-out infinite alternate;
            }

            @keyframes mai{
                from{
                    transform: rotateX(0deg);
                }
                to{
                    transform: rotateX(20deg)
                }


            }
            /*
            */


        </style>
    </head>
    <body>

    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Accèder à mon espace</a>
            @else
                <a href="{{ route('listeFormulaire') }}">Formulaires publics</a>
                <a href="{{ route('login') }}">Connexion</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Inscription</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content" id="main_welcome">

        <div id="Think_slogan">
            <p>"Think, Explore, Survey."</p>
        </div>

        <div class="" id="main_logo">
        </div>

        <div class="title m-b-md">
            <svg
                id="logo"
                width="735"
                height="107"
                viewBox="0 0 474 69"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">

                <path d="M20.5273 53.1719C18.0664 53.1719 15.7344 52.9375 13.5312 52.4688C11.3281 52 9.26562 51.2969 7.34375 50.3594C5.44531 49.4219 3.66406 48.25 2 46.8438L6.46484 41.3594C8.41016 43.0469 10.5547 44.3125 12.8984 45.1562C15.2422 46 17.7852 46.4219 20.5273 46.4219C24.2305 46.4219 27.1016 45.7422 29.1406 44.3828C31.1797 43 32.1992 41.0547 32.1992 38.5469V38.5117C32.1992 36.7305 31.7305 35.3242 30.793 34.293C29.8789 33.2383 28.6836 32.4648 27.207 31.9727C25.7539 31.457 23.8672 30.9883 21.5469 30.5664C21.4766 30.543 21.3945 30.5312 21.3008 30.5312C21.2305 30.5312 21.1602 30.5195 21.0898 30.4961L20.5625 30.3906C17.1406 29.8047 14.3516 29.1484 12.1953 28.4219C10.0625 27.6719 8.23438 26.3242 6.71094 24.3789C5.1875 22.4102 4.42578 19.6211 4.42578 16.0117V15.9766C4.42578 12.8125 5.12891 10.1172 6.53516 7.89062C7.96484 5.64062 10.0391 3.92969 12.7578 2.75781C15.4766 1.58594 18.7461 1 22.5664 1C24.3945 1 26.1875 1.19922 27.9453 1.59766C29.7266 1.99609 31.4727 2.59375 33.1836 3.39062C34.918 4.16406 36.6172 5.14844 38.2812 6.34375L34.2031 12.0391C32.2578 10.6094 30.3125 9.54297 28.3672 8.83984C26.4453 8.11328 24.5117 7.75 22.5664 7.75C19.0742 7.75 16.3555 8.45312 14.4102 9.85938C12.4883 11.2422 11.5273 13.2109 11.5273 15.7656V15.8008C11.5273 17.5586 12.0195 18.9414 13.0039 19.9492C14.0117 20.957 15.2539 21.707 16.7305 22.1992C18.2305 22.668 20.3047 23.1602 22.9531 23.6758C23.0469 23.6992 23.1289 23.7227 23.1992 23.7461C23.293 23.7461 23.3867 23.7578 23.4805 23.7812C23.5977 23.8047 23.7266 23.8281 23.8672 23.8516C24.0078 23.875 24.1367 23.8984 24.2539 23.9219C27.3477 24.5547 29.9258 25.3047 31.9883 26.1719C34.0742 27.0391 35.8086 28.4453 37.1914 30.3906C38.5977 32.3125 39.3008 34.9492 39.3008 38.3008V38.3711C39.3008 41.4883 38.5625 44.1602 37.0859 46.3867C35.6094 48.5898 33.4648 50.2773 30.6523 51.4492C27.8633 52.5977 24.4883 53.1719 20.5273 53.1719Z" stroke="#7C9397" stroke-width="2" mask="url(#path-1-outside-1)"/>
                <path d="M74.4359 16.1523H81.5727V52.6445H74.4359V16.1523ZM59.6 38.3359C59.6 40.8906 60.2445 42.8711 61.5336 44.2773C62.8461 45.6602 64.6859 46.3516 67.0531 46.3516C69.3969 46.3516 71.2133 45.7305 72.5023 44.4883C73.7914 43.2461 74.4359 41.4766 74.4359 39.1797V48.1445C73.6859 49.9492 72.9594 50.125 71.2719 51.3438C69.5844 52.5625 67.5102 53.1719 65.0492 53.1719C61.018 53.1719 57.9008 51.8828 55.6977 49.3047C53.518 46.7031 52.4281 43.0469 52.4281 38.3359V16.1523H59.6V38.3359Z" stroke="#7C9397" stroke-width="2" mask="url(#path-1-outside-1)"/>
                <path d="M96.1062 16.1523H103.278V52.6445H96.1062V16.1523ZM116.18 24.8008C115.548 24.0273 114.751 23.4414 113.79 23.043C112.829 22.6445 111.716 22.4453 110.45 22.4453C108.177 22.4453 106.407 23.0781 105.141 24.3438C103.899 25.5859 103.278 27.3203 103.278 29.5469V21.1445C104.403 18.9648 105.118 18.6484 106.899 17.4531C108.68 16.2344 110.649 15.625 112.805 15.625C114.47 15.625 115.97 15.8711 117.305 16.3633C118.665 16.832 119.848 17.5352 120.856 18.4727L116.18 24.8008Z" stroke="#7C9397" stroke-width="2" mask="url(#path-1-outside-1)"/>
                <path d="M151.913 16.1523H159.402L145.691 52.6445H140.277L126.566 16.1523H134.054L142.984 42.2031L151.913 16.1523Z" stroke="#7C9397" stroke-width="2" mask="url(#path-1-outside-1)"/>
                <path d="M184.271 53.1719C180.896 53.1719 178.013 52.5391 175.623 51.2734C173.232 50.0078 171.404 48.1562 170.138 45.7188C168.896 43.2578 168.275 40.293 168.275 36.8242V32.7109C168.275 29.1016 168.873 26.0195 170.068 23.4648C171.287 20.9102 173.045 18.9648 175.341 17.6289C177.638 16.293 180.404 15.625 183.638 15.625C186.685 15.625 189.287 16.3867 191.443 17.9102C193.599 19.4336 195.24 21.6367 196.365 24.5195C197.513 27.4023 198.087 30.8594 198.087 34.8906V37.2812H175.114L175.111 31.5156H191.267C191.056 28.5391 190.283 26.2305 188.947 24.5898C187.634 22.9258 185.865 22.0938 183.638 22.0938C180.92 22.0938 178.81 22.9844 177.31 24.7656C175.834 26.5469 175.111 29.0877 175.111 32.3455L175.111 36.962C175.111 39.9855 175.892 42.3086 177.486 43.9258C179.08 45.543 181.341 46.3516 184.271 46.3516C185.724 46.3516 187.166 46.0586 188.595 45.4727C190.025 44.8867 191.302 44.0664 192.427 43.0117L197.138 47.7227C195.334 49.457 193.306 50.8047 191.056 51.7656C188.806 52.7031 186.545 53.1719 184.271 53.1719Z" stroke="#7C9397" stroke-width="2" mask="url(#path-1-outside-1)"/>
                <path d="M238.566 16.1523L223.027 61.1875C222.465 62.8516 221.727 64.1641 220.812 65.125C219.898 66.1094 218.773 66.8125 217.438 67.2344C216.102 67.6562 214.461 67.8672 212.516 67.8672H211.074V60.9766H212.516C213.852 60.9766 214.906 60.707 215.68 60.168C216.477 59.6289 217.168 58.7031 217.754 57.3906L231.254 16.1523H238.566ZM206.258 16.1523H213.57L222.792 42L219.682 51.5L206.258 16.1523Z" stroke="#7C9397" stroke-width="2" mask="url(#path-1-outside-1)"/>
                <path d="M287.532 53.1719C285.071 53.1719 282.739 52.9375 280.536 52.4688C278.333 52 276.27 51.2969 274.348 50.3594C272.45 49.4219 270.669 48.25 269.005 46.8438L273.47 41.3594C275.415 43.0469 277.559 44.3125 279.903 45.1562C282.247 46 284.79 46.4219 287.532 46.4219C291.235 46.4219 294.106 45.7422 296.145 44.3828C298.184 43 299.204 41.0547 299.204 38.5469V38.5117C299.204 36.7305 298.735 35.3242 297.798 34.293C296.884 33.2383 295.688 32.4648 294.212 31.9727C292.759 31.457 290.872 30.9883 288.552 30.5664C288.481 30.543 288.399 30.5312 288.305 30.5312C288.235 30.5312 288.165 30.5195 288.095 30.4961L287.567 30.3906C284.145 29.8047 281.356 29.1484 279.2 28.4219C277.067 27.6719 275.239 26.3242 273.716 24.3789C272.192 22.4102 271.43 19.6211 271.43 16.0117V15.9766C271.43 12.8125 272.134 10.1172 273.54 7.89062C274.97 5.64062 277.044 3.92969 279.763 2.75781C282.481 1.58594 285.751 1 289.571 1C291.399 1 293.192 1.19922 294.95 1.59766C296.731 1.99609 298.477 2.59375 300.188 3.39062C301.923 4.16406 303.622 5.14844 305.286 6.34375L301.208 12.0391C299.263 10.6094 297.317 9.54297 295.372 8.83984C293.45 8.11328 291.516 7.75 289.571 7.75C286.079 7.75 283.36 8.45312 281.415 9.85938C279.493 11.2422 278.532 13.2109 278.532 15.7656V15.8008C278.532 17.5586 279.024 18.9414 280.009 19.9492C281.016 20.957 282.259 21.707 283.735 22.1992C285.235 22.668 287.309 23.1602 289.958 23.6758C290.052 23.6992 290.134 23.7227 290.204 23.7461C290.298 23.7461 290.391 23.7578 290.485 23.7812C290.602 23.8047 290.731 23.8281 290.872 23.8516C291.013 23.875 291.141 23.8984 291.259 23.9219C294.352 24.5547 296.93 25.3047 298.993 26.1719C301.079 27.0391 302.813 28.4453 304.196 30.3906C305.602 32.3125 306.305 34.9492 306.305 38.3008V38.3711C306.305 41.4883 305.567 44.1602 304.091 46.3867C302.614 48.5898 300.47 50.2773 297.657 51.4492C294.868 52.5977 291.493 53.1719 287.532 53.1719Z" stroke="#7C9397" stroke-width="2" mask="url(#path-1-outside-1)"/>
                <path d="M334.163 53.1719C330.835 53.1719 327.987 52.5508 325.62 51.3086C323.277 50.0664 321.484 48.2617 320.241 45.8945C318.999 43.5273 318.378 40.668 318.378 37.3164V31.3047C318.378 28 318.999 25.1758 320.241 22.832C321.484 20.4883 323.277 18.707 325.62 17.4883C327.987 16.2461 330.835 15.625 334.163 15.625C336.062 15.625 337.843 15.8594 339.507 16.3281C341.195 16.7734 342.706 17.4297 344.042 18.2969C345.378 19.1641 346.491 20.2188 347.382 21.4609L342.214 26.1016C341.183 24.9297 339.976 24.0273 338.593 23.3945C337.21 22.7617 335.769 22.4453 334.269 22.4453C331.503 22.4453 329.359 23.2188 327.835 24.7656C326.312 26.3125 325.55 28.4922 325.55 31.3047V37.3164C325.55 40.1992 326.3 42.4258 327.8 43.9961C329.323 45.5664 331.48 46.3516 334.269 46.3516C335.792 46.3516 337.245 46.0117 338.628 45.332C340.011 44.6523 341.206 43.6914 342.214 42.4492L347.382 47.4414C346.468 48.6602 345.343 49.7031 344.007 50.5703C342.671 51.4141 341.159 52.0586 339.472 52.5039C337.808 52.9492 336.038 53.1719 334.163 53.1719Z" stroke="#7C9397" stroke-width="2" mask="url(#path-1-outside-1)"/>
                <path d="M379.494 29.5117C379.494 27.1211 378.849 25.2695 377.56 23.957C376.295 22.6211 374.49 21.9531 372.146 21.9531C370.693 21.9531 369.263 22.1758 367.857 22.6211C366.474 23.0664 365.244 23.6875 364.166 24.4844L358.927 20.8984C360.31 19.2344 362.127 17.9453 364.377 17.0312C366.65 16.0938 369.17 15.625 371.935 15.625C374.959 15.625 377.548 16.1641 379.705 17.2422C381.861 18.2969 383.502 19.8438 384.627 21.8828C385.752 23.8984 386.314 26.3359 386.314 29.1953V52.6445H379.494V29.5117ZM370.564 53.1719C366.064 53.1719 362.701 52.2461 360.474 50.3945C358.248 48.5195 357.134 45.6836 357.134 41.8867C357.134 38.2773 358.154 35.5703 360.193 33.7656C362.232 31.9609 365.314 31.0586 369.439 31.0586H379.494V36.8242H369.474C367.599 36.8242 366.193 37.2461 365.255 38.0898C364.341 38.9102 363.884 40.1758 363.884 41.8867C363.884 43.7383 364.494 45.1094 365.712 46C366.955 46.8906 368.83 47.3359 371.337 47.3359C374.08 47.3359 376.119 47.043 377.455 46.457C378.814 45.8711 379.494 44.957 379.494 43.7148L379.5 49.5C378.867 50.4844 378.814 50.6406 377.877 51.2734C376.962 51.9062 375.896 52.375 374.677 52.6797C373.459 53.0078 372.087 53.1719 370.564 53.1719Z" stroke="#7C9397" stroke-width="2" mask="url(#path-1-outside-1)"/>
                <path d="M400.812 16.1523H407.984V67.4805H400.812V16.1523ZM417.16 53.1719C414.887 53.1719 412.906 52.6328 411.219 51.5547C409.531 50.4531 408.797 49.4922 408 47.5L407.984 39.2852C407.984 40.8555 408.266 42.1914 408.828 43.293C409.391 44.3945 410.199 45.2383 411.254 45.8242C412.332 46.4102 413.633 46.7031 415.156 46.7031C417.523 46.7031 419.352 45.9883 420.641 44.5586C421.953 43.1055 422.609 41.0664 422.609 38.4414V30.5312C422.609 27.8594 421.953 25.7852 420.641 24.3086C419.352 22.832 417.523 22.0938 415.156 22.0938C413.633 22.0938 412.332 22.375 411.254 22.9375C410.199 23.5 409.391 24.332 408.828 25.4336C408.266 26.5117 407.984 27.8125 407.984 29.3359V21.5C409.086 19.3672 409.789 18.5312 411.57 17.3828C413.352 16.2109 415.332 15.625 417.512 15.625C420.09 15.625 422.293 16.2109 424.121 17.3828C425.973 18.5312 427.379 20.2188 428.34 22.4453C429.301 24.6719 429.781 27.3555 429.781 30.4961V38.4414C429.781 41.5352 429.289 44.1836 428.305 46.3867C427.32 48.5898 425.879 50.2773 423.98 51.4492C422.082 52.5977 419.809 53.1719 417.16 53.1719Z" stroke="#7C9397" stroke-width="2" mask="url(#path-1-outside-1)"/>
                <path d="M458.518 53.1719C455.143 53.1719 452.26 52.5391 449.87 51.2734C447.479 50.0078 445.651 48.1562 444.385 45.7188C443.143 43.2578 442.522 40.293 442.522 36.8242V32.7109C442.522 29.1016 443.12 26.0195 444.315 23.4648C445.534 20.9102 447.291 18.9648 449.588 17.6289C451.885 16.293 454.651 15.625 457.885 15.625C460.932 15.625 463.534 16.3867 465.69 17.9102C467.846 19.4336 469.487 21.6367 470.612 24.5195C471.76 27.4023 472.334 30.8594 472.334 34.8906V37.2812H449.345L449.358 31.5156H465.514C465.303 28.5391 464.53 26.2305 463.194 24.5898C461.881 22.9258 460.112 22.0938 457.885 22.0938C455.166 22.0938 453.057 22.9844 451.557 24.7656C450.08 26.5469 449.342 29.0664 449.342 32.3242V36.9648C449.342 39.9883 450.139 42.3086 451.733 43.9258C453.327 45.543 455.588 46.3516 458.518 46.3516C459.971 46.3516 461.413 46.0586 462.842 45.4727C464.272 44.8867 465.549 44.0664 466.674 43.0117L471.385 47.7227C469.58 49.457 467.553 50.8047 465.303 51.7656C463.053 52.7031 460.791 53.1719 458.518 53.1719Z" stroke="#7C9397" stroke-width="2" mask="url(#path-1-outside-1)"/>
            </svg>
            <svg
                id="surveyanim"
                width="396"
                height="360"
                viewBox="0 0 396 360"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g id="undraw_customer_survey_f9ur 1" clip-path="url(#clip0)">
                <g id="survey">
                <g id="Group" opacity="0.5">
                <path id="Vector" opacity="0.5" d="M288.99 24.9057H110.836V270.792H288.99V24.9057Z" fill="url(#paint0_linear)"/>
                </g>
                <path id="Vector_2" d="M286.723 26.717H113.103V267.17H286.723V26.717Z" fill="white"/>
                <path id="Vector_3" d="M243.205 20.3683H157.075V41.2076H243.205V20.3683Z" fill="url(#paint1_linear)"/>
                <path id="Vector_4" d="M200.14 0C193.489 0 188.1 5.51547 188.1 12.317C188.1 19.1185 193.489 24.634 200.14 24.634C206.79 24.634 212.18 19.1185 212.18 12.317C212.18 5.51547 206.79 0 200.14 0ZM200.14 19.4219C198.726 19.4588 197.333 19.0737 196.139 18.3158C194.945 17.5579 194.004 16.4616 193.438 15.167C192.871 13.8725 192.703 12.4384 192.956 11.0482C193.209 9.65798 193.871 8.37472 194.858 7.36243C195.845 6.35013 197.112 5.65478 198.496 5.36525C199.881 5.07572 201.32 5.20516 202.631 5.73702C203.942 6.26889 205.063 7.17902 205.854 8.3511C206.644 9.52317 207.066 10.904 207.066 12.317C207.088 14.1759 206.371 15.9676 205.073 17.2994C203.774 18.6312 202 19.3944 200.14 19.4219V19.4219Z" fill="url(#paint2_linear)"/>
                <path id="Vector_5" d="M242.298 20.3774H157.981V40.3019H242.298V20.3774Z" fill="#4C6B71"/>
                <path id="Vector_6" d="M200.14 0.905663C197.809 0.905663 195.53 1.59617 193.592 2.88987C191.653 4.18357 190.143 6.02235 189.251 8.17369C188.359 10.325 188.125 12.6923 188.58 14.9762C189.035 17.26 190.157 19.3579 191.805 21.0044C193.454 22.651 195.554 23.7723 197.84 24.2266C200.127 24.6809 202.496 24.4477 204.65 23.5566C206.804 22.6655 208.644 21.1565 209.94 19.2203C211.235 17.2841 211.926 15.0078 211.926 12.6792C211.926 9.5567 210.684 6.56204 208.474 4.35407C206.263 2.14609 203.266 0.905663 200.14 0.905663V0.905663ZM200.14 19.4717C198.795 19.4717 197.48 19.0733 196.362 18.327C195.244 17.5806 194.372 16.5198 193.857 15.2786C193.343 14.0374 193.208 12.6717 193.471 11.3541C193.733 10.0365 194.381 8.8262 195.331 7.87626C196.282 6.92631 197.494 6.2794 198.813 6.01731C200.132 5.75522 201.499 5.88973 202.742 6.40384C203.984 6.91794 205.046 7.78855 205.793 8.90556C206.541 10.0226 206.939 11.3358 206.939 12.6792C206.939 14.4807 206.223 16.2084 204.948 17.4822C203.673 18.7561 201.943 19.4717 200.14 19.4717Z" fill="#4C6B71"/>
                <path id="Vector_7" d="M158.434 65.6604H121.262V102.792H158.434V65.6604Z" fill="url(#paint3_linear)"/>
                <path id="Vector_8" d="M158.561 139.245H121.389V176.377H158.561V139.245Z" fill="url(#paint4_linear)"/>
                <path id="Vector_9" d="M158.688 211.925H121.516V249.057H158.688V211.925Z" fill="url(#paint5_linear)"/>
                <path id="Vector_10" d="M157.075 67.0189H122.622V101.434H157.075V67.0189Z" fill="#006837"/>
                <path id="Vector_11" d="M157.075 139.925H122.622V174.34H157.075V139.925Z" fill="#4C6B71"/>
                <path id="Vector_12" d="M157.075 212.83H122.622V247.245H157.075V212.83Z" fill="#4C6B71"/>
                <path id="Vector_13" d="M226.962 77.6423H179.74V80.9343H226.962V77.6423Z" fill="#E0E0E0"/>
                <path id="Vector_14" d="M257.711 82.5826H179.74V85.8747H257.711V82.5826Z" fill="#E0E0E0"/>
                <path id="Vector_15" d="M252.221 87.5185H179.74V90.8106H252.221V87.5185Z" fill="#E0E0E0"/>
                <path id="Vector_16" d="M226.962 150.548H179.74V153.84H226.962V150.548Z" fill="#E0E0E0"/>
                <path id="Vector_17" d="M257.711 155.488H179.74V158.78H257.711V155.488Z" fill="#E0E0E0"/>
                <path id="Vector_18" d="M252.221 160.424H179.74V163.716H252.221V160.424Z" fill="#E0E0E0"/>
                <path id="Vector_19" d="M226.962 223.454H179.74V226.746H226.962V223.454Z" fill="#E0E0E0"/>
                <path id="Vector_20" d="M257.711 228.394H179.74V231.686H257.711V228.394Z" fill="#E0E0E0"/>
                <path id="Vector_21" d="M252.221 233.33H179.74V236.622H252.221V233.33Z" fill="#E0E0E0"/>
                <path id="Vector_22" d="M132.029 82.1751L138.284 87.9079L147.147 74.8891L150.275 77.4928L138.284 93.1155L129.422 83.2211L132.029 82.1751Z" fill="url(#paint6_linear)"/>
                <path id="Vector_23" d="M133.049 82.4151L138.488 87.3962L146.195 76.0755L148.915 78.3396L138.488 91.9245L130.782 83.3208L133.049 82.4151Z" fill="white"/>
                <path id="Vector_24" d="M133.049 155.774L138.488 160.755L146.195 149.434L148.915 151.698L138.488 165.283L130.782 156.679L133.049 155.774Z" fill="white"/>
                <path id="Vector_25" d="M133.049 229.132L138.488 234.113L146.195 222.792L148.915 225.057L138.488 238.641L130.782 230.038L133.049 229.132Z" fill="white"/>
                <g id="Group_2" opacity="0.5">
                <path id="Vector_26" opacity="0.5" d="M295.11 158.943H297.83" stroke="#69F0AE" stroke-width="5" stroke-miterlimit="10"/>
                <path id="Vector_27" opacity="0.5" d="M303.061 158.943H363.212" stroke="#69F0AE" stroke-width="5" stroke-miterlimit="10" stroke-dasharray="11.54 11.54"/>
                <path id="Vector_28" opacity="0.5" d="M365.827 158.943H368.547V156.226" stroke="#69F0AE" stroke-width="5" stroke-miterlimit="10"/>
                <path id="Vector_29" opacity="0.5" d="M368.547 151.042V101.765" stroke="#69F0AE" stroke-width="5" stroke-miterlimit="10" stroke-dasharray="11.45 11.45"/>
                <path id="Vector_30" opacity="0.5" d="M368.547 99.1698V96.4529" stroke="#69F0AE" stroke-width="5" stroke-miterlimit="10"/>
                </g>
                <path id="Vector_31" opacity="0.5" d="M104.943 82.6415H44.1985V139.698" stroke="#69F0AE" stroke-width="5" stroke-miterlimit="10" stroke-dasharray="12 12"/>
                <path id="Vector_32" opacity="0.5" d="M139.848 276.906V309.509H230.512" stroke="#69F0AE" stroke-width="5" stroke-miterlimit="10" stroke-dasharray="12 12"/>
                </g>
                <g id="camembert">
                <path id="Vector_33" d="M89.7569 149.434H2.71991V211.019H89.7569V149.434Z" fill="white"/>
                <path id="Vector_34" d="M48.029 164.984C47.3013 164.986 46.5745 165.034 45.8531 165.129L48.029 181.739L31.2971 180.625C31.2744 180.992 31.2563 181.363 31.2563 181.739C31.2563 185.053 32.24 188.292 34.083 191.047C35.926 193.803 38.5455 195.95 41.6103 197.218C44.6752 198.486 48.0476 198.818 51.3012 198.172C54.5548 197.525 57.5434 195.929 59.8891 193.586C62.2348 191.243 63.8323 188.258 64.4795 185.008C65.1266 181.757 64.7945 178.389 63.525 175.327C62.2555 172.266 60.1057 169.649 57.3474 167.808C54.5892 165.967 51.3463 164.984 48.029 164.984V164.984Z" fill="#E0E0E0"/>
                <path id="Vector_35" d="M42.2265 161.959C38.3809 162.463 34.8287 164.282 32.1747 167.107C29.5208 169.933 27.929 173.589 27.6705 177.455L44.4025 178.569L42.2265 161.959Z" fill="#4C6B71"/>
                </g>
                <g id="photo">
                <path id="Vector_36" d="M318.682 277.585H243.431V353.208H318.682V277.585Z" fill="#F5F5F5"/>
                <path id="Vector_37" d="M314.602 279.849H248.418V337.811H314.602V279.849Z" fill="white"/>
                <path id="Vector_38" d="M314.602 319.245C296.311 319.245 281.51 314.586 281.51 308.83C263.219 308.83 248.418 312.883 248.418 317.887V339.623H314.602V319.245Z" fill="#E0E0E0"/>
                <path id="Vector_39" d="M303.723 299.321C307.478 299.321 310.522 296.28 310.522 292.528C310.522 288.777 307.478 285.736 303.723 285.736C299.967 285.736 296.923 288.777 296.923 292.528C296.923 296.28 299.967 299.321 303.723 299.321Z" fill="#4C6B71"/>
                </g>
                <g id="mail">
                <path id="Vector_40" d="M399.373 85.8113H332.735V48.6792L365.827 20.3774L399.373 48.6792V85.8113Z" fill="white"/>
                <path id="Vector_41" d="M332.282 48.6792L365.374 67.2453L398.919 48.6792" fill="#E0E0E0"/>
                <path id="Vector_42" d="M366.054 67.0189L346.561 79.6981V32.1509H385.093V56.3321L366.054 67.0189Z" fill="#FAFAFA"/>
                <path id="Vector_43" d="M332.508 86.0377H399.146L332.508 48.9057V86.0377Z" fill="#F5F5F5"/>
                <path id="Vector_44" d="M379.653 39.3962H351.548V41.2075H379.653V39.3962Z" fill="white"/>
                <path id="Vector_45" d="M379.653 43.0189H351.548V44.8302H379.653V43.0189Z" fill="white"/>
                <path id="Vector_46" d="M379.653 46.6415H351.548V48.4528H379.653V46.6415Z" fill="#4C6B71"/>
                </g>
                </g>
                <defs>
                <linearGradient id="paint0_linear" x1="199.913" y1="270.792" x2="199.913" y2="24.9057" gradientUnits="userSpaceOnUse">
                <stop stop-color="#808080" stop-opacity="0.25"/>
                <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                </linearGradient>
                <linearGradient id="paint1_linear" x1="38183.6" y1="1916.74" x2="38183.6" y2="957.718" gradientUnits="userSpaceOnUse">
                <stop stop-color="#808080" stop-opacity="0.25"/>
                <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                </linearGradient>
                <linearGradient id="paint2_linear" x1="14749.9" y1="2633.12" x2="14749.9" y2="1293.28" gradientUnits="userSpaceOnUse">
                <stop stop-color="#808080" stop-opacity="0.25"/>
                <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                </linearGradient>
                <linearGradient id="paint3_linear" x1="11588.8" y1="8494.64" x2="11588.8" y2="5449.81" gradientUnits="userSpaceOnUse">
                <stop stop-color="#808080" stop-opacity="0.25"/>
                <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                </linearGradient>
                <linearGradient id="paint4_linear" x1="11599.4" y1="14602.2" x2="11599.4" y2="11557.4" gradientUnits="userSpaceOnUse">
                <stop stop-color="#808080" stop-opacity="0.25"/>
                <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                </linearGradient>
                <linearGradient id="paint5_linear" x1="11609.9" y1="20634.6" x2="11609.9" y2="17589.7" gradientUnits="userSpaceOnUse">
                <stop stop-color="#808080" stop-opacity="0.25"/>
                <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                </linearGradient>
                <linearGradient id="paint6_linear" x1="6562.45" y1="3822.79" x2="6562.45" y2="3088.99" gradientUnits="userSpaceOnUse">
                <stop stop-color="#808080" stop-opacity="0.25"/>
                <stop offset="0.54" stop-color="#808080" stop-opacity="0.12"/>
                <stop offset="1" stop-color="#808080" stop-opacity="0.1"/>
                </linearGradient>
                <clipPath id="clip0">
                <rect width="396" height="360" fill="white"/>
                </clipPath>
                </defs>
            </svg>
        </div>

        <div id="arrow_div">
        <img id="arrow" src="Images/welcome/arrow.png">
        </div>

    </div>

    <div id="presentation">
        <p class="texte-welcome">Créez votre questionnaire en ligne</p>
        <br> <br>
        <p class="texte-welcome">Besoin de l'avis de différentes personnes ?</p>
        <p class="texte-welcome">Obtenez rapidement et en quelques clics les réponses qu'ils vous faut.</p>
        <br><br>

        <div class="row" id="ronds">
            <div class="col-4"></div>
            <div class="col">
                <div class="rond_logo">
                    <img class="img_rond" src="Images/welcome/survey.png">
                </div>
                <p class="rond_text">
                    En quelques clics <br>
                    RAPIDE, SIMPLE, ET EFFICACE
                </p>
            </div>
            <div class="col">
                <div class="rond_logo">
                    <img class="img_rond" src="Images/welcome/env.png">
                </div>
                <p class="rond_text">
                    Diffuser votre sondage en ligne <br>
                    Partagez avec vos amis
                </p>
            </div>
            <div class="col">
                <div class="rond_logo">
                    <img class="img_rond" src="Images/welcome/loupe.png">
                </div>
                <p class="rond_text">
                    Analysez vos données <br>
                    Personnalisez vos rapports
                </p>
            </div>
            <div class="col-4"></div>
        </div>

        <div class="row" id="row_comm">
            <div class="col-2"></div>

            <div class="col">
                <h2 class="communeaute_titre"> Communeauté</h2>
                <br>
                <p class="communeaute_text">
                    Evaluez le marché, augmentez votre notoriété
                    <br> <br>
                    Partagez vos formulaires avec vos amis
                </p>
            </div>

            <div class="col">
                <img src="Images/welcome/communaute.png">
            </div>

            <div class="col-2">
            </div>
        </div>


    </div>

    </body>
</html>
