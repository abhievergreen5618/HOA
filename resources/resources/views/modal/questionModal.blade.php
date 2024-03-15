<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content mainModalDiv">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Contact the Property Manager or HOA for this
                    Community</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modelBodyContainer">
                <div class="formSectionContainer">
                    <div class="section">
                        <p class="pageHeading"><strong>Contact the Property Manager or HOA Board Members</strong>
                        </p>
                    </div>
                    <div class="section">
                        <div class="alertText">
                            <p>The information you provide in this form is strictly confidential, and will not be
                                used
                                for any other reason than to answer your inquiry.</p>
                        </div>
                    </div>
                    <div class="section">
                        <form action="{{ route('question') }}" method="post" id="myForm">
                            @csrf
                            <div class="form1">
                                <div class="formHeader">
                                    <p>ASSOCIATION NAME</p>
                                </div>
                                <div class="formDataDivs">
                                    <div class="row formRow">
                                        <div class="col">
                                            <p class="formInputName"><strong>TITLE</strong></p>
                                             @if($community)
                                            <input type="text" class="questionInput" class="questionInput" name="title"
                                                value="{{ $community->community }}">
                                                @else
                                                <p>Not found</p>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="row formRow">
                                        <?php 
                                                $current_date = date('Y-m-d H:i:s'); 
                                            ?>
                                        <div class="col">
                                            <p class="formInputName"><strong>DATE</strong> <i
                                                    class="fa-solid fa-star-of-life required"></i></p>
                                            <input type="text" class="questionInput" name="current_date"
                                                value="{{ $current_date }}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form1">
                                <div class="formHeader">
                                    <p>CHOOSE ONE:</p>
                                </div>
                                <div class="formDataDivs">
                                    <div class="row formRow">
                                        <div class="col">
                                            <p class="formInputName" for="who"><strong>Whois</strong> <i
                                                    class="fa-solid fa-star-of-life required"></i></p>
                                            <select name="who" id="who" class="questionInput">
                                                <option value="select" class="questionInput">Please Select</option>
                                                <option value="Advertise to the HOA" class="questionInput">Advertise to
                                                    the HOA</option>
                                                <option value="Attorney" class="questionInput">Attorney</option>
                                                <option value="Bank" class="questionInput">Bank</option>
                                                <option value="Homeowner" class="questionInput">Homeowner</option>
                                                <option value="Insurance Company" class="questionInput">Insurance
                                                    Company</option>
                                                <option value="Title Company" class="questionInput">Title Company
                                                </option>
                                                <option value="Looking to Purchase" class="questionInput">Looking to
                                                    Purchase</option>
                                                <option value="Mortage Broker" class="questionInput">Mortage Broker
                                                </option>
                                                <option value="Realtor" class="questionInput">Realtor</option>
                                                <option value="Renter" class="questionInput">Renter</option>
                                                <option value="Other" class="questionInput">Other</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form1">
                                <div class="formHeader">
                                    <p>ADDRESS WITHIN HOA</p>
                                </div>
                                <div class="formDataDivs">
                                    <div class="row formRow">
                                        <div class="col">
                                            <p class="formInputName" for="hoa"><strong>HOA1</strong> <i
                                                    class="fa-solid fa-star-of-life required"></i></p>
                                            <select name="hoa" id="hoa" class="questionInput">
                                                <option value="select" class="questionInput">Please Select</option>
                                                <option value="yes" class="questionInput">Yes</option>
                                                <option value="no" class="questionInput">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row formRow">
                                        <div class="col">
                                            <p class="formInputName"><strong>ADDRESS</strong> <i
                                                    class="fa-solid fa-star-of-life required"></i></p>
                                            <input type="text" class="questionInput" name="address">
                                        </div>
                                    </div>
                                    <div class="row formRow">
                                        <div class="col">
                                            <p class="formInputName"><strong>CITY</strong></p>
                                            <input type="text" class="questionInput" name="city">
                                        </div>
                                    </div>
                                    <div class="row formRow">
                                        <div class="col">
                                            <p class="formInputName"><strong>STATE</strong></p>
                                            <input type="text" class="questionInput" name="state">
                                        </div>
                                    </div>
                                    <div class="row formRow">
                                        <div class="col">
                                            <p class="formInputName"><strong>ZIP</strong></p>
                                            <input type="text" class="questionInput" name="zip">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form1">
                                <div class="formHeader">
                                    <p>YOUR ADDRESS (IF DIFFERENT THAN ABOVE)</p>
                                </div>
                                <div class="formDataDivs">
                                    <div class="row formRow">
                                        <div class="col">
                                            <p class="formInputName"><strong>ADDRESS2</strong></p>
                                            <input type="text" class="questionInput" name="address2">
                                        </div>
                                    </div>
                                    <div class="row formRow">
                                        <div class="col">
                                            <p class="formInputName"><strong>CITY2</strong></p>
                                            <input type="text" class="questionInput" name="city2">
                                        </div>
                                    </div>
                                    <div class="row formRow">
                                        <div class="col">
                                            <p class="formInputName"><strong>STATE2</strong></p>
                                            <input type="text" class="questionInput" name="state2">
                                        </div>
                                    </div>
                                    <div class="row formRow">
                                        <div class="col">
                                            <p class="formInputName"><strong>ZIP2</strong></p>
                                            <input type="text" class="questionInput" name="zip2">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form1">
                                <div class="formHeader">
                                    <p>MESSAGE</p>
                                </div>
                                <div class="formDataDivs">
                                    <div class="row formRow">
                                        <div class="col">
                                            <p class="formInputName"><strong>NAME</strong> <i
                                                    class="fa-solid fa-star-of-life required"></i></p>
                                            <input type="text" class="questionInput" name="name">
                                        </div>
                                    </div>
                                    <div class="row formRow">
                                        <div class="col">
                                            <p class="formInputName"><strong>EMAIL</strong> <i
                                                    class="fa-solid fa-star-of-life required"></i></p>
                                            <input type="text" class="questionInput" name="email">
                                        </div>
                                    </div>
                                    <div class="row formRow">
                                        <div class="col">
                                            <p class="formInputName"><strong>SUBJECT</strong> <i
                                                    class="fa-solid fa-star-of-life required"></i></p>
                                            <input type="text" class="questionInput" name="subject">
                                        </div>
                                    </div>
                                    <div class="row formRow">
                                        <div class="col">
                                            <p class="formInputName"><strong>MESSAGE</strong></p>
                                            <textarea name="message" class="message"></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="section">
                                <div class="buttons">
                                    <button class="save-btn" type="submit" data-bs-toggle="modal" data-bs-target="#dataBac">Save</button>
                                    <button class="reset-btn" id="resetButton">Reset</button>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>

                <div class="indexFooter">
                    <div class="copyright">
                        © 2022 www.FloridaCommunityNetwork.net. All Rights Reserved.
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
</div>

<!-- Add this script section at the end of your HTML file, just before the closing </body> tag -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get the reset button element
        var resetButton = document.getElementById("resetButton");

        // Add a click event listener to the reset button
        resetButton.addEventListener("click", function(event) {
            // Prevent the default form submission
            event.preventDefault();

            // Get the form element
            var myForm = document.getElementById("myForm");

            // Reset the form
            myForm.reset();
        });
    });
</script>

