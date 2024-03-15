
        @extends('layouts.master')
        
        @section('content')

        <div class="content-wrapper">
            <section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
    <form action="{{ route('search-enquiry') }}" method="get">
        <div class="input-group input-group-lg">
            <input type="search" class="form-control form-control-sm" name="searchData" placeholder="Search Name Here" value="{{ request('searchData') }}">
            <div class="input-group-append">
                <button type="submit" class="btn btn-lg btn-default" style="background-color:#e9ecef;"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>
         </form>
</div>

<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
<li class="breadcrumb-item active">Enquiry</li>
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
                <div class="CommunityForm">
                    <table class="table table-bordered table-hover dataTable dtr-inline table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th><input type="checkbox" id="mainCheckbox"></th>
                                <th>Date</th>
                                <th>Name</th>
                                <!-- <th>Email</th> -->
                                <!-- <th>Phone No.</th> -->
                                <th colspan='3'>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($enquiry) > 0)
                                @foreach ($enquiry as $item)
                                @if(request('searchData') && strpos(strtolower($item->name), strtolower(request('searchData'))) !== false)
                             
                                  <tr id="tr_{{ $item->id }}" >
                                   <td><input type="checkbox" class="checkbox" data-id="{{ $item->id }}"></td>
 
                                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('M d, Y h:i A') }}</td>
                                <td>{{ $item->name }}</td>
                                <!-- <td>{{ $item->email }}</td> -->
                                <!-- <td>{{ $item->phone }}</td> -->
                                <td>
                                    
                                    <a href="{{ url('enquiry-view/' . $item->id) }}" class="btn btn-success btn-sm"><i class="fa-regular fa-eye"></i></a>
                                    
                                    <form method="post" action="{{ route('delete-enquiry', ['id' => $item->id]) }}"
                                        style="display: inline;">
                                        @csrf
                                        @method('put')
                                        <button type="submit" class="btn btn-danger btn-sm actionButton"
                                            onclick="return confirm('Are you sure you want to delete this item?')"><i class="fa-solid fa-trash-can"></i></button>
                                    </form>
                                
                                    <a href="{{ route('mail', ['id' => $item->id]) }}"
                                        class="btn btn-primary btn-sm actionButton" >Send Mail<a>
                                </td>
                            </tr>
                             @elseif(!request('searchData'))
                                <tr id="tr_{{ $item->id }}" >
                                   <td><input type="checkbox" class="checkbox" data-id="{{ $item->id }}"></td>
 
                                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('M d, Y h:i A') }}</td>
                                <td>{{ $item->name }}</td>
                                <!-- <td>{{ $item->email }}</td> -->
                                <!-- <td>{{ $item->phone }}</td> -->
                                <td>
                                    
                                    <a href="{{ url('enquiry-view/' . $item->id) }}" class="btn btn-success btn-sm"><i class="fa-regular fa-eye"></i></a>
                                    
                                    <form method="post" action="{{ route('delete-enquiry', ['id' => $item->id]) }}"
                                        style="display: inline;">
                                        @csrf
                                        @method('put')
                                        <button type="submit" class="btn btn-danger btn-sm actionButton"
                                            onclick="return confirm('Are you sure you want to delete this item?')"><i class="fa-solid fa-trash-can"></i></button>
                                    </form>
                                
                                    <a href="{{ route('mail', ['id' => $item->id]) }}"
                                        class="btn btn-primary btn-sm actionButton" >Send Mail<a>
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
                    {!! $enquiry->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>
                
            
            </div>
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
                         url: "{{ route('delete-all-enquiry') }}",
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
                                location.href = '{{ route('enquiry-list') }}';
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