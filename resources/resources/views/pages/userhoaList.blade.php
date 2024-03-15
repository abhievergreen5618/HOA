
        @extends('layouts.master')
        
        @section('content')

        <div class="content-wrapper">
            <section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<form action="{{ route('search-hoa-name') }}" method="get">
        <div class="input-group input-group-lg">
            <input type="search" class="form-control form-control-sm" name="searchHoaName" placeholder="Search HOA Name Here" value="{{ request('searchHoaName') }}">
            <div class="input-group-append">
                <button type="submit" class="btn btn-lg btn-default" style="background-color:#e9ecef;"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>
         </form>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
<li class="breadcrumb-item active">HOAs Not in DB</li>
</ol>
</div>
</div>
</div>
</section>

 <div class="container-fluid">
                <div class="addItem" style="display:flex;">
                    
                    <div class="col-md-3">
                        <button class="btn btn-danger removeAll">Delete Selected Data</button>
                    </div>
                </div>


            <div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">

<div class="card-body table-responsive p-0">
<table class="table table-hover text-nowrap">
<thead>
<tr>
    <th><input type="checkbox" id="mainCheckbox"></th>
                                <th>Date</th>
                                <th>HOA Name</th>
                                <!-- <th>Email</th> -->
                                <!-- <th>Phone</th> -->
                                <th class="communityTable" colspan='3'>Action</th>
</tr>
</thead>
<tbody>
    @if(count($userhoaData) > 0)
        @foreach ($userhoaData as $item)
                                 @if(request('searchHoaName') && strpos(strtolower($item->hoa_name), strtolower(request('searchHoaName'))) !== false)
                             <tr id="tr_{{ $item->id }}">
    <td><input type="checkbox" class="checkbox" data-id="{{ $item->id }}"></td>
  
                                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('M d, Y h:i A') }}</td>
                                <td>{{ $item->hoa_name }}</td>
                                <!-- <td>{{ $item->email }}</td> -->
                                <!-- <td>{{ $item->phone }}</td> -->
                                <td>
                                    <a href="{{ url('view-user-hoa/' . $item->id) }}"
                                        class="btn btn-success btn-sm"><i class="fa-regular fa-eye"></i></a>
                                
                                    <form method="post" action="{{ route('delete-user-hoa', ['id' => $item->id]) }}"
                                        style="display: inline;">
                                        @csrf
                                        @method('put')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this item?')"><i
                                                class="fa-solid fa-trash-can"></i></button>
                                    </form>
                                    <a href="{{ route('hoa-mail',['id' => $item->id]) }}" class="btn btn-sm btn-success">Send Mail</a>
                                </td>
                               
                            </tr>
                             @elseif(!request('searchHoaName'))
                           
                            <tr id="tr_{{ $item->id }}">
    <td><input type="checkbox" class="checkbox" data-id="{{ $item->id }}"></td>
  
                                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('M d, Y h:i A') }}</td>
                                <td>{{ $item->hoa_name }}</td>
                                <!-- <td>{{ $item->email }}</td> -->
                                <!-- <td>{{ $item->phone }}</td> -->
                                <td>
                                    <a href="{{ url('view-user-hoa/' . $item->id) }}"
                                        class="btn btn-success btn-sm"><i class="fa-regular fa-eye"></i></a>
                                
                                    <form method="post" action="{{ route('delete-user-hoa', ['id' => $item->id]) }}"
                                        style="display: inline;">
                                        @csrf
                                        @method('put')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this item?')"><i
                                                class="fa-solid fa-trash-can"></i></button>
                                    </form>
                                    <a href="{{ route('hoa-mail',['id' => $item->id]) }}" class="btn btn-sm btn-success">Send Mail</a>
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
                    {!! $userhoaData->withQueryString()->links('pagination::bootstrap-5') !!}
               
</div>

</div>

</div>
</div>
</div>
</div>

    <!--        <div class="container-fluid">-->
    <!--            <div class="CommunityForm">-->
    <!--                <table class="table table-bordered table-hover dataTable dtr-inline table-head-fixed text-nowrap">-->
    <!--                    <thead>-->
    <!--                        <tr>-->
    <!--                            <th>Sr. No.</th>-->
    <!--                            <th>HOA Name</th>-->
    <!--                            <th>Contact Person Name</th>-->
    <!--                            <th>Email</th>-->
    <!--                            <th>Phone</th>-->
    <!--                            <th>City</th>-->
    <!--                            <th>State</th>-->
    <!--                            <th>Zip</th>-->
    <!--                            <th>Comments</th>-->
    <!--                            <th>Images</th>-->
    <!--                            <th class="communityTable" colspan='3'>Action</th>-->
    <!--                        </tr>-->
    <!--                    </thead>-->
    <!--                    <tbody>-->
    <!--                        <tr>-->
    <!--                            @foreach ($userhoaData as $item)-->
    <!--                        <tr>-->
    <!--                            <td>{{ $item->id }}</td>-->
    <!--                            <td>{{ $item->hoa_name }}</td>-->
                                <!--<td>{{ $item->contact_person }}</td>-->
                                <!--<td>{{ $item->email }}</td>-->
                                <!--<td>{{ $item->phone }}</td>-->
                                <!--<td>{{ $item->city }}</td>-->
                                <!--<td>{{ $item->state }}</td>-->
                                <!--<td>{{ $item->zip }}</td>-->
                                <!--<td>{{ $item->comments }}</td>-->
    <!--                            <td>-->
    <!--                                @if(is_array($item->photos))-->
    <!--    @foreach ($item->photos as $photo)-->
    <!--        <img src="{{ asset($photo) }}" alt="UserHOA Photo" class="thumbnail photos" width="100px">-->
    <!--    @endforeach-->
    <!--@else-->
    <!--    <img src="{{ asset($item->photos) }}" alt="UserHOA Photo" class="thumbnail">-->
    <!--@endif-->
    <!--                            </td>-->
    <!--                            <td>-->
    <!--                                <a href="{{ url('view-user-hoa/' . $item->id) }}"-->
    <!--                                    class="btn btn-success btn-sm"><i class="fa-regular fa-eye"></i></a>-->
                                
    <!--                            </td>-->
    <!--                            <td>-->
    <!--                                <form method="post" action="{{ route('delete-user-hoa', ['id' => $item->id]) }}"-->
    <!--                                    style="display: inline;">-->
    <!--                                    @csrf-->
    <!--                                    @method('put')-->
    <!--                                    <button type="submit" class="btn btn-danger btn-sm"-->
    <!--                                        onclick="return confirm('Are you sure you want to delete this item?')"><i-->
    <!--                                            class="fa-solid fa-trash-can"></i></button>-->
    <!--                                </form>-->
    <!--                            </td>-->
    <!--                            <td>-->
    <!--                                <a href="{{ route('hoa-mail',['id' => $item->id]) }}" class="btn btn-sm btn-success">Send Mail</a>-->
    <!--                            </td>-->
                               
    <!--                        </tr>-->
    <!--                        @endforeach-->
    <!--                        </tr>-->
    <!--                    </tbody>-->
    <!--                </table>-->
    <!--                {!! $userhoaData->withQueryString()->links('pagination::bootstrap-5') !!}-->
    <!--            </div>-->
    <!--        </div>-->
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
                         url: "{{ route('delete-all-user-hoa') }}",
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
                                location.href = '{{ route('user-hoa-list') }}';
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