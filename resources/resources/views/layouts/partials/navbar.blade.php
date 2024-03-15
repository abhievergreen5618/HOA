
<nav class="main-header navbar navbar-expand navbar-white navbar-light">

<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="{{ route('dashboard') }}" class="nav-link">Home</a>
</li>

</ul>

<ul class="navbar-nav ml-auto">



<li class="nav-item">
<a class="nav-link" data-widget="fullscreen" href="#" role="button">
<i class="fas fa-expand-arrows-alt"></i>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
<i class="fas fa-th-large"></i>
</a>
</li>

<li class="nav-item dropdown user user-menu">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              
               @if(Auth::check()) <!-- Check if the user is authenticated -->
               
    @if(Auth::user()->image)
        @php
            $imagePathArray = json_decode(Auth::user()->image, true);
            $imagePath = isset($imagePathArray[0]) ? $imagePathArray[0] : null;
        @endphp

        @if($imagePath)
            <img src="{{ asset($imagePath) }}" alt="profile_image" class="user-image">
        @endif
    @endif
    


        <span class="hidden-xs">{{Auth::user()->name}}</span>
    </a>
    <ul class="dropdown-menu" style="left: inherit; right: 0px;">
        <li class="user-header">
              @if(Auth::user()->image)
    @php
        $imagePathArray = json_decode(Auth::user()->image, true);
        $imagePath = isset($imagePathArray[0]) ? $imagePathArray[0] : null;
    @endphp

    @if($imagePath)
        <img src="{{ asset($imagePath) }}" alt="profile_image" class="img-circle">
    @endif
@endif
<p>{{Auth::user()->name}}</p>
        </li>
        <div class="dropdown-divider"></div>
        <li class="text-center">{{Auth::user()->email}}</li>
        <div class="dropdown-divider"></div>
        <li class="user-footer">
            <div class="float-left">
                <a href="{{ route('setting') }}" class="btn btn-primary btn-flat">Profile</a>
            </div>
            <div class="float-right">
                <a href="{{ route('logout') }}" class="btn btn-danger btn-flat" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
    @else

    <script type="text/javascript">window.location.href='/login';</script>
    
@endif
</li>


</ul>
</nav>



<aside class="control-sidebar control-sidebar-dark">
    <!--<div class="p-3 control-sidebar-content os-host os-theme-light os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition os-host-overflow os-host-overflow-y" style="height:150px;">-->
    <!--    <div class="os-content" style="padding: 16px; height: 100%; width: 100%;">-->
    <!--        <h5>Customize AdminLTE</h5>-->
    <!--        <hr class="mb-2">-->
    <!--        <div class="mb-4">-->
    <!--            <input type="checkbox" value="1" class="mr-1">-->
    <!--            <span>Dark Mode</span>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
</aside>


