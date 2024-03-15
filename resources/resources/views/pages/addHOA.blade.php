
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
<li class="breadcrumb-item active">HOA</li>
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
<h3 class="card-title">Add HOA</h3>
</div>

                    <form method="post" action="{{ url('add-hoa') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                            <div class="form-group ">
                                <p class="formText">HOA Name</p>
                                <input type="text" class="form-control"  name="name">
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group ">
                                <p class="formText">Product URL 1</p>
                                <input type="url" class="form-control"  name="product_url">
                            </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                            <div class="form-group ">
                                <p class="formText">Product URL 2</p>
                                <input type="url" class="form-control"  name="product_url2">
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group ">
                                <p class="formText">Product URL 3</p>
                                <input type="url" class="form-control"  name="product_url3">
                            </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                            <div class="form-group ">
                                <p class="formText">Product URL 4</p>
                                <input type="url" class="form-control"  name="product_url4">
                            </div>
                            </div>
                            
                            <div class="col-sm-6">
                            <div class="form-group ">
                                <p class="formText">Address</p>
                                <input type="text" class="form-control" name="address">
                            </div>
                            </div>
                            
                            
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                            <div class="form-group ">
                                <p class="formText">City</p>
                                <input type="text" class="form-control"  name="city">
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group ">
                                <p class="formText">State</p>
                                <input type="text" class="form-control" name="state">
                            </div>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                            <div class="form-group ">
                                <p class="formText">Zip Code</p>
                                <input type="text" class="form-control"  name="zip">
                            </div>
                            </div>
                            <div class="col-sm-6">
                        <div class="form-group ">
                                <p class="formText">County</p>
                                <input type="text" class="form-control" name="county">
                            </div>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                            <div class="form-group ">
                                <p class="formText">HOA Contact Person's name</p>
                                <input type="text" class="form-control" name="contact_person">
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group ">
                                <p class="formText">Phone</p>
                                <input type="text" class="form-control" name="phone">
                            </div>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                            <div class="form-group ">
                            <p class="formText">Email</p>
                                <input type="text" class="form-control" name="email">
                           </div>
                           </div>
                            <div class="col-sm-6">
                            <div class="form-group ">
                                <p class="formText">Dealer Name</p>
                                <input type="text" class="form-control" name="dealer_name">
                            </div>
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                            <div class="form-group ">
                            <p class="formText">Upload Image</p>
                                <input type="file" class="form-control" name="image">
                           </div>
                           </div>
                            <div class="col-sm-6">
                            
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
    </div>
  
  @endsection
  