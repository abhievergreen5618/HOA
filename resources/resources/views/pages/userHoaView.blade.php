
        @extends('layouts.master')
        
        @section('content')
<!-- Add the Lightbox CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

<!-- Add jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Add the Lightbox JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

        <div class="content-wrapper">
            <div class="container-fluid">
               
                               <section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">

<div class="addItem">
                        <a href="{{ route('user-hoa-list') }}"><button class="btn btn-primary" style="display:flex;"><i class="fa-solid fa-arrow-left" style="padding:8px 2px;"></i><p style="margin:0px; padding:4px;">Back to User HOA List</p></button></a>
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
<h3 class="card-title">HOA</h3>
</div>
                    <form method="post" action="{{ url('update-hoa/' . $item->id) }}">

                        @csrf
                        @method('PUT')
                        <div class="card-body">
                        <div class="row">
                            <div class="col inputItem">
                                <label>Customer Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $item->name }}" disabled>
                            </div>
                             <div class="col inputItem">
                                <label>Customer Email Address</label>
                                <input type="text" class="form-control" name="email" value="{{ $item->email }}" disabled>
                            </div>
                            
                           
                        </div>
                        <br>

                        <div class="row">
                           
                             <div class="col inputItem">
                                <label>HOA Name</label>
                                <input type="text" class="form-control" name="hoa_name" value="{{ $item->hoa_name }}" disabled>
                            </div>
                            <div class="col inputItem">
                                <label>HOA Contact Person</label>
                                <input type="text" class="form-control" name="contact_person" value="{{ $item->contact_person }}" disabled>
                            </div>
                           
                        </div>
                        <br>

                        <div class="row">
                             <div class="col inputItem">
                                <label>HOA Phone Number</label>
                                <input type="text" class="form-control" name="phone" value="{{ $item->phone }}" disabled>
                            </div>
                            <div class="col inputItem">
                                <label>City</label>
                                <input type="text" class="form-control" name="city" value="{{ $item->city }}" disabled>
                            </div>
                            
                        </div>
                        <br>

                        <div class="row">
                            <div class="col inputItem">
                                <label>State</label>
                                <input type="text" class="form-control" name="state" value="{{ $item->state }}" disabled>
                            </div>
                            
                            <div class="col inputItem">
                                <label>Zip</label>
                                <input type="text" class="form-control" name="zip"
                                    value="{{ $item->zip }}" disabled>
                            </div>
                            
                        </div>
                        <br>
                        
                        <div class="row">
                           
                            <div class="col inputItem">
                                <label>Comments</label>
                                <textarea class="form-control" name="comments" disabled style="height:100px;">{{ $item->comments }}</textarea>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col inputItem">
                                <label>Uploaded Images</label>
                                <div class="uk-lightbox"> @if(is_array($item->photos))
        @foreach ($item->photos as $photo)
            <a href="{{ asset($photo) }}" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img src="{{ asset($photo) }}" alt="UserHOA Photo" class="thumbnail photos"  width="100px"></a>
        @endforeach
    @else
        <a href="{{ asset($item->photos) }}" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img src="{{ asset($item->photos) }}" alt="UserHOA Photo"  class="thumbnail"></a>
    @endif
    </div>
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