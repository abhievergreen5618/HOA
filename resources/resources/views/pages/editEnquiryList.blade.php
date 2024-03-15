
        @extends('layouts.master')
        
        @section('content')

        <div class="content-wrapper">
                            <section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1></h1>
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
<h3 class="card-title">Edit Board Member</h3>
</div>

                    <form method="post" action="{{ url('update-enquiry/' . $item->id) }}">

                        @csrf
                        @method('PUT')
                        <div class="card-body">
                        <div class="row">
                            <div class="col inputItem">
                                <p class="formText">Name</p>
                                <input type="text" class="form-control" placeholder="name" name="name"
                                    value="{{ $item->name }}">
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col inputItem">
                                <p class="formText">Email</p>
                                <input type="text" class="form-control" placeholder="email" name="email"
                                    value="{{ $item->email }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col inputItem">
                                <p class="formText">Phone  No.</p>
                                <input type="text" class="form-control" placeholder="phone no" name="phone" value="{{ $item->phone }}">
                            </div>
                            
                        </div>
                        <br>

                        <div class="row">
                            <div class="col ">
                                <button class="add-btn btn btn-primary" type="submit">Update</button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    @endsection