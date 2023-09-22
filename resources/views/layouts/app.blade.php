<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'บริษัท เมเชอร์โทรนิกซ์ จำกัด') }}</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

  <!-- Scripts -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  @livewireStyles
</head>

<body>
  <style>
    .action {
      width: 60px;
      height: 60px;
      position: fixed;
      right: 40px;
      bottom: 40px;
      background-color: #2c66b1;
      border-radius: 50%;
      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.25);
    }

    .action button {
      position: relative;
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      border: none;
      padding: 0;
      border-radius: 50%;
      font-size: 40px;
      color: #ffffff;
      transition: 0.3s ease-in-out;
      outline: none;
      cursor: pointer;
      background-color: #2c66b1;
    }

    .action.active button {
      transform: rotate(135deg);
    }

    .action ul {
      position: absolute;
      bottom: 55px;
      background-color: #ffffff;
      display: grid;
      grid-gap: 10px;
      border-radius: 20px;
      padding: 20px;
      list-style-type: none;
      margin: 0;
      text-align: center;
      opacity: 0;
      visibility: hidden;
      transition: 0.3s;
    }

    .action.active ul {
      opacity: 1;
      visibility: visible;
      transition: 0.3s;
      bottom: 65px;
    }

    .action li:hover {
      transform: scale(1.5);
    }

    .brand {
      max-height: 1000%;
      overflow-x: hidden;
      overflow-y: auto;
    }

    .dropend .dropdown-toggle {
      margin-left: 1em;
    }

    .dropend ul {
      overflow: auto;
      max-height: 500%;
    }

    .dropdown-item:hover {
      background-color: #5099ff;
      color: #fff;
    }

    .dropend:hover>.dropdown-menu {
      display: block;
      margin-top: 0.125em;
      margin-left: 0.125em;
    }

    .dropdown:hover>.dropdown-menu {
      display: block;
      margin-top: 0.125em;
      margin-left: 0.125em;
    }

    @media screen and (min-width:769px) {
      .dropend .dropdown-toggle {
        margin-left: .5em;
      }

      .dropend .dropdown-toggle:hover {
        background-color: rgb(80, 153, 255);
        color: #fff;
      }

      .dropend:hover>.dropdown-menu {
        position: absolute;
        top: 0;
        left: 100%;
      }
    }

    .dropdown-menu::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
      background-color: #F5F5F5;
      border-radius: 10px;
    }

    .dropdown-menu::-webkit-scrollbar {
      width: 10px;
      background-color: #F5F5F5;
    }

    .dropdown-menu::-webkit-scrollbar-thumb {
      border-radius: 10px;
      background-color: #5099ff;
    }
  </style>
  <div id="app">
    <div class="action">
      <button>+</button>
      <ul>
        <li class="my-1">
          <a
            href="https://www.google.com/maps/place/Measuretronix+Limited/@13.7879782,100.6063996,20.91z/data=!4m5!3m4!1s0x30e29de5650b31e1:0xbea990cca0c58ac9!8m2!3d13.7879684!4d100.6064608?shorturl=1">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
              class="bi bi-geo-alt-fill" viewBox="0 0 16 16" style="color: rgb(255, 0, 0);">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg>
          </a>
        </li>
        <li class="my-1">
          <a href="https://www.youtube.com/c/MeasuretronixLTD">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-youtube"
              viewBox="0 0 16 16" style="color: rgb(255, 0, 0);">
              <path
                d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
            </svg>
          </a>
        </li>
        <li class="my-1">
          <a href="https://page.line.me/measuretronix.ltd?openQrModal=true">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-line"
              viewBox="0 0 16 16" style="color: rgb(0, 255, 0);">
              <path
                d="M8 0c4.411 0 8 2.912 8 6.492 0 1.433-.555 2.723-1.715 3.994-1.678 1.932-5.431 4.285-6.285 4.645-.83.35-.734-.197-.696-.413l.003-.018.114-.685c.027-.204.055-.521-.026-.723-.09-.223-.444-.339-.704-.395C2.846 12.39 0 9.701 0 6.492 0 2.912 3.59 0 8 0ZM5.022 7.686H3.497V4.918a.156.156 0 0 0-.155-.156H2.78a.156.156 0 0 0-.156.156v3.486c0 .041.017.08.044.107v.001l.002.002.002.002a.154.154 0 0 0 .108.043h2.242c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157Zm.791-2.924a.156.156 0 0 0-.156.156v3.486c0 .086.07.155.156.155h.562c.086 0 .155-.07.155-.155V4.918a.156.156 0 0 0-.155-.156h-.562Zm3.863 0a.156.156 0 0 0-.156.156v2.07L7.923 4.832a.17.17 0 0 0-.013-.015v-.001a.139.139 0 0 0-.01-.01l-.003-.003a.092.092 0 0 0-.011-.009h-.001L7.88 4.79l-.003-.002a.029.029 0 0 0-.005-.003l-.008-.005h-.002l-.003-.002-.01-.004-.004-.002a.093.093 0 0 0-.01-.003h-.002l-.003-.001-.009-.002h-.006l-.003-.001h-.004l-.002-.001h-.574a.156.156 0 0 0-.156.155v3.486c0 .086.07.155.156.155h.56c.087 0 .157-.07.157-.155v-2.07l1.6 2.16a.154.154 0 0 0 .039.038l.001.001.01.006.004.002a.066.066 0 0 0 .008.004l.007.003.005.002a.168.168 0 0 0 .01.003h.003a.155.155 0 0 0 .04.006h.56c.087 0 .157-.07.157-.155V4.918a.156.156 0 0 0-.156-.156h-.561Zm3.815.717v-.56a.156.156 0 0 0-.155-.157h-2.242a.155.155 0 0 0-.108.044h-.001l-.001.002-.002.003a.155.155 0 0 0-.044.107v3.486c0 .041.017.08.044.107l.002.003.002.002a.155.155 0 0 0 .108.043h2.242c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157H11.81v-.589h1.525c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157H11.81v-.589h1.525c.086 0 .155-.07.155-.156Z" />
            </svg>
          </a>
        </li>
        <li class="my-1">
          <a href="https://www.facebook.com/Measuretronix.Limited/">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook"
              viewBox="0 0 16 16" style="color: rgb(0, 76, 255);">
              <path
                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
            </svg>
          </a>
        </li>
        <li class="my-1">
          <a href="https://www.tiktok.com/@measuretronix">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-tiktok"
              viewBox="0 0 16 16" style="color: rgb(0, 0, 0);">
              <path
                d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z" />
            </svg>
          </a>
        </li>
      </ul>
    </div>

    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="https://v4i.rweb-images.com/www.measuretronix.com/images/logo/large-1658484550269.png"
            style="width:200px;height:50px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav ms-2">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url('/') }}">HOME</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                BRAND
              </a>
              <ul class="dropdown-menu brand" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Amprobe'])}}">Amprobe</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Andeen-Hagerling'])}}">Andeen-Hagerling</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'AOK'])}}">AOK</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Battery-Metric'])}}">Battery Metric (Lamantia)</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'BC-Biomedical'])}}">BC Biomedical</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Bird'])}}">Bird</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'BK Precision/Sefram'])}}">BK Precision/Sefram</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Bruel&Kjaer'])}}">Bruel & Kjaer</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Clare'])}}">Clare (seaward)</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Comark'])}}">Comark</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'CTRL-Systems'])}}">CTRL Systems</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Delta'])}}">Delta</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'EA-Technology'])}}">EA Technology</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Emazys'])}}">Emazys</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Engineer'])}}">Engineer</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'FW-Bell'])}}">F.W. Bell</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Fluke'])}}">Fluke</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Fluke Calibration'])}}">Fluke Calibration</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Gossen Metrawatt'])}}">Gossen Metrawatt</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'GW Instek'])}}">GW Instek</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Haltech'])}}">Haltech</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Hikmicro'])}}">Hikmicro</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Huntron'])}}">Huntron</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'IET-Labs'])}}">IET Labs</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'IMT-Analytics'])}}">IMT Analytics</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Jensen'])}}">Jensen</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Joinwit'])}}">Joinwit</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Kanomax'])}}">Kanomax</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'LabSat'])}}">LabSat</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Lansmont'])}}">Lansmont</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'LCR-Research'])}}">LCR Research</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'LDS'])}}">LDS</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Leyro'])}}">Leyro</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Luciol'])}}">Luciol</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Metrel'])}}">Metrel</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Micronix'])}}">Micronix</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'NetAlly'])}}">NetAlly</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Pace'])}}">Pace</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Pendulum'])}}">Pendulum</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Polytec'])}}">Polytec</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Pomona'])}}">Pomona</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Preen'])}}">Preen</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Prodigit'])}}">Prodigit</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Promax'])}}">Promax</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Radian Research'])}}">Radian Research</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Radiodetection'])}}">Radiodetection</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Reed'])}}">Reed</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Rigel-Medical'])}}">Rigel Medical</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'RigExpert'])}}">RigExpert</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Seaward'])}}">Seaward</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Silverado'])}}">Silverado</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Silvertronic'])}}">Silvertronic</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Sonic'])}}">Sonic</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Sorensen'])}}">Sorensen (Ametek)</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Thunder-Scientific'])}}">Thunder Scientific</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'TPI'])}}">TPI</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Tunkia'])}}">Tunkia</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Vaisala'])}}">Vaisala</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'Wanglu'])}}">Wanglu</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'WENS'])}}">WENS</a></li>
                <li><a class="dropdown-item" href="{{route('brand_product', ['brand_name' => 'XEDA'])}}">XEDA</a></li>
                <li><a class="dropdown-item" href="{{route('brand')}}">See All Brands</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                CATEGORY
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li class="nav-item dropend">
                  <a class="nav-link dropdown-toggle" href="#">Industrial measuring and testing tools</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="#">Accessories สายวัด</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">กล้องตรวจสภาพภายในท่อ</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">กล้องถ่ายภาพความร้อน</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">กล้องถ่ายภาพเสียงและ Partial Discharge</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องตรวจสอบการรั่วไหลของระบบ</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวัดกำลังไฟฟ้า</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวัดความต้านทานดิน</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวัดความปลอดภัยระบบไฟฟ้า</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวัดความเร็วรอบ</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวัดความเร็วลม</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวัดค่าความต้านทานต่ำ</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวัดค่าฉนวนไฟฟ้า</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวัดคุณภาพอากาศ</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวัดปริมาณฝุ่น</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวัดระยะและระดับน้ำแบบเลเซอร์</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวัดลำดับเฟส</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวัดสนามแม่เหล็ก</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวัดแสง</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวัดอัตราการไหล</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">แคลมป์มิเตอร์</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">ด้ามวัดไฟแบบไม่สัมผัส</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">ดิจิตอลมัลติมิเตอร์</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">อนาลอกมัลติมิเตอร์</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">ออสซิลโลสโคป</a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item dropend">
                  <a class="nav-link dropdown-toggle" href="#">High precision calibration</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="#">เครื่องสอบเทียบงานอุตสาหกรรม</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องสอบเทียบทางไฟฟ้า</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องสอบเทียบทางแรงดัน</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องสอบเทียบทางอุณหภูมิ</a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item dropend">
                  <a class="nav-link dropdown-toggle" href="#">Network testing tools</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="#">เครื่องตรวจสอบกล้องวงจรปิด IP/Analog</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องทดสอบระบบเน็ตเวิร์ค</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องทดสอบสัญญาณไวไฟ</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องทดสอบสายแลน/ไฟเบอร์</a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item dropend">
                  <a class="nav-link dropdown-toggle" href="#">Analyze sound and vibration</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="#">เครื่องทดสอบการสั่นสะเทือน</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องทดสอบเสียงและการสั่นสะเทือน</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวัดเสียง</a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item dropend">
                  <a class="nav-link dropdown-toggle" href="#">Radio Frequency, Communications and
                    Telecommunications</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="#">เครื่องกำเนิดสัญญาณ</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องกำเนิดสัญญาณความถี่วิทยุ</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องทดสอบสายอากาศและสายนำสัญญาณ</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องนับความถี่สูงย่านไมโครเวฟ</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องนับและวิเคราะห์ความถี่</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวัดกำลังส่งคลื่นวิทยุและเพาเวอร์เซ็นเซอร์</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวิเคราะห์สัญญาณโทรทัศน์และดาวเทียม</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวิเคราะห์สายอากาศ</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">ชุดจำลองสัญญาณ GPS</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">ชุดสร้างความถี่ Clock มาตรฐานควบคุมด้วย GPS</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">สเปกตรัมอนาไลเซอร์</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">อุปกรณ์ลดทอนสัญญาณ</a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item dropend">
                  <a class="nav-link dropdown-toggle" href="#">Tester and Tools</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="#">AC/DC อิเล็กทรอนิกส์โหลด</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">LCR มิเตอร์</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องค้นหาแนวสายเคเบิ้ลและท่อใต้ดิน</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องจ่ายไฟกระแสตรง DC</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องจ่ายไฟกระแสสลับ AC</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องทดสอบบรรจุภัณฑ์</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องทดสอบไฟฟ้าแรงดันสูง</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องมือช่าง</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องมือในการซ่อมบอร์ด</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวัดความปลอดภัยทางไฟฟ้าของเครื่องใช้ไฟฟ้า</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวัดความปลอดภัยทางไฟฟ้าของเครื่องมือแพทย์</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวัดหม้อแปลงไฟฟ้า</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวิเคราะห์แบตเตอรี่</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">ชุดทดสอบ EMI</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">ชุดฝึกสำหรับการศึกษา</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">ชุดทดสอบ Quick ชาร์จเจอร์</a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item dropend">
                  <a class="nav-link dropdown-toggle" href="#">Measure temperature and humidity</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวัดอุณหภูมิ​/ความชื้น</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวัดอุณหภูมิในอุตสาหกรรมอาหาร​</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวัดอุณหภูมิแบบอินฟราเรด</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องให้กำเนิดอุณหภูมิและความชื้นสัมพัทธ์</a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item dropend">
                  <a class="nav-link dropdown-toggle" href="#">Solar and electric vehicles</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวัดการติดตั้งระบบไฟฟ้าพลังงานแสงอาทิตย์</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวัดความปลอดภัยการติดตั้งสถานีชาร์จรถไฟฟ้า​</a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item dropend">
                  <a class="nav-link dropdown-toggle" href="#">Check medical equipment</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="#">เครื่องทดสอบเครื่องมือแพทย์</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวิเคราะห์ประสิทธิภาพเครื่องช่วยหายใจ​</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">เครื่องวิเคราะห์ประสิทธิภาพเครื่องวัดสัญญาณชีพ​</a>
                    </li>
                  </ul>
                </li>

              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                PROMOTION
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                REPAIR & CALIBRATION
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">QUATATION & DEMONSTRATION</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">ABOUT US</a>
            </li>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            <li class="nav-item">
              <form action="{{ url('search') }}" method="get" role="search">
                <div class="input-group">
                  <input class="form-control me-2" type="search" name="search" value="" placeholder="Search" aria-label="Search">
                </div>
              </form>
            </li>
            @guest
            @if (Route::has('login'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @endif

            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>

    <main class="py-4">
      @yield('content')
    </main>
  </div>
  @livewireScripts
</body>
<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <h6>MEASURETRONIX.LTD</h6>
        <p class="text-justify">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill"
            viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
          </svg> &emsp;2425/2 ถนนลาดพร้าว แขวงสะพานสอง เขตวังทองหลาง กรุงเทพฯ 10310<br>
        </p>
        <p class="text-justify">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-telephone-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
          </svg> &emsp;0 2514 1000, 0 2514 1234<br>
        </p>
        <p class="text-justify">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill"
            viewBox="0 0 16 16">
            <path
              d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
          </svg> &emsp;info@measuretronix.com<br>
        </p>
        <p class="text-justify">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill"
            viewBox="0 0 16 16">
            <path
              d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
          </svg> &emsp;เวลาทำการ : จันทร์ - ศุกร์ 8:00 - 17:00 น.<br>
        </p>
      </div>

      <div class="col-xs-6 col-md-3">
        <h6>ABOUT US</h6>
        <ul class="footer-links">
          <li><a href="#">รายละเอียดบริษัท</a></li>
          <li><a href="#">ตัวแทนจำหน่าย</a></li>
          <li><a href="#">ข้อเสนอแนะ</a></li>
          <li><a href="#">นโยบายความเป็นส่วนตัว</a></li>
          <li><a href="#">สมัครงาน</a></li>
        </ul>
      </div>

      <div class="col-xs-6 col-md-3">
        <h6>Event</h6>
        <ul class="footer-links">
          <li><a href="#">Seminar</a></li>
          <li><a href="#">Application Notes</a></li>
          <li><a href="#">Cover Story</a></li>
        </ul>
      </div>
    </div>
    <hr>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-6 col-xs-12">
        <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
          <a href="#">Scanfcode</a>.
        </p>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <ul class="social-icons">
          <li>
            <a class="facebook" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook"
                viewBox="0 0 16 16">
                <path
                  d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
              </svg>
            </a>
          </li>
          <li>
            <a class="line" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-line"
                viewBox="0 0 16 16">
                <path
                  d="M8 0c4.411 0 8 2.912 8 6.492 0 1.433-.555 2.723-1.715 3.994-1.678 1.932-5.431 4.285-6.285 4.645-.83.35-.734-.197-.696-.413l.003-.018.114-.685c.027-.204.055-.521-.026-.723-.09-.223-.444-.339-.704-.395C2.846 12.39 0 9.701 0 6.492 0 2.912 3.59 0 8 0ZM5.022 7.686H3.497V4.918a.156.156 0 0 0-.155-.156H2.78a.156.156 0 0 0-.156.156v3.486c0 .041.017.08.044.107v.001l.002.002.002.002a.154.154 0 0 0 .108.043h2.242c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157Zm.791-2.924a.156.156 0 0 0-.156.156v3.486c0 .086.07.155.156.155h.562c.086 0 .155-.07.155-.155V4.918a.156.156 0 0 0-.155-.156h-.562Zm3.863 0a.156.156 0 0 0-.156.156v2.07L7.923 4.832a.17.17 0 0 0-.013-.015v-.001a.139.139 0 0 0-.01-.01l-.003-.003a.092.092 0 0 0-.011-.009h-.001L7.88 4.79l-.003-.002a.029.029 0 0 0-.005-.003l-.008-.005h-.002l-.003-.002-.01-.004-.004-.002a.093.093 0 0 0-.01-.003h-.002l-.003-.001-.009-.002h-.006l-.003-.001h-.004l-.002-.001h-.574a.156.156 0 0 0-.156.155v3.486c0 .086.07.155.156.155h.56c.087 0 .157-.07.157-.155v-2.07l1.6 2.16a.154.154 0 0 0 .039.038l.001.001.01.006.004.002a.066.066 0 0 0 .008.004l.007.003.005.002a.168.168 0 0 0 .01.003h.003a.155.155 0 0 0 .04.006h.56c.087 0 .157-.07.157-.155V4.918a.156.156 0 0 0-.156-.156h-.561Zm3.815.717v-.56a.156.156 0 0 0-.155-.157h-2.242a.155.155 0 0 0-.108.044h-.001l-.001.002-.002.003a.155.155 0 0 0-.044.107v3.486c0 .041.017.08.044.107l.002.003.002.002a.155.155 0 0 0 .108.043h2.242c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157H11.81v-.589h1.525c.086 0 .155-.07.155-.156v-.56a.156.156 0 0 0-.155-.157H11.81v-.589h1.525c.086 0 .155-.07.155-.156Z" />
              </svg>
            </a>
          </li>
          <li>
            <a class="yt" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-youtube"
                viewBox="0 0 16 16">
                <path
                  d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
              </svg>
            </a>
          </li>
          <li>
            <a class="tt" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
              </svg>
            </a>
          </li>
          <li>
            <a class="geo" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
              class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<style>
  .site-footer {
    background-color: #143a6f;
    padding: 45px 0 20px;
    font-size: 15px;
    line-height: 24px;
    color: #fff;
  }

  .site-footer hr {
    border-top-color: #bbb;
    opacity: 0.5
  }

  .site-footer hr.small {
    margin: 20px 0
  }

  .site-footer h6 {
    color: #fff;
    font-size: 16px;
    text-transform: uppercase;
    margin-top: 5px;
    letter-spacing: 2px
  }

  .site-footer a {
    color: #ffffff;
  }

  .site-footer a:hover {
    color: #4683ff;
    text-decoration: none;
  }

  .footer-links {
    padding-left: 0;
    list-style: none
  }

  .footer-links li {
    display: block
  }

  .footer-links a {
    color: #fff
  }

  .footer-links a:active,
  .footer-links a:focus,
  .footer-links a:hover {
    color: #3366cc;
    text-decoration: none;
  }

  .footer-links.inline li {
    display: inline-block
  }

  .site-footer .social-icons {
    text-align: right
  }

  .site-footer .social-icons a {
    width: 40px;
    height: 40px;
    line-height: 40px;
    margin-left: 6px;
    margin-right: 0;
    border-radius: 100%;
    background-color: #fff
  }

  .copyright-text {
    margin: 0
  }

  @media (max-width:991px) {
    .site-footer [class^=col-] {
      margin-bottom: 30px
    }
  }

  @media (max-width:767px) {
    .site-footer {
      padding-bottom: 0
    }

    .site-footer .copyright-text,
    .site-footer .social-icons {
      text-align: center
    }
  }

  .social-icons {
    padding-left: 0;
    margin-bottom: 0;
    list-style: none
  }

  .social-icons li {
    display: inline-block;
    margin-bottom: 4px
  }

  .social-icons li.title {
    margin-right: 15px;
    text-transform: uppercase;
    color: #96a2b2;
  }

  .social-icons a {
    display: grid;
    place-items: center;
    background-color: #eceeef;
    color: #818a91;
    font-size: 16px;
    display: inline-block;
    width: 44px;
    height: 44px;
    text-align: center;
    border-radius: 100%;
    -webkit-transition: all .2s linear;
    -o-transition: all .2s linear;
    transition: all .2s linear
  }

  .social-icons a:active,
  .social-icons a:focus,
  .social-icons a:hover {
    color: #fff;
    background-color: #29aafe
  }

  .social-icons.size-sm a {
    height: 34px;
    width: 34px;
  }

  .social-icons a.facebook:hover {
    background-color: #3b5998
  }

  .social-icons a.line:hover {
    background-color: #36e64d
  }

  .social-icons a.tt:hover {
    background-color: black
  }

  .social-icons a.yt:hover {
    background-color: #e41111
  }

  .social-icons a.geo:hover {
    background-color: #e41111
  }

  @media (max-width:767px) {
    .social-icons li.title {
      display: block;
      margin-right: 0;
      font-weight: 600
    }
  }
</style>
<script>
  const action = document.querySelector('.action');
  action.addEventListener('click', () => {
    action.classList.toggle('active')
  })
</script>

</html>