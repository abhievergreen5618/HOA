
        @extends('layouts.master')
        
        @section('content')

        <div class="content-wrapper">
            <div class="container-fluid">
               
                               <section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<div class="addItem">
                        <a href="{{ route('enquiry-list') }}"><button class="btn btn-primary" style="display:flex;"><i class="fa-solid fa-arrow-left" style="padding:8px 2px;"></i><p style="margin:0px; padding:4px;">Back to Enquiry List</p></button></a>
                    </div>
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
<h3 class="card-title">Enquiry Data</h3>
</div>
                    <form >
                     @if($item)
                        <div class="card-body">
                        <div class="row">
                            <div class="col inputItem">
                                <label>Name</label>
                                <input type="text" class="form-control"  value="{{ $item->name }}" disabled>
                            </div>
                            <div class="col inputItem">
                                <label>Email ID</label>
                                <input type="text" class="form-control"  value="{{ $item->email }}" disabled>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col inputItem">
                                <label>Phone Number</label>
                                <input type="text" class="form-control"  value="{{ $item->phone }}" disabled>
                            </div>
                           
                        </div>
                        <br>
                         <div class="row">
                            
                             <div class="col inputItem">
                                <a href="{{ route('mail', ['id' => $item->id]) }}"
                                        class="btn btn-primary btn-sm actionButton" >Send Mail<a>
                            </div>
                           
                        </div>

                       <style type="text/css">
                           a.btn.btn-primary.btn-sm.actionButton {
                                float: left;
                            }
                       </style>
    @else
        <p>Not found</p>
    @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="container-fluid">
<div class="row">

<div class="col-md-12">

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Searched HOA Data</h3>
</div>
                    <form >
 @if($hoaitem)
                        <div class="card-body">
                        <div class="row">
                            <div class="col inputItem">
                                <label>HOA Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $hoaitem->name }}" disabled>
                            </div>
                            <div class="col inputItem">
                                <label>Product URL</label>
                                <input type="text" class="form-control" name="product_url"
                                    value="{{ $hoaitem->product_url }}" disabled>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col inputItem">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" value="{{ $hoaitem->address }}" disabled>
                            </div>
                           
                           <div class="col inputItem">
                                <label>City</label>
                                <input type="text" class="form-control" name="address" value="{{ $hoaitem->city }}" disabled>
                            </div>
                            
                        </div>
                        <br>

                        <div class="row">
                            <div class="col inputItem">
                                <label>State</label>
                                <input type="text" class="form-control" name="address" value="{{ $hoaitem->state }}" disabled>
                            </div>
                           
                           <div class="col inputItem">
                                <label>Zip</label>
                                <input type="text" class="form-control" name="address" value="{{ $hoaitem->zip }}" disabled>
                            </div>
                            
                        </div>
                        <br>
                        
                        <div class="row">
                            <div class="col inputItem">
                                <label>County</label>
                                <input type="text" class="form-control" name="address" value="{{ $hoaitem->county }}" disabled>
                            </div>
                           
                           <div class="col inputItem">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="address" value="{{ $hoaitem->phone }}" disabled>
                            </div>
                            
                        </div>
                        <br>
                        
                        <div class="row">
                            <div class="col inputItem">
                                <label>Contact Person</label>
                                <input type="text" class="form-control" name="address" value="{{ $hoaitem->contact_person }}" disabled>
                            </div>
                           
                           <div class="col inputItem">
                                <label>Email</label>
                                <input type="text" class="form-control" name="address" value="{{ $hoaitem->email }}" disabled>
                           </div>
                            
                        </div>
                        <br>
                        
                        <div class="row">
                           
                           
                           <div class="col inputItem">
                                <label>Dealer Name</label>
                                <input type="text" class="form-control" name="address" value="{{ $hoaitem->dealer_name }}" disabled>
                            </div>
                             <div class="col inputItem">
                                 </div>
                        </div>
                        <br>
                        
                        </div>
                        
    @else
        <p>Not found</p>
    @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
    
    @endsection