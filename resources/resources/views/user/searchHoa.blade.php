@include('partials/header')
<div class="mbr-section article content9 cid-rJ1TRq1dbZ">
  <div class="container">
    <div class="sectionCounty">
      <div class="formContainerDiv">
        <div class="formData2">
          <div class="headingSection">
            <div class="sectionHeading">
              <p>Your HOA Has Been Found In Our Database!</p>
              <p style="font-size: 1rem;"> Please Fill Out The Short Form Below To Get An Immediate Link to Pictures And Pricing On The Next Page!</p>
            </div>
          </div>
          <form method='post' action="{{url('enquiry')}}" id="hoaForm">
            @csrf
            
            @foreach ($hoa as $hoaData)
            <input type="hidden" name="hoaID" value="{{ $hoaData->id }}">
            @endforeach
            <div class="inputDiv"> <span class="inputName">Name:</span>
              <input type="text" class="inputdivValue" name="name" placeholder="required">
              @error('name')
              <div class="text-danger">{{ $message }}</div>
              @enderror </div>
            <div class="inputDiv"> <span class="inputName">Email:</span>
              <input type="text" class="inputdivValue" name="email" placeholder="required">
              @error('email')
              <div class="text-danger">{{ $message }}</div>
              @enderror </div>
            <div class="inputDiv"> <span class="inputName">Phone Number:</span>
              <input type="text" class="inputdivValue" name="phone">
            </div>
            <div class="button">
              <button class="submit-btn" id="submitForm" type="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <div class="DataTable" style="display:none;">
        <div class="headingSection" >
          <div class="sectionHeading" id="hoaHeading"> 
            <!--<p>Searched HOA Data:</p>--> 
            
            <?php echo $heading1->heading ?> </div>
        </div>
        <div class="searchedData"> @foreach ($hoa as $hoaData) 
          <!--<div class="row">
                        <div class="col">
                            <b>HOA ID:</b>
                        </div>
                        
                        <div class="col">
                            <p>{{ $hoaData->id }}</p>
                        </div>
                        
                    </div>
                    
                    <hr>-->
          
          <div class="row">
            <div class="col"> <a href="{{ asset($hoaData->image) }}" data-lightbox="example-set" ><img src="{{ asset($hoaData->image) }}" alt="UserHOA Photo"  class="thumbnail" style="width:150px;"></a> </div>
            <div class="col">
              <p style="font-size: 1.5rem !important; text-align: left; font-weight: 900;">{{ $hoaData->name }}</p>
            </div>
          </div>
          <hr>
          @if (!empty($hoaData->product_url))
          <div class="row">
            <!--<div class="col"> <b>Mailbox URL 1:</b> </div>-->
            <div class="col"> <a href='{{ $hoaData->product_url }}' target="_blank" style="color:#0f94cb;"><?php echo $heading3->heading ?></a> </div>
          </div>
          <br>
          <hr>
          @else
          <div></div>
          @endif 
          
          
          @if (!empty($hoaData->product_url2))
          <div class="row">
            <!--<div class="col"> <b>Mailbox URL 2:</b> </div>-->
            <div class="col"> <a href='{{ $hoaData->product_url2 }}' target="_blank" style="color:#0f94cb;"><?php echo $heading4->heading ?></a> </div>
          </div>
          <br>
          <hr>
          @else
          <div></div>
          @endif
          
          
          @if (!empty($hoaData->product_url3))
          <div class="row">
            <!--<div class="col"> <b>Mailbox URL 3:</b> </div>-->
            <div class="col"> <a href='{{ $hoaData->product_url3 }}' target="_blank" style="color:#0f94cb;"><?php echo $heading5->heading ?></a> </div>
          </div>
          <br>
          <hr>
          @else
          <div></div>
          @endif
          
          
          
          @if (!empty($hoaData->product_url4))
          <div class="row">
            <!--<div class="col"> <b>Mailbox URL 4:</b> </div>-->
            <div class="col"> <a href='{{ $hoaData->product_url4 }}' target="_blank" style="color:#0f94cb;"><?php echo $heading6->heading ?></a> </div>
          </div>
          <br>
          <hr>
          <br>
          @else
          <div></div>
          @endif 
          
          <!--<div class="row">--> 
          <!--    <div class="col">--> 
          <!--        <b>Address:</b>--> 
          
          <!--    </div>--> 
          <!--    <div class="col">--> 
          <!--        <p>{{ $hoaData->address }}</p>--> 
          <!--    </div>--> 
          
          <!--</div>--> 
          
          <!--<hr>--> 
          
          <!--<div class="row">--> 
          <!--    <div class="col">--> 
          <!--        <b>County:</b>--> 
          <!--    </div>--> 
          <!--    <div class="col">--> 
          <!--        <p>--> 
          <!--        {{ $hoaData->county }}</p>--> 
          <!--    </div>--> 
          <!--</div>--> 
          
          @endforeach </div>
      </div>
    </div>
  </div>
</div>

<!-- Include jQuery --> 
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<style>
    .DataTable {
        display: none;
        /* Add your additional CSS styling for the DataTable here */
    }

    .formData2 {
        display: block;
    }

    .pleaseWaitMessage {
        /* Add your styling for the "Please wait" message here */
        color: #333;
        font-weight: bold;
    }
</style>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.css" integrity="sha512-Woz+DqWYJ51bpVk5Fv0yES/edIMXjj3Ynda+KWTIkGoynAMHrqTcDUQltbipuiaD5ymEo9520lyoVOo9jCQOCA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js" integrity="sha512-Ixzuzfxv1EqafeQlTCufWfaC6ful6WFqIz4G+dWvK0beHw0NVJwvCKSgafpy5gwNqKmgUfIBraVwkKI+Cz0SEQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
<script>
        $( document ).ready(function() {
    console.log( "ready!" );
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
});
    
</script> 
<script>
    $(document).ready(function () {
        // Handle form submission
        $("#hoaForm").submit(function (e) {
            e.preventDefault();

            // Disable the submit button
            $('#submitForm').prop('disabled', true);

            // Show "Please wait" message
            $('.button').append('<div class="pleaseWaitMessage">Please wait...</div>');

            // Check if name field is empty
            var nameValue = $("input[name='name']").val();
            if (nameValue.trim() === '') {
                alert('Please fill Name field.');
                return;
            }

            // Check if email field is empty
            var emailValue = $("input[name='email']").val();
            if (emailValue.trim() === '') {
                alert('Please fill Email field.');
                return;
            }

            // Email validation using regular expression
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(emailValue)) {
                alert('Please enter a valid email address.');
                return;
            }

            $.ajax({
                url: $(this).attr("action"),
                type: 'post',
                data: $(this).serialize(),
                dataType: 'json',
                success: function (response) {
                    
                      // Get the content of the element
            var content = $('#hoaHeading').html();

            // Replace the string
            var newContent = content.replace('[customername]', $("input[name='name']").val());

            // Set the modified content back to the element
            $('#hoaHeading').html(newContent);
            
                    // Assuming the response is successful, you can update the display property
                    $(".DataTable").css("display", "block");
                    $(".formData2").css("display", "none");

                    // Optionally, you can remove the "Please wait" message after success
                    $('.pleaseWaitMessage').remove();
                },
                error: function (xhr, status, error) {
                    // Handle errors if necessary
                    console.error(xhr.responseText);

                    // Re-enable the submit button on error
                    $('#submitForm').prop('disabled', false);

                    // Optionally, you can remove the "Please wait" message on error
                    $('.pleaseWaitMessage').remove();
                }
            });
        });
    });
</script> 
@include('partials/footer')