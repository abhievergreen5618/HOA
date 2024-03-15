<aside class="main-sidebar sidebar-dark-primary elevation-4 sidebarlist">

    <a href="#" class="brand-link">
       
         <img src="{{ asset('images/logoo.png') }}" alt="admin" class="elevation-3" style="max-height: 30px !important;"> 
        
    </a>

    <div class="sidebar">
         @if(Auth::check()) <!-- Check if the user is authenticated -->
               
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              
               @if(Auth::user()->image)
    @php
        $imagePathArray = json_decode(Auth::user()->image, true);
        $imagePath = isset($imagePathArray[0]) ? $imagePathArray[0] : null;
    @endphp

    @if($imagePath)
        <img class="img-circle elevation-2" src="{{ asset($imagePath) }}" alt="profile_image" >
    @endif
@endif

    <!--<img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image"> -->
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    <!--<i class="fa-solid fa-user"></i>-->
                {{Auth::user()->name}}</a>
            </div>
        </div>


        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

<!--                 <li class="nav-item" id="communitynav">-->
<!--                    <a href="#" class="nav-link">-->
<!--                        <i class="fa-solid fa-user-group"></i>-->
<!--                        <p>-->
<!--                            Community-->
<!--                            <i class="right fas fa-angle-left"></i>-->
<!--                        </p>-->
<!--                    </a>-->
<!--                    <ul class="nav nav-treeview">-->
<!--                        <li class="nav-item">-->
<!--                            <a href="{{ route('communities') }}" class="nav-link ">-->
<!--                                <i class="fa-solid fa-plus"></i>-->
<!--                                <p>Add Community</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="nav-item">-->
<!--                            <a href="{{ route('community-list') }}" class="nav-link ">-->
<!--                                <i class="fa-solid fa-clipboard-list"></i>-->
<!--                                <p>Community List</p>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--</li> -->
                
                <li class="nav-item">
                    <a class="nav-link" href="#" >
                           <i class="fa-solid fa-users"></i> 
                       <p>
                           HOA
                            <i class="right fas fa-angle-left"></i>
                       </p> 
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('hoa') }}">
                                <i class="fa-solid fa-plus"></i>
                                <p>Add HOA</p>
                                </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('hoa-list') }}" class="nav-link ">
                                <i class="fa-solid fa-clipboard-list"></i>
                                <p>HOA List</p>
                            </a>
                        </li>
                        <!--<li class="nav-item">-->
                        <!--    <a href="{{ route('user-hoa-list') }}" class="nav-link ">-->
                        <!--        <i class="fa-solid fa-clipboard-list"></i>-->
                        <!--        <p>User HOA List</p>-->
                        <!--    </a>-->
                        <!--</li>-->

                    </ul>
                </li>


                <!--<li class="nav-item menu-option">-->
                <!--    <a href="{{ route('board-member-list') }}" class="nav-link">-->
                <!--           <i class="fa-solid fa-users-rectangle"></i>-->
                <!--        <p>Board Member List</p>-->
                <!--    </a>-->
                <!--</li>-->

                <!--<li class="nav-item menu-option">-->
                <!--    <a href="{{ route('question-list') }}" class="nav-link">-->
                <!--        <i class="fa-regular fa-circle-question"></i>-->
                <!--        <p>Question List</p>-->
                <!--    </a>-->
                <!--</li>-->


                <li class="nav-item menu-option">
                    <a href="{{ route('enquiry-list') }}" class="nav-link">
                        <i class="fa-regular fa-comments"></i>
                        <p>In DB Inquiries</p>
                    </a>
                </li>
                
                 <li class="nav-item menu-option">
                    <a href="{{ route('user-hoa-list') }}" class="nav-link">
                        <i class="fa-regular fa-comments"></i>
                        <p>HOAs Not in DB</p>
                    </a>
                </li>
                
                 <li class="nav-item menu-option">
                    <a href="{{ route('setting') }}" class="nav-link">
                        <i class="fa-solid fa-gear"></i>
                        <p>Setting</p>
                    </a>
                </li>


            </ul>

        </nav>
        
         @else

    <script type="text/javascript">window.location.href='/login';</script>
    
@endif
    </div>

</aside>

