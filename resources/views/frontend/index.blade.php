@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
   <!-- <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-home"></i> @lang('navs.general.home')
                </div>
                <div class="card-body">
                    @lang('strings.frontend.welcome_to', ['place' => app_name()])
                </div>-->
            <!--</div>-->
            <!--card-->
       <!-- </div>-->
        <!--col-->
   <!-- </div>-->
    <!--row-->

   <!-- <div class="row mb-4">
        <div class="col">
            <example-component></example-component>
        </div>
        
    </div>-->
    <!--row-->

   <!-- <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <i class="fab fa-font-awesome-flag"></i> Font Awesome @lang('strings.frontend.test')
                </div>
                <div class="card-body">
                    <i class="fas fa-home"></i>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-pinterest"></i>
                </div>
                
            </div>
        </div>
        </div>-->
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!--<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  .aboutimg{
      width: 100%;
      height:250px;
  }
  </style>-->
    </head>
<body>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src='images/soft3.webp' alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Python</h3>
        <p>Welcome to Artificial Intelligence!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/soft4.webp" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Javascript</h3>
        <p>Love to Code!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/soft5.webp" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>React</h3>
        <p>We love React-native!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
        <div class="py-5">
            <h2 class="text-center"> About Us </h2>
        </div>
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="images/soft2.webp" class="img-fluid aboutimg" style="height:150px , width:150px" >
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h3>Helm Infosystem</h2><br>
                <p>Welcome to helm infosystem UI admin panel,this is the Administrator application, also known as the Back-end, 
                    Admin Panel or Control Panel,  where administrators and other site officials with appropriate 
                    privileges can manipulate the look of a different layouts and panels .
                     There are many tasks which can be done with the administrator interface </p><br>
                <a href="https://helminfosystem.com/"> Check More </a>
            </div>
        </div>  
        </div>        
</section>

<footer class="app-footer">
    <div class="text-center p-3" style="background-color: #94b8b8">
        <strong>@lang('labels.general.copyright') &copy; {{ date('Y') }}
            <a href="http://laravel-boilerplate.com">
                Helm Infosystem
            </a>
        </strong> @lang('strings.backend.general.all_rights_reserved')
    </div>

    <!--<div class="ml-auto">Theme by <a href="http://coreui.io">HelmUI</a></div>-->
</footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

@endsection

