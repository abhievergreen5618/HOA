
        @extends('layouts.master')
        
        @section('content')

        <div class="content-wrapper">
            <div class="container-fluid">
               
                               <section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<div class="addItem">
                        <a href="{{ route('hoa-list') }}"><button class="btn btn-primary" style="display:flex;"><i class="fa-solid fa-arrow-left" style="padding:8px 2px;"></i><p style="margin:0px; padding:4px;">Back to HOA List</p></button></a>
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
<h3 class="card-title">HOA Data</h3>
</div>
                    <form >

                        <div class="card-body">
                        <div class="row">
                            <div class="col inputItem">
                                <label>HOA Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $item->name }}" disabled>
                            </div>
                            <div class="col inputItem">
                                <label>Product URL 1</label>
                                <input type="text" class="form-control" name="product_url"
                                    value="{{ $item->product_url }}" disabled>
                            </div>
                        </div>
                        <br>
                        
                         <div class="row">
                            <div class="col inputItem">
                                <label>Product URL 2</label>
                                <input type="url" class="form-control" name="product_url2" value="{{ $item->product_url2 }}" disabled>
                            </div>
                            <div class="col inputItem">
                                <label>Product URL 3</label>
                                <input type="url" class="form-control" name="product_url3"
                                    value="{{ $item->product_url3 }}" disabled>
                            </div>
                        </div>
                        <br>



                        <div class="row">
                            <div class="col inputItem">
                                <label>Product URL 4</label>
                                <input type="url" class="form-control" name="product_url4"
                                    value="{{ $item->product_url4 }}" disabled>
                            </div>
                           
                            <div class="col inputItem">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" value="{{ $item->address }}" disabled>
                            </div>
                            
                        </div>
                        <br>

                        <div class="row">
                            <div class="col inputItem">
                                <label>City</label>
                                <input type="text" class="form-control" name="city" value="{{ $item->city }}" disabled>
                            </div>
                            <div class="col inputItem">
                                <label>State</label>
                                <input type="text" class="form-control" name="state" value="{{ $item->state }}" disabled>
                            </div>
                            
                        </div>
                        <br>

                        <div class="row">
                            <div class="col inputItem">
                                <label>Zip</label>
                                <input type="text" class="form-control" name="zip" value="{{ $item->zip }}" disabled>
                            </div>
                            <div class="col inputItem">
                                <label>County</label>
                                <input type="text" class="form-control" name="county" value="{{ $item->county }}" disabled>
                            </div>
                            

                        </div>
                        <br>

                        <div class="row">
                            <div class="col inputItem">
                                <label>Contact Person's Name</label>
                                <input type="text" class="form-control" name="contact_person"
                                    value="{{ $item->contact_person }}" disabled>
                            </div>
                            <div class="col inputItem">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{ $item->phone }}" disabled>
                            </div>
                            
                        </div>
                        <br>

                        <div class="row">
                            <div class="col inputItem">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" value="{{ $item->email }}" disabled>
                            </div>

                            <div class="col inputItem">
                                <label>Dealer Name</label>
                                <input type="text" class="form-control" name="dealer_name" value="{{ $item->dealer_name }}" disabled>
                            </div>
                        </div>

<div class="row">
                            <div class="col inputItem">
                                <label>Uploaded Image</label>
                                <div class="uk-lightbox"> 
             
                                 <a href="{{ asset($item->image) }}" data-lightbox="example-set" ><img src="{{ asset($item->image) }}" alt="UserHOA Photo"  class="thumbnail" style="width:100px;"></a>
    
                                </div>
                            </div>
                        </div>

                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.css" integrity="sha512-Woz+DqWYJ51bpVk5Fv0yES/edIMXjj3Ynda+KWTIkGoynAMHrqTcDUQltbipuiaD5ymEo9520lyoVOo9jCQOCA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js" integrity="sha512-Ixzuzfxv1EqafeQlTCufWfaC6ful6WFqIz4G+dWvK0beHw0NVJwvCKSgafpy5gwNqKmgUfIBraVwkKI+Cz0SEQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script>
        $( document ).ready(function() {
    console.log( "ready!" );
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
});
    
</script>
    
    @endsection