
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
            
<section class="content">
<div class="container-fluid">
<div class="row">

<div class="col-md-12">

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Add Board Member</h3>
</div>

                    <form method="post" action="{{ url('add-board-member', ['id' => $community->id]) }}">


                        @csrf
                        <div class="card-body">

                        <!-- The following div will be cloned when the "Add Item" button is clicked -->
                        <div class="board-members-container">
                            <div class="row">
                                <div class="col inputItem">
                                    <p class="formText">Board Member</p>
                                    <input type="text" class="form-control" placeholder="board member"
                                        name="board_member">
                                </div>
                                <div class="col inputItem">
                                    <p class="formText">Position Held</p>
                                    <input type="text" class="form-control" placeholder="position held"
                                        name="position_held">
                                </div>
                            </div>
                        </div>

                        <!--<div class="row">-->
                        <!--    <div class="col">-->
                        <!--        <button class="add-item" type="button" onclick="addBoardMember()">Add Item</button>-->
                        <!--    </div>-->
                        <!--</div>-->


                        <div class="addressDiv">
                            <div class="row">
                                <div class="col inputItem">
                                    <p class="formText">Property Manager</p>
                                    <input type="text" class="form-control" placeholder="property manager"
                                        name="property_manager">
                                </div>
                                <div class="col inputItem">
                                    <p class="formText">Address</p>
                                    <input type="text" class="form-control" placeholder="address" name="address">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col inputItem">
                                    <p class="formText">City</p>
                                    <input type="text" class="form-control" placeholder="city" name="city">
                                </div>
                                <div class="col inputItem">
                                    <p class="formText">State</p>
                                    <input type="text" class="form-control" placeholder="state" name="state">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col inputItem">
                                    <p class="formText">Zip</p>
                                    <input type="text" class="form-control" placeholder="zip" name="zip">
                                </div>
                                <div class="col inputItem">
                                    <p class="formText">Phone</p>
                                    <input type="text" class="form-control" placeholder="phone" name="phone">
                                </div>
                            </div>
                        </div>

                        <!--<div class="row">-->
                        <!--    <div class="col">-->
                        <!--        <button class="add-item" type="button" onclick="addAddress()">Add Item</button>-->
                        <!--    </div>-->
                        <!--</div>-->

                        <div class="row">
                            <div class="col ">
                                <button class="add-btn btn btn-primary" type="submit">Add</button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        function addBoardMember() {
            var boardMembersContainer = $('.board-members-container');
            var newRow = boardMembersContainer.find('.row:first').clone();

            // Clear values in the new row
            newRow.find('input').val('');

            // Append the new row to the container
            boardMembersContainer.append(newRow);
        }
    </script>

    <script>
        function addAddress() {
            var address = $('.addressDiv');
            var newRow = address.find('.row').clone();

            // Clear values in the new row
            newRow.find('input').val('');

            // Append the new row to the container
            address.append(newRow);
        }
    </script>

   @endsection