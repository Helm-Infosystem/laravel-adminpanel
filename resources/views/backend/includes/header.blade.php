<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="{{ asset('img/backend/brand/logo.png') }}" width="158" height="55" alt="Helm Infosystem">
        <img class="navbar-brand-minimized" src="{{ asset('img/backend/brand/favicon.png') }}" width="60" height="45" alt="Helm Infosystem">
        
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
            <a class="nav-link" href="{{ route('frontend.index') }}"><i class="fas fa-home"></i></a>
        </li>

        <li class="nav-item px-3">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">@lang('navs.frontend.dashboard')</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href=""><span>Language(EN)</span></a>
        </li>

        @if(config('locale.status') && count(config('locale.languages')) > 1)
            <li class="nav-item px-3 dropdown">
               <!--<a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="d-md-down-none">@lang('menus.language-picker.language') ({{ strtoupper(app()->getLocale()) }})</span>
                </a>-->
                

                @include('includes.partials.lang')
            </li>
        @endif
    </ul>

    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <!--<img src="{{ $logged_in_user->picture }}" class="img-avatar" alt="{{ $logged_in_user->email }}">-->
            <span class="d-md-down-none">{{ $logged_in_user->full_name }}</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
              <strong>Account</strong>
            </div>
            <a class="dropdown-item" href="{{ route('frontend.auth.logout') }}">
                <i class="fas fa-lock"></i> @lang('navs.general.logout')
            </a>
          </div>
        </li>
    </ul>

    <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
            </button>
    <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
    </button>
</header>
