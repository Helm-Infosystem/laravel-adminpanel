@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-header" style="background-color: #e1eaea;">
                    <strong>
                        <i class="fas fa-tachometer-alt"></i> @lang('navs.frontend.dashboard')
                    </strong>
                </div><!--card-header-->

                <div class="card-body">
                    <div class="row">
                        <div class="col col-sm-4 order-1 order-sm-2  mb-4">
                            <div class="card mb-4 bg-light">
                                <img class="card-img-top" src="{{ $logged_in_user->picture }}" alt="Profile Picture">

                                <div class="card-body">
                                    <h4 class="card-title">
                                        {{ $logged_in_user->name }}<br/>
                                    </h4>

                                    <p class="card-text">
                                        <small>
                                            <i class="fas fa-envelope"></i> {{ $logged_in_user->email }}<br/>
                                            <i class="fas fa-calendar-check"></i> @lang('strings.frontend.general.joined') {{ timezone()->convertToLocal($logged_in_user->created_at, 'F jS, Y') }}
                                        </small>
                                    </p>

                                    <p class="card-text">

                                        <a href="{{ route('frontend.user.account')}}" class="btn btn-info btn-sm mb-1">
                                            <i class="fas fa-user-circle"></i> @lang('navs.frontend.user.account')
                                        </a>

                                        @can('view backend')
                                            &nbsp;<a href="{{ route('admin.dashboard')}}" class="btn btn-danger btn-sm mb-1">
                                                <i class="fas fa-user-secret"></i> @lang('navs.frontend.user.administration')
                                            </a>
                                        @endcan
                                    </p>
                                </div>
                            </div>

                            <div class="card mb-4">
                                <div class="card-header" style="background-color: #e1eaea;">
                                <strong> Contact us </strong>
                                </div>
                                <div class="card-body">
                                    <a href="#"> (+91) 9467379226 </a>
                                    <a href="#"> helm.infosystem@gmail.com </a>
                                    <a href="#"> hr@helminfosystem.com</a>
                                </div>
                            </div>
                            <!--card-->
                        </div><!--col-md-4-->

                        <div class="col-md-8 order-2 order-sm-1">
                        <div class="row">
                                <div class="col">
                                    <div class="card mb-4">
                                        <div class="card-header" style="background-color: #e1eaea;">
                                           <strong> App Development </strong>
                                            
                                        </div><!--card-header-->

                                        <div class="card-body">
                                        <img src="images/index3.jpeg" class="img-fluid aboutimg"  >
                                        </div><!--card-body-->
                                    </div><!--card-->
                                </div><!--col-md-6-->

                                <div class="col">
                                    <div class="card mb-4">
                                        <div class="card-header" style="background-color: #e1eaea;">
                                        <strong> UI/UX Design </strong>
                                        </div><!--card-header-->

                                        <div class="card-body">
                                        <img src="images/soft7.webp" class="img-fluid aboutimg"  >
                                        </div><!--card-body-->
                                    </div><!--card-->
                                </div><!--col-md-6-->
                                
                                

                                
                            </div><!--row-->
                            
                            <div class="row">
                                <div class="col">
                                    <div class="card mb-4">
                                        <div class="card-header " style="background-color: #e1eaea;">
                                           <strong> About </strong>
                                        </div><!--card-header-->

                                        <div class="card-body">
                                        <p style="font-family: Georgia, serif;">Provide the best solutions with great team effort
                                        We are one of the emerging software development companies 
                                        which works entrepreneurs and business leaders to execute 
                                        their vision by building innovative products. The team assures 
                                        continuity, confidentiality, quality, transparency and integrity 
                                        in all its engagements.</p>
                                        </div><!--card-body-->
                                    </div><!--card-->
                                </div><!--col-md-6-->
                            </div><!--row-->

                            <div class="row">
                                <div class="col">
                                    <div class="card mb-4">
                                        <div class="card-header" style="background-color: #e1eaea;">
                                        <strong> CRM Solutions </strong>
                                        </div><!--card-header-->

                                        <div class="card-body">
                                        <img src="images/soft9.webp" class="img-fluid aboutimg"  >
                                        </div><!--card-body-->
                                    </div><!--card-->
                                </div><!--col-md-6-->

                                <div class="col">
                                    <div class="card mb-4">
                                        <div class="card-header" style="background-color: #e1eaea;">
                                        <strong> Web Development </strong>
                                        </div><!--card-header-->

                                        <div class="card-body">
                                        <img src="images/soft8.webp" class="img-fluid aboutimg"  >
                                        </div><!--card-body-->
                                    </div><!--card-->
                                </div><!--col-md-6-->
                                
                                

                                
                            </div><!--row-->

                            
                            
                        </div><!--col-md-8-->
                    </div><!-- row -->
                </div> <!-- card-body -->
            </div><!-- card -->
        </div><!-- row -->
    </div><!-- row -->
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
    
</body>

</html>
@endsection
