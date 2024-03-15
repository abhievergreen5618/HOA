
        @extends('layouts.master')
        
        @section('content')

        <div class="content-wrapper">

            <div class="container-fluid">
                <div class="row">

                    <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1 class="m-0">Dashboard</h1>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $hoaCount }}</h3>
                                <p> HOA</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">

                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $userhoacount }}</h3>
                                <p>Not Present in DB</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                        </div>
                    </div>

                   
            </div>
        </div>

    </div>
   
   @endsection