
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
<li class="breadcrumb-item active">Board Members</li>
</ol>
</div>
</div>
</div>
</section>

            <div class="container-fluid">
                <div class="CommunityForm">
                    <table class="table table-bordered table-hover dataTable dtr-inline table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                 <th>Sr. No.</th>
                                 <th>Community Id</th>
                                 <th>Board Member</th>
                                 <th>Position Held</th>
                                 <th>Property Manager</th>
                                 <th>Address</th>
                                 <th>City</th>
                                 <th>State</th>
                                 <th>Zip</th>
                                 <th>Phone</th>
                                <th class="communityTable" colspan='2'>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($board_member as $item)
                            <tr>
                                 <td>{{ $item->id }}</td>
                                 <td>{{ $item->community_id }}</td>
                                 <td>{{ $item->board_member }}</td>
                                 <td>{{ $item->position_held }}</td>
                                 <td>{{ $item->property_manager }}</td>
                                 <td>{{ $item->address }}</td>
                                 <td>{{ $item->city }}</td>
                                 <td>{{ $item->state }}</td>
                                 <td>{{ $item->zip }}</td>
                                 <td>{{ $item->phone }}</td>
                                <td>
                                    <a href="{{ url('edit-board-member/' . $item->id) }}"
                                        class="btn btn-primary btn-sm"><i class="fa-solid fa-pencil"></i></a>
                                </td>
                                <td>
                                    <form method="post" action="{{ route('delete-board-member', ['id' => $item->id]) }}"
                                        style="display: inline;">
                                        @csrf
                                        @method('put')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this item?')"><i class="fa-solid fa-trash-can"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>
                    {!! $board_member->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>
            </div>
        </div>
    </div>
    
    @endsection
    
    