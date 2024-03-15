
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
<li class="breadcrumb-item active">Question</li>
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
                                <th>Title</th>
                                <th>Date</th>
                                <th>Whois</th>
                                <th>HOA1</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Zip</th>
                                <th>Address2</th>
                                <th>City2</th>
                                <th>State2</th>
                                <th>Zip2</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($questionList as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->current_date }}</td>
                                <td>{{ $item->who }}</td>
                                <td>{{ $item->hoa }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->city }}</td>
                                <td>{{ $item->state }}</td>
                                <td>{{ $item->zip }}</td>
                                <td>{{ $item->address2 }}</td>
                                <td>{{ $item->city2 }}</td>
                                <td>{{ $item->state2 }}</td>
                                <td>{{ $item->zip2 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->subject }}</td>
                                <td>{{ $item->message }}</td>
                                <td>
                                    <form method="post" action="{{ route('delete-question-list', ['id' => $item->id]) }}"
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
                    {!! $questionList->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>
            </div>
        </div>
    </div>
   
   @endsection