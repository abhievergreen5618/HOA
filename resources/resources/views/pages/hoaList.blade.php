
        @extends('layouts.master')
        
        @section('content')
        
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <div class="content-wrapper">
            <section class="content-header">
                    
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<form action="{{ route('search-hoa-data') }}" method="get">
        <div class="input-group input-group-lg">
            <input type="search" class="form-control form-control-sm" name="searchHoaData" placeholder="Search HOA Name Here" value="{{ request('searchHoaData') }}">
            <div class="input-group-append">
                <button type="submit" class="btn btn-lg btn-default" style="background-color:#e9ecef;"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>
         </form>
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


            <div class="container-fluid">
                <div class="addItem" style="display:flex;">
                    <div class="col-md-3">
                        <a href="{{ route('hoa') }}"><button class="btn btn-primary">Add HOA</button></a>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-danger removeAll">Delete Selected Data</button>
                    </div>
                </div>

<div class="row">
<div class="col-12">
<div class="card">

<div class="card-body table-responsive p-0">
<table class="table table-hover text-nowrap">
<thead>
<tr>
    <th><input type="checkbox" id="mainCheckbox"></th>
<th>HOA ID</th>
<th>HOA Name</th>
<th colspan='3'>Action</th>
</tr>
</thead>
<tbody>
    @if(count($hoaData) > 0)
     @foreach ($hoaData as $item)
     @if(request('searchHoaData') && strpos(strtolower($item->name), strtolower(request('searchHoaData'))) !== false)
                             
<tr id="tr_{{ $item->id }}" >
    <td><input type="checkbox" class="checkbox" data-id="{{ $item->id }}"></td>
    <td>{{ $item->id }}</td>
    <td>{{ $item->name }}</td>
     <td>
        <a href="{{ url('view-hoa/' . $item->id) }}" class="btn btn-success btn-sm"><i class="fa-regular fa-eye"></i></a>
        <a href="{{ url('edit-hoa/' . $item->id) }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-pencil"></i></a>
     
        <form method="post" action="{{ route('delete-hoa', ['id' => $item->id]) }}"
           style="display: inline;">
            @csrf
            @method('put')
        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')"><i class="fa-solid fa-trash-can"></i></button>
        </form>
    </td>
</tr>
 @elseif(!request('searchHoaData'))
      
      <tr id="tr_{{ $item->id }}">
    <td><input type="checkbox" class="checkbox" data-id="{{ $item->id }}"></td>
    <td>{{ $item->id }}</td>
    <td>{{ $item->name }}</td>
     <td>
        <a href="{{ url('view-hoa/' . $item->id) }}" class="btn btn-success btn-sm"><i class="fa-regular fa-eye"></i></a>
        <a href="{{ url('edit-hoa/' . $item->id) }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-pencil"></i></a>
     
        <form method="post" action="{{ route('delete-hoa', ['id' => $item->id]) }}"
           style="display: inline;">
            @csrf
            @method('put')
        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')"><i class="fa-solid fa-trash-can"></i></button>
        </form>
    </td>
</tr>
@endif
                            
@endforeach
@else
    <tr>
        <td colspan="3">No data found</td>
    </tr>
@endif
</tbody>
</table>
{!! $hoaData->withQueryString()->links('pagination::bootstrap-5') !!}
               
</div>

</div>

</div>
</div>
</div>


            <!--<div class="container-fluid">-->
            <!--    <div class="CommunityForm">-->
            <!--        <div class="addItem">-->
            <!--            <a href="{{ route('hoa') }}"><button class="btn btn-primary">Add HOA</button></a>-->
            <!--        </div>-->
            <!--        <table class="table table-bordered table-hover dataTable dtr-inline table-head-fixed text-nowrap">-->
            <!--            <thead>-->
            <!--                <tr>-->
            <!--                    <th>Sr. No.</th>-->
            <!--                    <th>HOA Name</th>-->
            <!--                    <th>Product URL</th>-->
            <!--                    <th>Address</th>-->
            <!--                    <th>City</th>-->
            <!--                    <th>State</th>-->
            <!--                    <th>Zip</th>-->
            <!--                    <th>County</th>-->
            <!--                    <th>Contact Person's Name</th>-->
            <!--                    <th>Phone</th>-->
            <!--                    <th>Email</th>-->
            <!--                    <th>Dealer Name</th>-->
            <!--                    <th colspan='3'>Action</th>-->
            <!--                </tr>-->
            <!--            </thead>-->
            <!--            <tbody>-->
            <!--                <tr>-->
            <!--                    @foreach ($hoaData as $item)-->
            <!--                <tr>-->
            <!--                    <td>{{ $item->id }}</td>-->
            <!--                    <td>{{ $item->name }}</td>-->
            <!--                    <td>{{ $item->product_url }}</td>-->
            <!--                    <td>{{ $item->address }}</td>-->
            <!--                    <td>{{ $item->city }}</td>-->
            <!--                    <td>{{ $item->state }}</td>-->
            <!--                    <td>{{ $item->zip }}</td>-->
            <!--                    <td>{{ $item->county }}</td>-->
            <!--                    <td>{{ $item->contact_person }}</td>-->
            <!--                    <td>{{ $item->phone }}</td>-->
            <!--                    <td>{{ $item->email }}</td>-->
            <!--                    <td>{{ $item->dealer_name }}</td>-->
            <!--                    <td>-->
            <!--                        <a href="{{ url('view-hoa/' . $item->id) }}"-->
            <!--                            class="btn btn-success btn-sm"><i class="fa-regular fa-eye"></i></a>-->
            <!--                    </td>-->
            <!--                    <td>-->
            <!--                        <a href="{{ url('edit-hoa/' . $item->id) }}"-->
            <!--                            class="btn btn-primary btn-sm"><i class="fa-solid fa-pencil"></i></a>-->
            <!--                            </td>-->
            <!--                            <td>-->
            <!--                        <form method="post" action="{{ route('delete-hoa', ['id' => $item->id]) }}"-->
            <!--                            style="display: inline;">-->
            <!--                            @csrf-->
            <!--                            @method('put')-->
            <!--                            <button type="submit" class="btn btn-danger btn-sm"-->
            <!--                                onclick="return confirm('Are you sure you want to delete this item?')"><i class="fa-solid fa-trash-can"></i></button>-->
            <!--                        </form>-->
            <!--                    </td>-->
            <!--                </tr>-->
            <!--                @endforeach-->
            <!--                </tr>-->
            <!--            </tbody>-->
            <!--        </table>-->
            <!--        {!! $hoaData->withQueryString()->links('pagination::bootstrap-5') !!}-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
    <script>
        $(document).ready(function() {
           $("#mainCheckbox").on('click',function() {
               if ($(this).is(':checked', true)) {
                   $(".checkbox").prop('checked', true);
               } else {
                   $(".checkbox").prop('checked', false);
               }
           });
           
          $('.checkbox').on('click', function() {
              if ($('.checkbox:checked').length == $('.checkbox').length) {
                  $('#maincheckbox').prop('checked', true);
              } else {
                $('#maincheckbox').prop('checked', false);
              }
          });
          
          $('.removeAll').on('click',function() {
              debugger;
             var userIdArr = [];
             $('.checkbox:checked').each(function () {
                 userIdArr.push($(this).attr('data-id'));
             });
             
             if(userIdArr.length <= 0) {
                 alert('Choose min one item to remove.');
             } else {
                 if(confirm("Are you sure you want to delete.")) {
                     var dataId = userIdArr.join(",");
                     $.ajax({
                         url: "{{ route('delete-all-hoa') }}",
                        type: 'PUT',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: 'ids=' + dataId,
                        success: function(data) {
                            
                             
                            if(data.status === 'success') {
                                $('.checkbox:checked').each(function () {
                                    $(this).parent("tr").remove();
                                });
                                alert('Data deleted successfully');
                                location.href = '{{ route('hoa-list') }}';
                            } else {
                                alert('Error occurred: ' + data.message);
                            }
                             
                             
                        },
                        error: function(data) {
                            alert(data.responseText);
                        },
                     });
                 }
             }
          });
           
        });
    </script>
   
   @endsection