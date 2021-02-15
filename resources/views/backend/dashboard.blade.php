@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <!--<div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>@lang('strings.backend.dashboard.welcome') {{ $logged_in_user->name }}!</strong>
                </div>-->
                <!--card-header-->
                <!--<div class="card-body">
                    {!! __('strings.backend.welcome') !!}
                </div>-->
                <!--card-body-->
            <!--</div>-->
            <!--card-->
        <!--</div>-->
        <!--col-->
    <!--</div>-->
    <!--row-->
    <div class="breadcrumbs">
            
            
    </div>
    <div class="content mt-3">
        <div class="row">
            <div class="col">
            <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"> <i class='fas fa-file-alt' style='font-size:36px;color:green'></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Post</div>
                                <div class="stat-digit">1,012</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
            <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class='fas fa-user-alt' style='font-size:36px;color:#e67300'></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Users</div>
                                <div class="stat-digit">70</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
            <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class='fas fa-comment-dots' style='font-size:36px;color:#cccc00'></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Comments</div>
                                <div class="stat-digit">661</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
            <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class='fas fa-thumbs-up' style='font-size:36px;color:#0080ff'></i></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Likes</div>
                                <div class="stat-digit">970</div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>

        <div class="row">
        <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">
                                Recent Blogs
                            </strong>
                        
            
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Post</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Nature</td>
                            <td>@Facebook</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Travel</td>
                            <td>@Instagram</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>Photography</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
                </div>
                </div>
                </div>
            </div> 
        </div>    

    </div>

        
        
@endsection
