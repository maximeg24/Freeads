@extends('layouts/app')

@section('content')
<!DOCTYPE html>
<div style="text-align: center;">
<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('svg\Main_1.png') }}" alt="First slide">
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('svg\Main_2.png') }}" alt="First slide">
    </div>
    <!--/Second slide-->
    <!--Third slide-->
    <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('svg\Main_3.png') }}" alt="First slide">
    </div>
    <!--/Third slide-->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
@if (session()->has('success'))
    <div class="alert alert-succes">
        {{ session()->get('success') }}
    </div>
@endif
</div>

<nav class="navbar navbar-expand-xl navbar-dark bg-dark">
  <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown06" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
        <div class="dropdown-menu" aria-labelledby="dropdown06">
          <a class="dropdown-item" href="{{ asset('Not_work/index.html') }}">All Categories</a>
          <a class="dropdown-item" href="{{ asset('Not_work/index.html') }}">Vehicule</a>
          <a class="dropdown-item" href="{{ asset('Not_work/index.html') }}">Property</a>
          <a class="dropdown-item" href="{{ asset('Not_work/index.html') }}">Loisirs</a>
          <a class="dropdown-item" href="{{ asset('Not_work/index.html') }}">Animals</a>
          <a class="dropdown-item" href="{{ asset('Not_work/index.html') }}">Fashion</a>
          <a class="dropdown-item" href="{{ asset('Not_work/index.html') }}">Multimedia</a>
          <a class="dropdown-item" href="{{ asset('Not_work/index.html') }}">Furniture</a>
          <a class="dropdown-item" href="{{ asset('Not_work/index.html') }}">Professional Equipment</a>
          <a class="dropdown-item" href="{{ asset('Not_work/index.html') }}">Others</a>
        </div>
      </li>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown06" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Regions</a>
        <div class="dropdown-menu" aria-labelledby="dropdown06">
          <a class="dropdown-item" href="{{ asset('Not_work/index.html') }}">All Regions</a>
          <a class="dropdown-item" href="{{ asset('Not_work/index.html') }}">Auvergne Rhône Alpes</a>
          <a class="dropdown-item" href="{{ asset('Not_work/index.html') }}">Bourgogne-Franche-Comté</a>
          <a class="dropdown-item" href="{{ asset('Not_work/index.html') }}">Bretagne</a>
          <a class="dropdown-item" href="{{ asset('Not_work/index.html') }}">Centre-Val de Loire</a>
          <a class="dropdown-item" href="{{ asset('Not_work/index.html') }}">Corse</a>
          <a class="dropdown-item" href="{{ asset('Not_work/index.html') }}">Grand Est</a>
          <a class="dropdown-item" href="{{ asset('Not_work/index.html') }}">Hauts-de-France</a>
          <a class="dropdown-item" href="{{ asset('Not_work/index.html') }}">Île-de-France</a>
          <a class="dropdown-item" href="{{ asset('Not_work/index.html') }}">Normandie</a>
          <a class="dropdown-item" href="{{ asset('Not_work/index.html') }}">Nouvelle-Aquitaine</a>
          <a class="dropdown-item" href="{{ asset('Not_work/index.html') }}">Occitanie</a>
          <a class="dropdown-item" href="{{ asset('Not_work/index.html') }}">Guadeloupe</a>
          <a class="dropdown-item" href="{{ asset('Not_work/index.html') }}">Martinique</a>
          <a class="dropdown-item" href="{{ asset('Not_work/index.html') }}">French Guyana</a>
          <a class="dropdown-item" href="{{ asset('Not_work/index.html') }}">Reunion Island</a>
          <a class="dropdown-item" href="{{ asset('Not_work/index.html') }}">Mayotte</a>
        </div>
      </li>

  <div class="collapse navbar-collapse" id="navbarsExample06">
      <li class="nav-item">
        <a class="nav-link" href=" {{ route('ad.create') }}">Post An Ad</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">Login</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-md-0">
      <a href="{{ asset('Not_work/index.html') }}">
      <input class="form-control" type="text" placeholder="Product name">
      <button type="submit" class="btn btn-outline-success my-2 my-sm-0" style="text-decoration:black">Search</button>
      </a>
    </form>
  </div>
</nav>
<div class="container">
<div class="row">
  <!-- Grid column -->
  <div class="col-lg-4 col-md-12">

    <!--Card Wider-->
    <div class="card card-cascade wider">

      <!--Card image-->
      <div class="view view-cascade overlay">
        <img src="https://img2.leboncoin.fr/ad-image/15722613d54b64d7b539385a01704f37642f0750.jpg" class="card-img-top"
          alt="wider">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
      <!--/Card image-->

      <!--Card content-->
      <div class="card-body card-body-cascade text-center">
        <!--Title-->
        <h4 class="card-title"><strong>Nintendo New 3DS</strong></h4>
        <h5 class="indigo-text"><strong>90€</strong></h5>
        <h6 class="indigo title"><strong>16/11/2020 à 18:23</strong></h6>
        <p class="card-text">Sells white Nintendo New 3DS and its charger.</p>

      </div>
      <!--/.Card content-->

    </div>
    <!--/.Card Wider-->
  </div>
    <!-- Grid column -->
    <div class="col-lg-4 col-md-12">

<!--Card Wider-->
<div class="card card-cascade wider">

  <!--Card image-->
  <div class="view view-cascade overlay">
    <img src="https://img7.leboncoin.fr/ad-image/26bf7214ff5b3a3b56089b6ec8418dbf9f6d4c0e.jpg" class="card-img-top"
      alt="wider">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>
  <!--/Card image-->

  <!--Card content-->
  <div class="card-body card-body-cascade text-center">
    <!--Title-->
    <h4 class="card-title"><strong>Renault Kangoo 1.5 DCI</strong></h4>
    <h5 class="indigo-text"><strong>4 990€</strong></h5>
    <h6 class="indigo title"><strong>16/11/2020 à 18:43</strong></h6>
    <p class="card-text">I sell Renault kangoo 1.5 dci, Year 2010, 142000 kilometres ,First hand.</p>
  </div>
  <!--/.Card content-->

</div>
<!--/.Card Wider-->
</div>
  <!-- Grid column -->
  <div class="col-lg-4 col-md-12">

    <!--Card Wider-->
    <div class="card card-cascade wider">

      <!--Card image-->
      <div class="view view-cascade overlay">
        <img src="https://img5.leboncoin.fr/ad-image/5dcb1f1317dcdab0088cf338483a17c27e247ce1.jpg" class="card-img-top"
          alt="wider">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
      <!--/Card image-->

      <!--Card content-->
      <div class="card-body card-body-cascade text-center">
        <!--Title-->
        <h4 class="card-title"><strong>Superb appartment millau centre</strong></h4>
        <h5 class="indigo-text"><strong>150 000€</strong></h5>
        <h6 class="indigo title"><strong>16/11/2020 à 18:45</strong></h6>
        <p class="card-text">In the centre of Millau, I am selling a superb appartment of 86 m2, fully renovated in 2020.</p>

      </div>
      <!--/.Card content-->

    </div>
    <!--/.Card Wider-->

  </div>
</div>

<div class="container">
<div class="row">
  <!-- Grid column -->
  <div class="col-lg-4 col-md-12">

    <!--Card Wider-->
    <div class="card card-cascade wider">

      <!--Card image-->
      <div class="view view-cascade overlay">
        <img src="https://img6.leboncoin.fr/ad-image/936a6bc13c327b11ae77d116d6ba505d0e748ca7.jpg" class="card-img-top"
          alt="wider">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
      <!--/Card image-->

      <!--Card content-->
      <div class="card-body card-body-cascade text-center">
        <!--Title-->
        <h4 class="card-title"><strong>Masso engine carrier</strong></h4>
        <h5 class="indigo-text"><strong>10 000€</strong></h5>
        <h6 class="indigo title"><strong>16/11/2020 à 19:40</strong></h6>
        <p class="card-text">Masso tilting machine trailer from 1995 3,7t,Very good condition.</p>

      </div>
      <!--/.Card content-->

    </div>
    <!--/.Card Wider-->
  </div>
    <!-- Grid column -->
    <div class="col-lg-4 col-md-12">

<!--Card Wider-->
<div class="card card-cascade wider">

  <!--Card image-->
  <div class="view view-cascade overlay">
    <img src="https://img1.leboncoin.fr/ad-image/00b4fc6d3ab8ec3cd0bb56bcfef717d2cf5dfa8d.jpg" class="card-img-top"
      alt="wider">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>
  <!--/Card image-->

  <!--Card content-->
  <div class="card-body card-body-cascade text-center">
    <!--Title-->
    <h4 class="card-title"><strong>Adult women's bike in good condition</strong></h4>
    <h5 class="indigo-text"><strong>15€</strong></h5>
    <h6 class="indigo title"><strong>16/11/2020 à 19:45</strong></h6>
    <p class="card-text">Adult woman's bike in fairly good condition.</p>

  </div>
  <!--/.Card content-->

</div>
<!--/.Card Wider-->
</div>
  <!-- Grid column -->
  <div class="col-lg-4 col-md-12">

    <!--Card Wider-->
    <div class="card card-cascade wider">

      <!--Card image-->
      <div class="view view-cascade overlay">
        <img src="https://img3.leboncoin.fr/ad-image/ed7460d799d48d2eedc5e24ac2c2f69d84b7968d.jpg" class="card-img-top"
          alt="wider">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
      <!--/Card image-->

      <!--Card content-->
      <div class="card-body card-body-cascade text-center">
        <!--Title-->
        <h4 class="card-title"><strong>Trainers Asics Onitsuka Tiger</strong></h4>
        <h5 class="indigo-text"><strong>30€</strong></h5>
        <h6 class="indigo title"><strong>16/11/2020 à 19:50</strong></h6>
        <p class="card-text">Sell my blue Onitsuka Tiger Mexico Asics.
Used only once indoors, size 45, very comfortable.</p>

      </div>
      <!--/.Card content-->

    </div>
    <!--/.Card Wider-->

  </div>
  <div class="container">

  <div class="row">
  <!-- Grid column -->
  <div class="col-lg-4 col-md-12">

    <!--Card Wider-->
    <div class="card card-cascade wider">

      <!--Card image-->
      <div class="view view-cascade overlay">
        <img src="https://img4.leboncoin.fr/ad-image/b684e881b0db0e7fc2bd46cf0452f951e1f74108.jpg" class="card-img-top"
          alt="wider">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
      <!--/Card image-->

      <!--Card content-->
      <div class="card-body card-body-cascade text-center">
        <!--Title-->
        <h4 class="card-title"><strong>Pack of 4 Mercedes 18 inch wheels and tyres</strong></h4>
        <h5 class="indigo-text"><strong>390€</strong></h5>
        <h6 class="indigo title"><strong>16/11/2020 à 19:49</strong></h6>
        <p class="card-text">2 tyres 225/40 R 18 92 W New <br> 2 tyres 245/35 ZR 18 92 Y New <br> 1 Wheel rim to be rebuilt</p>
      </div>
      <!--/.Card content-->

    </div>
    <!--/.Card Wider-->
  </div>
    <!-- Grid column -->
    <div class="col-lg-4 col-md-12">

<!--Card Wider-->
<div class="card card-cascade wider">

  <!--Card image-->
  <div class="view view-cascade overlay">
    <img src="https://img5.leboncoin.fr/ad-image/0530850b4ca9208ae052d861640c62395fdb2edd.jpg" class="card-img-top"
      alt="wider">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>
  <!--/Card image-->

  <!--Card content-->
  <div class="card-body card-body-cascade text-center">
    <!--Title-->
    <h4 class="card-title"><strong>Rugby, 100 legends</strong></h4>
    <h5 class="indigo-text"><strong>9€</strong></h5>
    <h6 class="indigo title"><strong>16/11/2020 à 19:51</strong></h6>
    <p class="card-text">Rugby, 100 legends - almost new book <br> The most emblematic players in the history of French rugby <br> Release: 2015</p>

  </div>
  <!--/.Card content-->

</div>
<!--/.Card Wider-->
</div>
  <!-- Grid column -->
  <div class="col-lg-4 col-md-12">

    <!--Card Wider-->
    <div class="card card-cascade wider">

      <!--Card image-->
      <div class="view view-cascade overlay">
        <img src="https://img7.leboncoin.fr/ad-image/de183806995df1cb3bea8a13ddcf0ee7baf1cc2e.jpg" class="card-img-top"
          alt="wider">
        <a href="#!">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
      <!--/Card image-->

      <!--Card content-->
      <div class="card-body card-body-cascade text-center">
        <!--Title-->
        <h4 class="card-title"><strong>Electric Motorcycle</strong></h4>
        <h5 class="indigo-text"><strong>50€</strong></h5>
        <h6 class="indigo title"><strong>16/11/2020 à 19:54</strong></h6>
        <p class="card-text">800W electric MOTORCYCLE <br> 800W 4 drills working order OK <br> Chain retracted <br> Little used</p>

      </div>
      <!--/.Card content-->

    </div>
    <!--/.Card Wider-->

  </div>
</div>

</div>

@endsection
