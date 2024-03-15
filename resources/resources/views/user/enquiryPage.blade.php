@include('partials/header')

<div class="section2">
    <div class="container ">
        
            <div class="sectionCounty">
                <div class="headingSection">
                    <div class="sectionHeading">
                        <p>Submit your Enquiry Here:</p>
                    </div>
                </div>
                <div class="sectionId">
                
                
                </div>
                <div class="formContainerDiv">
                    <div class="formData">
                        <form method='post' action="{{url('enquiry')}}">
                        @csrf
                            
                                <div class="inputDiv">
                                    <p>HOA ID</p>
                                <input type="text" class="inputdivValue" name="hoaID">
                            </div>
                            
                            <div class="inputDiv">
                                <p class="inputName">Name :</p>
                                <input type="text" class="inputdivValue" name="name">
                            </div>
                            <div class="inputDiv">
                                <p class="inputName">Email :</p>
                                <input type="text" class="inputdivValue" name="email">
                            </div>
                            <div class="inputDiv">
                                <p class="inputName">Phone No. :</p>
                                <input type="text" class="inputdivValue" name="phone">
                            </div> 
                            <div class="button">
                                <button class="submit-btn" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

    </div>
</div>

@include('partials/footer')               