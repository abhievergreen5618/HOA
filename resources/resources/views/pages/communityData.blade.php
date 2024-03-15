
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
<li class="breadcrumb-item active">Community</li>
</ol>
</div>
</div>
</div>
</section>
            <div class="container-fluid">
                <div class="CommunityForm">
                    <div class="addItem">
                        <a href="{{ route('communities') }}"><button class="btn btn-primary">Add Community</button></a>
                    </div>
                    <table class="table table-bordered table-hover dataTable dtr-inline table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>County</th>
                                <th>Community</th>
                                <th>HOA or NON</th>
                                <th>Status Type</th>
                                <th>Community Type</th>
                                <th>Community Legal Name</th>
                                <th>Also Known</th>
                                <th>Original Corporation Filing Date</th>
                                <th>Community ID Number</th>
                                <th colspan='3'>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($communityData as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->county }}</td>
                                <td>{{ $item->community }}</td>
                                <td>{{ $item->hoa_or_non }}</td>
                                <td>{{ $item->status_type }}</td>
                                <td>{{ $item->community_type }}</td>
                                <td>{{ $item->community_legal_name }}</td>
                                <td>{{ $item->also_known }}</td>
                                <td>{{ $item->date }}</td>
                                <td>{{ $item->id_number }}</td>
                                <td>
                                    <a href="{{ url('board-member/' . $item->id) }}"
                                        class="btn btn-success btn-sm">Board Member</a>
                                </td>
                                <td>
                                    <a href="{{ url('edit-community/' . $item->id) }}"
                                        class="btn btn-primary btn-sm"><i class="fa-solid fa-pencil"></i></a>
                                </td>
                                <td>
                                    <form method="post" action="{{ route('delete', ['id' => $item->id]) }}"
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
                    {!! $communityData->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>
            </div>
        </div>
    </div>
   
   @endsection
   