
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

                    <form method="post" action="{{ url('update/' . $item->id) }}">

                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                            <div class="col inputItem">
                                <p class="formText">County</p>
                                <input type="text" class="form-control" placeholder="County" name="county"
                                    value="{{ $item->county }}">
                            </div>
                            <div class="col inputItem">
                                <p class="formText">Community Name</p>
                                <input type="text" class="form-control" placeholder="Community name" name="community"
                                    value="{{ $item->community }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col inputItem">
                                <p class="formText">HOA or NON</p>
                                <input type="text" class="form-control" placeholder="HOA or NON" name="hoa_or_non"
                                    value="{{ $item->hoa_or_non }}">
                            </div>
                            <div class="col inputItem">
                                <p class="formText">Status & Type</p>
                                <input type="text" class="form-control" placeholder="Community name" name="status_type"
                                    value="{{ $item->status_type }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col inputItem">
                                <p class="formText">Community Type</p>
                                <input type="text" class="form-control" placeholder="HOA or NON" name="community_type" value="{{ $item->community_type }}">
                            </div>
                            <div class="col inputItem">
                                <p class="formText">Community Legal Name</p>
                                <input type="text" class="form-control" placeholder="Community name"
                                    name="community_legal_name" value="{{ $item->community_legal_name }}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col inputItem">
                                <p class="formText">Also Known</p>
                                <input type="text" class="form-control" placeholder="Community name" name="also_known" value="{{ $item->also_known }}">
                            </div>
                            <div class="col inputItem">
                                <p class="formText">Original Corporation Filing Date</p>
                                <input type="text" class="form-control" placeholder="HOA or NON" name="date" value="{{ $item->date }}">
                            </div>

                        </div>

                        <div class="row">

                            <div class="col inputItem">
                                <p class="formText">Community ID Number</p>
                                <input type="text" class="form-control" placeholder="Community name" name="id_number" value="{{ $item->id_number }}">
                            </div>
                            <div class="col inputItem">
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
   