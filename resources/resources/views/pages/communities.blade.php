
        @extends('layouts.master')
        
        @section('content')

        <div class="content-wrapper">
            
            <section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1></h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
<li class="breadcrumb-item active">Community</li>
</ol>
</div>
</div>
</div>
</section>
            
<section class="content">
<div class="container-fluid">
<div class="row">

<div class="col-md-12">

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Add Community</h3>
</div>

 <form method="post" action="{{ url('add-community') }}">
                        @csrf

<div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                            <div class="form-group ">
                                <p class="formText">County</p>
                                <input type="text" class="form-control" name="county">
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group ">
                                <p class="formText">Community Name</p>
                                <input type="text" class="form-control"  name="community">
                            </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                            <div class="form-group ">
                                <p class="formText">HOA or NON</p>
                                <input type="text" class="form-control"  name="hoa_or_non">
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group ">
                                <p class="formText">Status & Type</p>
                                <input type="text" class="form-control"  name="status_type">
                            </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                            <div class="form-group ">
                                <p class="formText">Community Type</p>
                                <input type="text" class="form-control"  name="community_type">
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group ">
                                <p class="formText">Community Legal Name</p>
                                <input type="text" class="form-control"  name="community_legal_name">
                            </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                            <div class="form-group ">
                                <p class="formText">Also Known</p>
                                <input type="text" class="form-control"  name="also_known">
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group ">
                                <p class="formText">Original Corporation Filing Date</p>
                                <input type="text" class="form-control" name="date">
                            </div>
                            </div>
                        </div>

                        <div class="row">
                            
                            <div class="col-sm-6">
                            <div class="form-group ">
                                <p class="formText">Community ID Number</p>
                                <input type="text" class="form-control"  name="id_number">
                            </div>
                            </div>
                            <div class="col inputItem">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col ">
                                <button class="add-btn btn btn-primary" type="submit">Add</button>
                            </div>
                        </div>
</div>
</form>
</div>


        </div>
    </div>
    
    
    @endsection
    
    