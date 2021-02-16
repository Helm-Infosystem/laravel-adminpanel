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
<!DOCTYPE html>
<html>
    <head>
        <style>

.bar-graph {
  padding: 0;
  width: 100%;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-align-items: flex-end;
      -ms-flex-align: end;
          align-items: flex-end;
  height: 425px;
  margin: 0;
}

.bar-graph li {
  display: block;
  padding: 1.5625rem 0;
  position: relative;
  text-align: center;
  vertical-align: bottom;
  border-radius: 4px 4px 0 0;
  max-width: 20%;
  height: 100%;
  margin: 0 1.8% 0 0;
  -webkit-flex: 1 1 15%;
      -ms-flex: 1 1 15%;
          flex: 1 1 15%;
}

.bar-graph .bar-graph-axis {
  -webkit-flex: 1 1 8%;
      -ms-flex: 1 1 8%;
          flex: 1 1 8%;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-justify-content: space-between;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.bar-graph .bar-graph-label {
  margin: 0;
  background-color: none;
  color: #8a8a8a;
  position: relative;
}

@media print, screen and (min-width: 40em) {
  .bar-graph .bar-graph-label:before, .bar-graph .bar-graph-label:after {
    content: "";
    position: absolute;
    border-bottom: 1px dashed #8a8a8a;
    top: 0;
    left: 0;
    height: 50%;
    width: 20%;
  }
}

@media print, screen and (min-width: 40em) and (min-width: 64em) {
  .bar-graph .bar-graph-label:before, .bar-graph .bar-graph-label:after {
    width: 30%;
  }
}

@media print, screen and (min-width: 40em) {
  .bar-graph .bar-graph-label:after {
    left: auto;
    right: 0;
  }
}

.bar-graph .percent {
  letter-spacing: -3px;
  opacity: 0.4;
  width: 100%;
  font-size: 1.875rem;
  position: absolute;
}

@media print, screen and (min-width: 40em) {
  .bar-graph .percent {
    font-size: 3.875rem;
  }
}

.bar-graph .percent span {
  font-size: 1.875rem;
}

.bar-graph .description {
  font-weight: 800;
  opacity: 0.5;
  text-transform: uppercase;
  width: 100%;
  font-size: 14px;
  bottom: 20px;
  position: absolute;
  font-size: 1rem;
  overflow: hidden;
}

.bar-graph .bar.primary {
  border: 1px solid #1779ba;
  background: linear-gradient(#2196e3, #1779ba 70%);
}

.bar-graph .bar.secondary {
  border: 1px solid #767676;
  background: linear-gradient(#909090, #767676 70%);
}

.bar-graph .bar.success {
  border: 1px solid #3adb76;
  background: linear-gradient(#65e394, #3adb76 70%);
}

.bar-graph .bar.warning {
  border: 1px solid #ffae00;
  background: linear-gradient(#ffbe33, #ffae00 70%);
}

.bar-graph .bar.alert {
  border: 1px solid #cc4b37;
  background: linear-gradient(#d67060, #cc4b37 70%);
}


        </style>
    </head>
<body>
      

    <div class="breadcrumbs">
            
            
    </div>

    <div class="content mt-3">
        <!--dashboard post-->
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
        <!--dashboard post-->
        <!--bar graph-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">
                            Blogs Per-Month
                        </strong>
                        <ul class="bar-graph">
                <li class="bar-graph-axis">
                    <div class="bar-graph-label">100%</div>
                    <div class="bar-graph-label">80%</div>
                    <div class="bar-graph-label">60%</div>
                    <div class="bar-graph-label">40%</div>
                    <div class="bar-graph-label">20%</div>
                    <div class="bar-graph-label">0%</div>
                </li>
                <li class="bar primary" style="height: 44%;" title="44">
                    <div class="percent">44<span>%</span></div>
                    <div class="description">First Week </div>
                </li>
                <li class="bar secondary" style="height: 90%;" title="90">
                    <div class="percent">90<span>%</span></div>
                    <div class="description">Second week </div>
                </li>
                <li class="bar success" style="height: 69%;" title="69">
                    <div class="percent">69<span>%</span></div>
                    <div class="description">Third week </div>
                </li>
                <li class="bar warning" style="height: 57%;" title="57">
                    <div class="percent">57<span>%</span></div>
                    <div class="description">Fourth week </div>
                </li>
                <li class="bar alert" style="height: 76%;" title="76">
                    <div class="percent">76<span>%</span></div>
                    <div class="description">Last Month</div>
                </li>
            </ul>
                    </div>
                </div>
            </div>
        </div>





        <!--bar graph -->
        
        <!--Table for recent blog post-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">
                            Recent Post By:
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
        <!--Table for recent blog post-->   

        

    </div>

</body>
</html>
@endsection



