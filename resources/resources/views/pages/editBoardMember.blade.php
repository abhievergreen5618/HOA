
        @extends('layouts.master')
        
        @section('content')

        <div class="content-wrapper">
            <div class="container-fluid">
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


                    <form method="post" action="{{ url('update-board-member/' . $item->id) }}">

                        @csrf
                        @method('PUT')
                        <div class="card-body">
                        <div class="board-members-container">
                            <div class="row">
                                <div class="col inputItem">
                                    <p class="formText">Board Member</p>
                                    <input type="text" class="form-control" placeholder="board member"
                                        name="board_member" value="{{ $item->board_member }}">
                                </div>
                                <div class="col inputItem">
                                    <p class="formText">Position Held</p>
                                    <input type="text" class="form-control" placeholder="position held"
                                        name="position_held" value="{{ $item->position_held }}">
                                </div>
                            </div>
                        </div>


                        <div class="addressDiv">
                            <div class="row">
                                <div class="col inputItem">
                                    <p class="formText">Property Manager</p>
                                    <input type="text" class="form-control" placeholder="property manager"
                                        name="property_manager" value="{{ $item->property_manager }}">
                                </div>
                                <div class="col inputItem">
                                    <p class="formText">Address</p>
                                    <input type="text" class="form-control" placeholder="address" name="address" value="{{ $item->address }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col inputItem">
                                    <p class="formText">City</p>
                                    <input type="text" class="form-control" placeholder="city" name="city" value="{{ $item->city }}">
                                </div>
                                <div class="col inputItem">
                                    <p class="formText">State</p>
                                    <input type="text" class="form-control" placeholder="state" name="state" value="{{ $item->state }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col inputItem">
                                    <p class="formText">Zip</p>
                                    <input type="text" class="form-control" placeholder="zip" name="zip" value="{{ $item->zip }}">
                                </div>
                                <div class="col inputItem">
                                    <p class="formText">Phone</p>
                                    <input type="text" class="form-control" placeholder="phone" name="phone" value="{{ $item->phone }}">
                                </div>
                            </div>
                        </div>
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
    
    