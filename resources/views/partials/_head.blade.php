<head>
  <title>{{config('app.name')}} @yield('title')</title>
  <meta charset="UTF-8">
  <meta name="description" content="GG Games, IAW 2019">
  <meta name="keywords" content="laravel,gg-gaming,website, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">



  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="shortcut icon" />

  <!-- Google Font -->
  <link defer href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i"
    rel="stylesheet">


  <!-- Stylesheets -->

  <!--Bootstrap -->
  <link defer rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



  <link defer rel="stylesheet" href="{{ URL::asset('/css/font-awesome.min.css') }}">
  <link defer rel="stylesheet" href="{{ URL::asset('/css/owl.carousel.min.css') }}">
  <link defer rel="stylesheet" href="{{ URL::asset('/css/animate.css') }}">

  <!-- Form -->
  <link defer rel="stylesheet" href="{{ URL::asset('/css/style-form-game.css') }}">

  <!-- Style-CSS -->
  <link defer rel="stylesheet" href="{{ URL::asset('/css/fontawesome-all.css') }}">

  <!-- web-fonts -->
  <link defer href="//fonts.googleapis.com/css?family=Marck+Script&amp;subset=cyrillic,latin-ext" rel="stylesheet">
  <link defer
    href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext"
    rel="stylesheet">

  <link defer rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">


  <!-- Main Stylesheet -->
  <style>
    /* =================================
------------------------------------
  EndGam - Gaming Magazine Template
  Version: 1.0
 ------------------------------------
 ====================================*/



    /*----------------------------------------*/
    /* Template default CSS
/*----------------------------------------*/

    html,
    body {
      height: 100%;
      font-family: 'Roboto', sans-serif;
      -webkit-font-smoothing: antialiased;
      font-smoothing: antialiased;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      margin: 0;
      color: #111111;
      font-weight: 500;
    }

    h1 {
      font-size: 70px;
    }

    h2 {
      font-size: 36px;
    }

    h3 {
      font-size: 30px;
    }

    h4 {
      font-size: 24px;
    }

    h5 {
      font-size: 18px;
    }

    h6 {
      font-size: 16px;
    }

    p {
      font-size: 15px;
      color: #585858;
      line-height: 1.6;
      font-weight: 500;
    }

    img {
      max-width: 100%;
    }

    input:focus,
    select:focus,
    button:focus,
    textarea:focus {
      outline: none;
    }

    a:hover,
    a:focus {
      text-decoration: none;
      outline: none;
    }

    ul,
    ol {
      padding: 0;
      margin: 0;
    }

    ::-webkit-input-placeholder {
      color: #fff;
      font-style: italic;
    }

    :-ms-input-placeholder {
      color: #fff;
      font-style: italic;
    }

    ::-ms-input-placeholder {
      color: #fff;
      font-style: italic;
    }

    ::placeholder {
      color: #fff;
      font-style: italic;
    }

    /*---------------------
  Helper CSS
-----------------------*/

    .section-title h2 {
      font-size: 30px;
      text-transform: uppercase;
      font-weight: 700;
      font-style: italic;
    }

    .set-bg {
      background-repeat: no-repeat;
      background-size: cover;
      background-position: top center;
    }

    .spad {
      padding-top: 105px;
      padding-bottom: 105px;
    }

    .text-white h1,
    .text-white h2,
    .text-white h3,
    .text-white h4,
    .text-white h5,
    .text-white h6,
    .text-white p,
    .text-white span,
    .text-white li,
    .text-white a {
      color: #fff;
    }

    /*---------------------
  Commom elements
-----------------------*/

    /* buttons */

    .site-btn {
      display: inline-block;
      border: none;
      font-size: 14px;
      font-weight: 700;
      font-style: italic;
      min-width: 186px;
      padding: 24px 30px;
      border-radius: 0;
      text-transform: uppercase;
      color: #081624;
      line-height: normal;
      cursor: pointer;
      text-align: center;
      background: #fff;
      position: relative;
      z-index: 1;
    }

    .site-btn img {
      position: relative;
      left: 13px;
      width: auto !important;
      display: inline-block !important;
    }

    .site-btn:after,
    .site-btn:before {
      position: absolute;
      content: "";
      width: 100%;
      height: 100%;
      left: 9px;
      top: 10px;
      background: #b01ba5;
      z-index: -2;
      -webkit-box-shadow: 0 0 9px 3px rgba(226, 30, 228, 0.24);
      box-shadow: 0 0 9px 3px rgba(226, 30, 228, 0.24);
    }

    .site-btn:before {
      left: 0;
      top: 0;
      background: #fff;
      z-index: -1;
    }

    .site-btn:hover {
      color: #081624;
    }

    /* Preloder */

    #preloder {
      position: fixed;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      z-index: 999999;
      background: #000;
    }

    .loader {
      width: 40px;
      height: 40px;
      position: absolute;
      top: 50%;
      left: 50%;
      margin-top: -13px;
      margin-left: -13px;
      border-radius: 60px;
      animation: loader 0.8s linear infinite;
      -webkit-animation: loader 0.8s linear infinite;
    }

    @keyframes loader {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        border: 4px solid #f44336;
        border-left-color: transparent;
      }

      50% {
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
        border: 4px solid #673ab7;
        border-left-color: transparent;
      }

      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
        border: 4px solid #f44336;
        border-left-color: transparent;
      }
    }

    @-webkit-keyframes loader {
      0% {
        -webkit-transform: rotate(0deg);
        border: 4px solid #f44336;
        border-left-color: transparent;
      }

      50% {
        -webkit-transform: rotate(180deg);
        border: 4px solid #673ab7;
        border-left-color: transparent;
      }

      100% {
        -webkit-transform: rotate(360deg);
        border: 4px solid #f44336;
        border-left-color: transparent;
      }
    }

    /*------------------
  Header section
---------------------*/

    .header-section {
      position: absolute;
      width: 100%;
      left: 0;
      top: 0;
      z-index: 99;
      padding: 15px 15px 0;
    }

    .header-warp {
      max-width: 1496px;
      margin: 0 auto;
    }

    .header-social p,
    .footer-social p,
    .geme-social-share p {
      display: inline-block;
      color: #9190a5;
      font-size: 16px;
      padding-top: 4px;
    }

    .header-social a,
    .footer-social a,
    .geme-social-share a {
      display: -ms-inline-flex;
      display: -webkit-inline-box;
      display: -ms-inline-flexbox;
      display: inline-flex;
      width: 64px;
      height: 64px;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      border-radius: 50%;
      color: #fff;
      font-size: 25px;
      margin-left: 13px;
      -webkit-transition: all 0.3s;
      -o-transition: all 0.3s;
      transition: all 0.3s;
    }

    .header-social a:hover,
    .footer-social a:hover,
    .geme-social-share a:hover {
      background: #b01ba5;
    }

    .header-bar-warp {
      background: #081624;
      padding: 39px 40px 0;
      -webkit-box-shadow: 0 0 9px 3px rgba(226, 30, 228, 0.24);
      box-shadow: 0 0 9px 3px rgba(226, 30, 228, 0.24);
    }

    .site-logo {
      float: left;
    }

    .user-panel {
      float: right;
      font-size: 16px;
      font-weight: 500;
      color: #fff;
      padding-top: 3px;
    }

    .user-panel a {
      color: #fff;
    }

    .user-panel a:hover {
      color: #b01ba5;
    }

    .main-menu {
      list-style: none;
      text-align: center;
      padding-top: 3px;
    }

    .main-menu li {
      display: inline-block;
      position: relative;
    }

    .main-menu li a {
      display: block;
      font-size: 16px;
      font-weight: 500;
      color: #fff;
      margin-right: 40px;
      padding-bottom: 28px;
      position: relative;
      padding-right: 20px;
    }

    .main-menu li a:after {
      position: absolute;
      content: "";
      width: 20px;
      height: 20px;
      right: 0;
      top: 1px;
      background-image: url("../img/icons/arrow-down.png");
      background-repeat: no-repeat;
      background-position: right center;
    }

    .main-menu li a i {
      color: #928d92;
      margin-left: 5px;
    }

    .main-menu li a:hover {
      color: #b01ba5;
    }

    .main-menu li a:hover:after {
      background-image: url("../img/icons/arrow-down-color.png");
    }

    .main-menu li a:hover i {
      color: #b01ba5;
    }

    .main-menu li:hover .sub-menu {
      visibility: visible;
      opacity: 1;
      margin-top: 0;
    }

    .main-menu li:hover>a {
      color: #b01ba5;
    }

    .main-menu li:hover>a:after {
      background-image: url("../img/icons/arrow-down-color.png");
    }

    .main-menu li .sub-menu {
      position: absolute;
      list-style: none;
      text-align: left;
      width: 220px;
      left: 0;
      top: 100%;
      padding: 20px 0;
      visibility: hidden;
      opacity: 0;
      margin-top: 50px;
      background: #fff;
      z-index: 99;
      -webkit-transition: all 0.4s;
      -o-transition: all 0.4s;
      transition: all 0.4s;
      -webkit-box-shadow: 2px 7px 20px rgba(0, 0, 0, 0.4);
      box-shadow: 2px 7px 20px rgba(0, 0, 0, 0.4);
    }

    .main-menu li .sub-menu li {
      display: block;
    }

    .main-menu li .sub-menu li a {
      display: block;
      color: #000;
      margin-right: 0;
      padding: 8px 30px;
    }

    .main-menu li .sub-menu li a:after {
      display: none;
    }

    .main-menu li .sub-menu li a:hover {
      color: #b01ba5;
    }

    .slicknav_menu {
      display: none;
    }

    /*------------------
  Hero section
---------------------*/

    .hero-slider .owl-dots {
      display: -ms-flex;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      z-index: 2;
      left: calc(50% - 740px);
      bottom: 38px;
      position: relative;
      width: 1496px;
      position: absolute;
    }

    .hero-slider .owl-dots .owl-dot {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      font-size: 16px;
      font-weight: 500;
      border: 2px solid transparent;
      color: #fff;
      display: -ms-inline-flex;
      display: -webkit-inline-box;
      display: -ms-inline-flexbox;
      display: inline-flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
    }

    .hero-slider .owl-dots .owl-dot.active {
      color: #b01ba5;
      border: 2px solid #b01ba5;
    }

    .hero-slider .owl-nav {
      margin-top: -24px;
      display: block;
    }

    .hero-slider .owl-nav .owl-next {
      position: absolute;
      top: 50%;
      right: 100px;
    }

    .hero-item {
      height: 921px;
      padding-top: 125px;
      border-bottom: 2px solid #b01ba5;
    }

    .hero-item h2 {
      font-size: 160px;
      color: #fff;
      font-weight: 500;
      line-height: 1;
      position: relative;
      top: 100px;
      opacity: 0;
    }

    .hero-item p {
      font-size: 24px;
      color: rgba(255, 255, 255, 0.4);
      font-weight: 500;
      opacity: 0.39;
      margin-bottom: 70px;
      position: relative;
      top: 80px;
      opacity: 0;
    }

    .hero-item .site-btn {
      position: relative;
      top: 50px;
      opacity: 0;
    }

    .hero-slider .owl-item.active .hero-item h2,
    .hero-slider .owl-item.active .hero-item p,
    .hero-slider .owl-item.active .hero-item .site-btn {
      top: 0;
      opacity: 1;
    }

    .hero-slider .owl-item.active .hero-item h2 {
      -webkit-transition: all 0.5s ease 0.4s;
      -o-transition: all 0.5s ease 0.4s;
      transition: all 0.5s ease 0.4s;
    }

    .hero-slider .owl-item.active .hero-item p {
      -webkit-transition: all 0.5s ease 0.6s;
      -o-transition: all 0.5s ease 0.6s;
      transition: all 0.5s ease 0.6s;
    }

    .hero-slider .owl-item.active .hero-item .site-btn {
      -webkit-transition: all 0.5s ease 0.8s;
      -webkit-transition: all 0.5s ease 0.8s;
      -o-transition: all 0.5s ease 0.8s;
      transition: all 0.5s ease 0.8s;
    }

    .hero-slider .owl-item.active .hero-item .offer-card {
      opacity: 1;
      -webkit-transform: rotate(0deg);
      -ms-transform: rotate(0deg);
      transform: rotate(0deg);
      -webkit-transition: all 0.5s ease 1s;
      -webkit-transition: all 0.5s ease 1s;
      -o-transition: all 0.5s ease 1s;
      transition: all 0.5s ease 1s;
    }

    /* ----------------
  Intro section
---------------------*/

    .intro-section {
      background: #0c062e;
      padding: 115px 0;
    }

    .text-box .top-meta {
      font-size: 18px;
      font-weight: 500;
      margin-bottom: 20px;
    }

    .text-box .top-meta a {
      color: #b01ba5;
    }

    .text-box h3 {
      margin-bottom: 40px;
      max-width: 370px;
    }

    .text-box p {
      font-size: 15px;
      font-weight: 500;
      color: #68647d;
      margin-bottom: 35px;
    }

    .text-box .read-more {
      font-size: 15px;
      text-transform: uppercase;
      font-weight: 700;
      font-style: italic;
      color: #fff;
    }

    .text-box .read-more img {
      margin-left: 13px;
    }

    /* ----------------
 Blog Section
---------------------*/

    .blog-section {
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#501755+0,2d1854+100 */
      background: #501755;
      /* Old browsers */
      /* FF3.6-15 */
      background: -webkit-linear-gradient(45deg, #501755 0%, #2d1854 100%);
      /* Chrome10-25,Safari5.1-6 */
      background: -o-linear-gradient(45deg, #501755 0%, #2d1854 100%);
      background: linear-gradient(45deg, #501755 0%, #2d1854 100%);
      /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#501755', endColorstr='#2d1854', GradientType=1);
      /* IE6-9 fallback on horizontal gradient */
    }

    .blog-section .section-title {
      margin-bottom: 25px;
    }

    .blog-filter {
      list-style: none;
      display: block;
    }

    .blog-filter li {
      display: inline-block;
    }

    .blog-filter li a {
      display: block;
      color: #fff;
      padding: 16px 36px;
      font-size: 16px;
      font-weight: 700;
      background: #6f2b95;
      line-height: 1.1;
      margin-right: 7px;
      -webkit-transition: all 0.3s;
      -o-transition: all 0.3s;
      transition: all 0.3s;
      margin-bottom: 10px;
    }

    .blog-filter li a:hover {
      background: #b01ba5;
    }

    .blog-item {
      margin-top: 0px;
    }

    .blog-item .blog-thumb {
      width: 362px;
      float: left;
      margin-right: 0px;
    }

    .blog-item .text-box {
      overflow: hidden;
    }

    .blog-item .text-box p {
      margin-bottom: 42px;
    }

    .widget-item {
      margin-bottom: 85px;
    }

    .widget-item:last-child {
      margin-bottom: 0;
    }

    .widget-item .widget-title {
      color: #fff;
      text-transform: uppercase;
      font-weight: 700;
      font-style: italic;
      padding-left: 38px;
      margin-bottom: 48px;
    }

    .trending-widget .tw-item {
      margin-bottom: 38px;
    }

    .trending-widget .tw-item:last-child {
      margin-bottom: 0;
    }

    .trending-widget .tw-thumb {
      float: left;
      margin-right: 17px;
      overflow: hidden;
    }

    .trending-widget .tw-text .tw-meta {
      color: #68647d;
      font-size: 12px;
      font-weight: 500;
      margin-bottom: 7px;
    }

    .trending-widget .tw-text .tw-meta a {
      color: #b01ba5;
    }

    .trending-widget .tw-text h5 {
      font-size: 18px;
      color: #fff;
      line-height: 1.5;
    }

    .categories-widget {
      /*background: #34164b;*/
      background: #0c062e;
      padding: 55px 0 25px;
      margin-bottom: 50px;
    }

    .categories-widget ul {
      list-style: none;
      padding: 0 38px;
    }

    .categories-widget ul li {
      display: block;
    }

    .categories-widget ul li a {
      display: inline-block;
      position: relative;
      font-size: 16px;
      color: #68647d;
      font-weight: 500;
      margin-bottom: 15px;
      padding-right: 19px;
      -webkit-transition: all 0.2s;
      -o-transition: all 0.2s;
      transition: all 0.2s;
      background-image: url("../img/icons/double-arrow.png");
      background-repeat: no-repeat;
      background-position: right -120% center;
      background-size: 11px;
    }

    .categories-widget ul li a:hover {
      color: #b01ba5;
      background-position: right center;
    }

    .search-widget {
      position: relative;
    }

    .search-widget input {
      width: 100%;
      height: 40px;
      border: none;
      border-bottom: 2px solid #72628b;
      background: none;
      padding-right: 60px;
      color: #fff;
    }

    .search-widget button {
      position: inherit;
      right: 0;
      top: 0;
      color: wheat;
      font-weight: 700;
      font-size: 14px;
      font-style: italic;
      cursor: pointer;
      background: none;
      border: none;
      text-transform: uppercase;
    }

    .latest-comments .lc-item {
      margin-bottom: 30px;
    }

    .latest-comments .lc-item:last-child {
      margin-bottom: 0;
    }

    .latest-comments .lc-item .lc-avatar {
      width: 64px;
      height: 64px;
      border-radius: 50%;
      float: left;
      margin-right: 12px;
    }

    .latest-comments .lc-item .tw-text {
      padding-top: 10px;
      font-size: 16px;
      color: #fff;
      font-weight: 500;
    }

    .latest-comments .lc-item .tw-text a {
      color: #b01ba5;
    }

    .latest-comments .lc-item .tw-text span {
      color: #68647d;
    }

    /* --------------------
  Intro video section
-----------------------*/

    .intro-video-section {
      height: 757px;
      position: relative;
    }

    .video-play-btn {
      position: absolute;
      left: calc(50% - 61px);
      top: calc(50% - 61px);
      width: 122px;
      height: 122px;
      text-align: center;
      padding-top: 35px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.16);
    }

    .video-text {
      margin-bottom: 80px;
      padding: 27px 0;
      padding-left: 25px;
      position: relative;
    }

    .video-text h2 {
      font-size: 48px;
      text-transform: uppercase;
      font-style: italic;
      font-weight: 700;
      color: #fff;
      margin-bottom: 1px;
    }

    .video-text p {
      font-size: 18px;
      color: #a3a1b3;
      font-weight: 500;
      margin-bottom: 0;
    }

    .video-text:after {
      position: absolute;
      content: "";
      width: 9px;
      height: 100%;
      left: -22px;
      top: 0;
      border-left: 3px solid #de46d6;
      background: #fff;
      -webkit-box-shadow: 0 0 9px 3px rgba(226, 30, 228, 0.5);
      box-shadow: 0 0 9px 3px rgba(226, 30, 228, 0.5);
    }

    /* ----------------
  Featured section
---------------------*/

    .featured-section {
      position: relative;
      overflow: hidden;
    }

    .featured-bg {
      width: calc(50% - 156px);
      float: left;
      height: 100%;
      left: 0;
      right: 0;
      position: absolute;
    }

    .featured-box {
      float: right;
      width: calc(50% + 156px);
      background: #fff;
      padding: 100px 50px 130px 79px;
    }

    .featured-box .text-box {
      max-width: 810px;
    }

    .featured-box .text-box .top-meta {
      color: #68647d;
    }

    .featured-box .text-box h3 {
      font-size: 60px;
      max-width: 100%;
    }

    .featured-box .text-box p {
      font-size: 16px;
    }

    .featured-box .text-box .read-more {
      color: #251e2f;
    }

    .gradient-bg,
    .newsletter-section {
      background: #3e0f3d;
      /* Old browsers */
      /* FF3.6-15 */
      background: -webkit-linear-gradient(left, #3e0f3d 0%, #1c0f3b 100%);
      /* Chrome10-25,Safari5.1-6 */
      background: -webkit-gradient(linear, left top, right top, from(#3e0f3d), to(#1c0f3b));
      background: -o-linear-gradient(left, #3e0f3d 0%, #1c0f3b 100%);
      background: linear-gradient(to right, #3e0f3d 0%, #1c0f3b 100%);
      /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#3e0f3d', endColorstr='#1c0f3b', GradientType=1);
      /* IE6-9 */
    }

    /* --------------------
  Newsletter section
----------------------*/

    .newsletter-section {
      padding: 108px 0 95px;
      text-align: center;
    }

    .newsletter-section h2 {
      font-size: 48px;
      color: #fff;
      font-weight: 700;
      font-style: italic;
      text-transform: uppercase;
      margin-bottom: 73px;
    }

    .newsletter-form {
      padding-left: 56px;
    }

    .newsletter-form input {
      font-size: 14px;
      font-weight: 700;
      font-style: italic;
      color: #fff;
      width: 787px;
      border: none;
      border-bottom: 2px solid #9b91a6;
      background: none;
      height: 63px;
      margin-right: 26px;
    }

    /* ----------------
  Footer section
---------------------*/

    .footer-section {
      text-align: center;
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#330d38+0,190d36+100 */
      background: #330d38;
      /* Old browsers */
      /* FF3.6-15 */
      background: -webkit-linear-gradient(left, #330d38 0%, #190d36 100%);
      /* Chrome10-25,Safari5.1-6 */
      background: -webkit-gradient(linear, left top, right top, from(#330d38), to(#190d36));
      background: -o-linear-gradient(left, #330d38 0%, #190d36 100%);
      background: linear-gradient(to right, #330d38 0%, #190d36 100%);
      /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#330d38', endColorstr='#190d36', GradientType=1);
      /* IE6-9 */
    }

    .footer-section .container {
      position: relative;
      padding: 60px 15px 25px;
    }

    .footer-left-pic {
      position: absolute;
      left: -13px;
      bottom: 19px;
    }

    .footer-right-pic {
      position: absolute;
      right: 50px;
      bottom: 19px;
    }

    .footer-menu {
      padding-top: 62px;
    }

    .footer-menu li:last-child a {
      margin-right: 0;
    }

    .footer-social {
      margin-top: -50px;
      padding-top: 0px;
      padding-bottom: 40px;
    }

    .footer-social a:first-child {
      margin-left: 0;
    }

    .copyright {
      font-size: 12px;
      font-weight: 500;
      color: #9190a5;
      opacity: 0.20;
    }

    .copyright a {
      color: #9190a5;
    }

    .copyright a:hover {
      text-decoration: underline;
    }

    /* ----------------
  Other Pages
=====================
---------------------*/

    .page-top-section {
      height: 355px;
      padding-top: 210px;
    }

    .page-info {
      max-width: 1496px;
      margin: 0 auto;
      font-size: 16px;
      color: #fff;
      padding-left: 60px;
    }

    .page-info h2 {
      color: #fff;
      font-size: 48px;
    }

    .site-breadcrumb a,
    .site-breadcrumb span {
      font-style: italic;
      color: #fff;
      margin: 0 10px;
      font-weight: 700;
    }

    .site-breadcrumb a:first-child {
      margin-left: 0;
    }

    .site-breadcrumb span {
      color: #c313b7;
    }

    /* --------------
  Games Page
-----------------*/

    .games-section {
      padding: 108px 0;
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#501755+0,2d1854+100 */
      background: #501755;
      /* Old browsers */
      /* FF3.6-15 */
      background: -webkit-linear-gradient(45deg, #501755 0%, #2d1854 100%);
      /* Chrome10-25,Safari5.1-6 */
      background: -o-linear-gradient(45deg, #501755 0%, #2d1854 100%);
      background: linear-gradient(45deg, #501755 0%, #2d1854 100%);
      /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#501755', endColorstr='#2d1854', GradientType=1);
      /* IE6-9 fallback on horizontal gradient */
    }

    .game-filter {
      list-style: none;
      margin-bottom: 82px;
    }

    .game-filter li {
      display: inline-block;
      width: 40px;
      height: 34px;
      background: #503c6e;
      border-radius: 17px;
      -webkit-transition: all 0.3s;
      -o-transition: all 0.3s;
      transition: all 0.3s;
    }

    .game-filter li:hover {
      background: #c313b7;
    }

    .game-filter li a {
      font-size: 15px;
      font-weight: 700;
      color: #fff;
      display: block;
      width: 100%;
      height: 100%;
      text-align: center;
      padding-top: 7px;
    }

    .game-item {
      margin-bottom: 80px;
    }

    .game-item h5 {
      font-size: 20px;
      color: #fff;
      padding-top: 30px;
      margin-bottom: 20px;
    }

    .game-item .read-more {
      font-size: 15px;
      text-transform: uppercase;
      font-weight: 700;
      font-style: italic;
      color: #b01ba5;
    }

    .game-item .read-more img {
      margin-left: 13px;
    }

    .site-pagination {
      display: -ms-flex;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
    }

    .site-pagination a {
      width: 38px;
      height: 44px;
      border-radius: 50%;
      font-size: 16px;
      font-weight: 500;
      border: 2px solid transparent;
      color: #fff;
      display: -ms-inline-flex;
      display: -webkit-inline-box;
      display: -ms-inline-flexbox;
      display: inline-flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-transition: all 0.5s;
      -o-transition: all 0.5s;
      transition: all 0.5s;
    }

    .site-pagination a.active {
      width: 44px;
      margin: 0 10px;
      color: #b01ba5;
      border: 2px solid #b01ba5;
    }

    .site-pagination a.active:first-child {
      margin-left: 0;
    }

    .game-page-sideber .widget-item {
      margin-bottom: 55px;
    }

    /* ------------------
  Game single Page
---------------------*/

    .games-single-page,
    .review-section,
    .blog-page,
    .contact-page {
      padding: 104px 0;
      /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#501755+0,2d1854+100 */
      background: #501755;
      /* Old browsers */
      /* FF3.6-15 */
      background: -webkit-linear-gradient(45deg, #501755 0%, #2d1854 100%);
      /* Chrome10-25,Safari5.1-6 */
      background: -o-linear-gradient(45deg, #501755 0%, #2d1854 100%);
      background: linear-gradient(45deg, #501755 0%, #2d1854 100%);
      /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#501755', endColorstr='#2d1854', GradientType=1);
      /* IE6-9 fallback on horizontal gradient */
    }

    .custom-form {
      padding: 104px 0;
      background: #0c062e;
      /* Old browsers */
      /* FF3.6-15 */
      background: -webkit-linear-gradient(45deg, #0c062e 0%, #2d1854 100%);
      /* Chrome10-25,Safari5.1-6 */
      background: -o-linear-gradient(45deg, #0c062e 0%, #2d1854 100%);
      background: linear-gradient(45deg, #0c062e 0%, #2d1854 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#501755', endColorstr='#2d1854', GradientType=1);
    }

    .game-single-preview {
      margin-bottom: 108px;
    }

    .game-single-content .gs-meta {
      font-size: 18px;
      color: #68647d;
      font-weight: 500;
      margin-bottom: 20px;
    }

    .game-single-content .gs-meta a {
      color: #b01ba5;
    }

    .game-single-content .gs-title {
      font-size: 60px;
      color: #fff;
      margin-bottom: 25px;
      margin-left: 17px;
    }

    .game-single-content h4 {
      color: #b01ba5;
      margin-bottom: 20px;
    }

    .game-single-content p {
      font-size: 16px;
      font-weight: 500;
      color: #68647d;
      line-height: 1.8;
      margin-bottom: 70px;
    }

    .rating-widget {
      /*background: #34164b; */
      background: #0c062e;
      padding: 55px 0 30px;
    }

    .rating-widget ul {
      list-style: none;
      padding: 0 38px;
      margin-bottom: 30px;
    }

    .rating-widget ul li {
      display: block;
      font-size: 16px;
      color: #b01ba5;
      font-weight: 500;
      margin-bottom: 10px;
    }

    .rating-widget ul li span {
      float: right;
      color: #68647d;
    }

    .rating-widget h5 {
      text-align: right;
      font-size: 36px;
      color: #fff;
      font-weight: 900;
      padding-right: 38px;
    }

    .rating-widget h5 i {
      font-weight: 500;
      font-size: 16px;
      font-style: italic;
      color: #65607b;
      text-transform: uppercase;
      margin-right: 18px;
    }

    .rating-widget h5 span {
      color: #b01ba5;
    }

    .testimonials-widget {
      background: #34164b;
      padding: 55px 0 50px;
    }

    .testimonials-widget .testim-text {
      padding: 0 30px;
    }

    .testimonials-widget .testim-text p {
      font-size: 16px;
      font-weight: 500;
      color: #68647d;
      line-height: 1.8;
      margin-bottom: 40px;
    }

    .testimonials-widget .testim-text h6 {
      color: #68647d;
      padding-left: 15px;
    }

    .testimonials-widget .testim-text h6 span {
      color: #b01ba5;
    }

    .game-author-section {
      background: #3a1854;
      padding: 51px 0;
      overflow: hidden;
    }

    .game-author-pic {
      width: 117px;
      height: 117px;
      border-radius: 50%;
      float: left;
      margin-right: 55px;
    }

    .game-author-info {
      overflow: hidden;
      padding-top: 10px;
    }

    .game-author-info h4 {
      color: #fff;
      margin-bottom: 20px;
    }

    .game-author-info h4 span {
      color: #b01ba5;
    }

    .game-author-info p {
      font-size: 16px;
      font-weight: 500;
      color: #68647d;
      line-height: 1.8;
      margin-bottom: 0;
    }

    /* ----------------
  Review section
---------------------*/

    .review-item {
      margin-bottom: 87px;
    }

    .review-content {
      position: relative;
    }

    .review-content h3 {
      max-width: 100%;
      margin-bottom: 35px;
    }

    .review-content p {
      margin-bottom: 40px;
    }

    .review-content .rating {
      position: absolute;
      right: 0;
      top: 0;
    }

    .review-content .rating h5 {
      text-align: right;
      font-size: 36px;
      color: #fff;
      font-weight: 900;
      padding-right: 38px;
    }

    .review-content .rating h5 i {
      font-weight: 500;
      font-size: 16px;
      font-style: italic;
      color: #65607b;
      text-transform: uppercase;
      margin-right: 18px;
    }

    .review-content .rating h5 span {
      color: #c313b7;
    }

    /* ------------------
	Blog Page
---------------------*/

    .blog-page .blog-filter {
      margin-bottom: 77px;
    }

    .big-blog-item {
      margin-bottom: 65px;
    }

    .big-blog-item .blog-thumbnail {
      margin-bottom: 30px;
    }

    .big-blog-item .blog-content .top-meta {
      margin-bottom: 15px;
    }

    .big-blog-item .blog-content h3 {
      max-width: 100%;
      margin-bottom: 25px;
    }

    .big-blog-item .blog-content p {
      margin-bottom: 10px;
    }

    /* ----------------
  Contact page
---------------------*/

    .map iframe {
      width: 100%;
      height: 600px;
      margin-bottom: 104px;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      border: none;
      background-color: transparent;
      border-bottom: 2px solid rgba(255, 255, 255, 0.54);
      padding-bottom: 20px;
      margin-bottom: 30px;
      font-weight: 500;
      font-size: 16px;
      font-style: italic;
      color: #fff;
      line-height: 1;
    }

    .contact-form textarea {
      line-height: 1.4;
      height: 156px;
      margin-bottom: 48px;
    }

    .contact-form .site-btn img {
      left: 5px;
    }

    .contact-text h3 {
      margin-bottom: 25px;
    }

    .contact-text p {
      line-height: 1.9;
      color: #68647d;
      margin-bottom: 50px;
    }

    .cont-info {
      overflow: hidden;
      margin-bottom: 20px;
    }

    .cont-info .ci-icon {
      float: left;
      width: 32px;
      margin-right: 26px;
    }

    .cont-info .ci-text {
      overflow: hidden;
      font-size: 16px;
      font-weight: 500;
    }

    /* ----------------
  Responsive
---------------------*/

    @media (min-width: 1200px) {
      .container {
        max-width: 1175px;
      }
    }

    @media (max-width: 1530px) {
      .hero-slider .owl-dots {
        width: 1170px;
        left: calc(50% - 585px);
      }
    }

    /* Medium screen : 992px. */

    @media only screen and (min-width: 992px) and (max-width: 1199px) {
      .blog-item .blog-thumb {
        width: 250px;
      }

      .hero-item p {
        font-size: 22px;
      }

      .hero-slider .owl-nav .owl-next {
        right: 30px;
      }

      .hero-slider .owl-dots {
        width: 930px;
        left: calc(50% - 465px);
      }

      .newsletter-form {
        padding-left: 0;
      }

      .newsletter-form input {
        width: 100%;
        margin-right: 0;
        margin-bottom: 40px;
      }

      .game-filter li {
        width: 31px;
        height: 31px;
      }

      .game-filter li a {
        padding-top: 5px;
      }
    }

    /* Tablet :768px. */

    @media only screen and (min-width: 768px) and (max-width: 991px) {
      .header-bar-warp {
        padding: 39px 15px 0;
      }

      .main-menu li a {
        margin-right: 10px;
      }

      .hero-item h2 {
        font-size: 110px;
      }

      .hero-item p {
        font-size: 16px;
        padding: 0 30px;
      }

      .hero-slider .owl-nav .owl-next {
        right: 0;
      }

      .hero-slider .owl-dots {
        width: 690px;
        left: calc(50% - 345px);
      }

      .blog-item .blog-thumb {
        float: none;
        margin-right: 0;
        width: 100%;
        margin-bottom: 30px;
      }

      .featured-bg {
        display: none;
      }

      .featured-box {
        float: none;
        width: 100%;
      }

      .newsletter-form input {
        width: 100%;
        margin-right: 0;
        margin-bottom: 40px;
      }

      .footer-right-pic {
        right: 15px;
      }

      .footer-left-pic {
        left: -44px;
      }

      .game-filter {
        text-align: center;
      }

      .game-filter li {
        margin-bottom: 5px;
      }

      .game-single-content .gs-title {
        font-size: 40px;
      }

      .review-pic img {
        min-width: 100%;
        margin-bottom: 30px;
      }

      .contact-text {
        margin-bottom: 50px;
      }
    }

    /* Large Mobile :480px. */

    @media only screen and (max-width: 767px) {
      .header-bar-warp {
        padding: 25px 20px 10px;
      }

      .main-menu.primary-menu {
        display: none;
      }

      .slicknav_menu {
        display: block;
        background: #081624;
      }

      .slicknav_btn {
        margin-right: 10px;
        background: #3a3a3a;
      }

      .slicknav_nav a:hover,
      .slicknav_nav .slicknav_row:hover {
        background: #25394c;
        color: #fff;
      }

      .hero-item h2 {
        font-size: 70px;
      }

      .hero-item p {
        font-size: 18px;
      }

      .footer-right-pic,
      .footer-left-pic {
        display: none;
      }

      .hero-slider .owl-nav .owl-next {
        top: auto;
        bottom: 33px;
        right: 15px;
        z-index: 99;
      }

      .hero-slider .owl-dots {
        width: 100%;
        left: 0;
        padding-left: 15px;
      }

      .intro-text-box {
        margin-bottom: 40px;
      }

      .blog-item .blog-thumb {
        float: none;
        margin-right: 0;
        width: 100%;
        margin-bottom: 30px;
      }

      .sidebar {
        padding-top: 0px;
      }

      .featured-bg {
        display: none;
      }

      .featured-box {
        float: none;
        width: 100%;
      }

      .featured-box .text-box h3 {
        font-size: 45px;
      }

      .newsletter-form {
        padding-left: 0;
      }

      .newsletter-form input {
        width: 100%;
        margin-right: 0;
        margin-bottom: 40px;
      }

      .video-text:after {
        left: 0;
      }

      .page-top-section {
        height: 400px;
        padding-top: 250px;
      }

      .game-filter {
        text-align: center;
      }

      .game-filter li {
        margin-bottom: 5px;
      }

      .game-single-content .gs-title {
        font-size: 40px;
      }

      .review-pic img {
        min-width: 100%;
        margin-bottom: 30px;
      }

      .contact-text {
        margin-bottom: 50px;
      }

      .review-content .rating {
        position: relative;
        margin-bottom: 20px;
      }

      .review-content .rating h5 {
        text-align: left;
        padding-right: 0;
      }
    }

    /* Small Mobile :320px. */

    @media only screen and (max-width: 479px) {
      .hero-item h2 {
        font-size: 55px;
        margin-bottom: 20px;
      }

      .hero-item p {
        font-size: 15px;
      }

      .video-text h2 {
        font-size: 30px;
      }

      .video-play-btn {
        top: calc(30% - 61px);
      }

      .featured-box {
        padding: 100px 15px;
      }

      .featured-box .text-box h3,
      .newsletter-section h2 {
        font-size: 35px;
      }

      .main-menu li a {
        margin-right: 20px;
      }

      .game-author-pic {
        float: none;
        margin-bottom: 20px;
      }

      .btn-file {
        position: relative;
        overflow: hidden;
      }

      .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
      }





    }
  </style>

  <!-- Search table -->
  @yield('search-specific-style')

  <!--Multiple select forms Bootstrap-->
  <link defer rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
  <link defer rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Faq -->
  <style>
    .faqHeader {
      font-size: 27px;
      margin-bottom: 20px;
      margin-top: 20px;
      color: wheat;
    }

    .panel-heading {
      padding-bottom: 10px;
      padding-top: 10px;
    }

    .panel-heading [data-toggle="collapse"]:after {
      font-family: "fontawesome";
      content: "\f054";
      /* "play" icon */
      float: right;
      color: wheat;
      font-size: 18px;
      line-height: 22px;
      /* rotate "play" icon from > (right arrow) to down arrow */
      -webkit-transform: rotate(-90deg);
      -moz-transform: rotate(-90deg);
      -ms-transform: rotate(-90deg);
      -o-transform: rotate(-90deg);
      transform: rotate(-90deg);
    }

    .panel-heading [data-toggle="collapse"].collapsed:after {
      /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
      -webkit-transform: rotate(90deg);
      -moz-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
      -o-transform: rotate(90deg);
      transform: rotate(90deg);
      color: wheat;
    }

    .panel-title a {
      padding: 10px;
      display: block;
    }

    .panel-title a[aria-expanded='true'] {
      background-color: #081624;
      color: #fff;
    }

    .panel-title a[aria-expanded='true']::after {
      color: wheat;
    }

    .panel-body {
      color: wheat;
      font-size: 22px;
    }
  </style>


</head>