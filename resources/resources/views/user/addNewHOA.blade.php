@include('partials/header')


<div class="mbr-section article content9 cid-rJ1TRq1dbZ">
    <div class="container">
        
            <div class="mainFormDiv">
                <div class="formContainerDiv">
                    @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    <div class="row">
                        <div class="col">
                            
                            <?php echo $heading2->heading ?>
                        </div>
                        
                    </div>
                    
                    
                    
                    
                    <div class="formData " >
                        <form method="POST"  enctype="multipart/form-data" action="{{ route('user-add') }}"   class="dropzone" id="formDropzone">
                            @csrf
                            
                            <div class="section" id="section1">
    <div class="column ui-sortable" id="column1"><div id="fb_confirm_inline" style="display: none; min-height: 200px;">
      </div>
      <div id="fb_error_report" style="display: none;">
      </div>
      
      <div class="fb-item fb-50-item-column" id="item14" style="opacity: 1;">
        <div class="fb-grouplabel">
          <label id="item14_label_0" style="display: inline;"> Your Name:</label>
        </div>
        <div class="fb-input-box">
          <input name="name" id="item14_text_1" required="" type="text" maxlength="254" placeholder="(required)" data-hint="" autocomplete="off" fdprocessedid="mxz7w">
          <div class="text-danger" id="error-message"></div>
        </div>
      </div>
      
      <div class="fb-item fb-50-item-column" id="item5" style="opacity: 1;">
        <div class="fb-grouplabel">
          <label id="item5_label_0" style="display: inline;">Your Email Address:</label>
        </div>
        <div class="fb-input-box">
          <input name="email" id="item5_text_1" required="" type="text" maxlength="254" placeholder="you@domain.com (required)" data-hint="" autocomplete="off" fdprocessedid="asdl8c">
          <div class="text-danger" id="error-message"></div>
        </div>
      </div>
     
      <div class="fb-item fb-100-item-column" id="item20" style="opacity: 1;">
        <div class="fb-grouplabel">
          <label id="item20_label_0" style="display: inline;"> HOA Name:</label>
        </div>
        <div class="fb-input-box">
          <input name="hoa_name" id="item20_text_1" required="" type="text" maxlength="254" placeholder="(required)" data-hint="" autocomplete="off" fdprocessedid="mxz7w">
        <div class="text-danger" id="error-message"></div>
        </div>
      </div>
      
      
      <div class="fb-item fb-50-item-column" id="item6" style="opacity: 1;">
        <div class="fb-grouplabel">
          <label id="item6_label_0" style="display: inline;">HOA City</label>
        </div>
        <div class="fb-input-box">
          <input name="city" id="item6_text_1" required="" type="text" maxlength="254" placeholder="(required)" data-hint="" autocomplete="off" fdprocessedid="otsyed">
        <div class="text-danger" id="error-message"></div>
        </div>
      </div>
      <div class="fb-item fb-20-item-column" id="item7" style="opacity: 1;">
        <div class="fb-grouplabel">
          <label id="item7_label_0" style="display: inline;">State</label>
        </div>
        <div class="fb-dropdown">
          <select name="state" id="item7_select_1" data-hint="" fdprocessedid="sprrnm">
               @forelse($states as $state)
            <option value="{{ $state->state }}" @if($state->state == 'Florida') selected @endif>
            {{ $state->state }}
        </option>
        @empty
            <option value="" disabled>No states found</option>
        @endforelse
          </select>
        </div>
      </div>
      
      <div class="fb-item fb-22-item-column" id="item8" style="opacity: 1; width:19%;">
        <div class="fb-grouplabel">
          <label id="item8_label_0" style="display: inline;">Zip</label>
        </div>
        <div class="fb-input-box">
          <input name="zip" id="item8_text_1" required="" type="text" maxlength="254" placeholder="(required)" data-hint="" autocomplete="off" fdprocessedid="ox1yl7">
        <div class="text-danger" id="error-message"></div>
        </div>
      </div>
      
      <div class="fb-item fb-100-item-column" style="opacity:1;">
      <p>If known, please include the following information:</p>
      </div>
      
       <div class="fb-item fb-50-item-column" id="item15" style="opacity: 1;">
        <div class="fb-grouplabel">
          <label id="item15_label_0" style="display: inline;">HOA Contact Person:</label>
        </div>
        <div class="fb-input-box">
          <input name="contact_person" id="item15_text_1"  type="text" maxlength="254" placeholder="(optional)" data-hint="" autocomplete="off" fdprocessedid="x57d3">
        </div>
      </div>
      
      
      
      <div class="fb-item fb-50-item-column" id="item4" style="opacity: 1;">
        <div class="fb-grouplabel">
          <label id="item4_label_0" style="display: inline;">HOA Phone Number:</label>
        </div>
        <div class="fb-input-box">
          <input name="phone" id="item4_text_1"  type="text" maxlength="254" placeholder="(optional)" data-hint="" autocomplete="off" fdprocessedid="mrgl5">
        </div>
      </div>
      
      
      <div class="fb-item fb-100-item-column" id="item12" style="opacity: 1;">
        <div class="fb-grouplabel">
          <label id="item12_label_0" style="display: inline;">Comments</label>
        </div>
        <div class="fb-textarea">
          <textarea name="comments" id="item12_textarea_1" style="resize: none;" maxlength="10000" placeholder="" data-hint=""></textarea>
        </div>
      </div>
      
       <div class="form-group mb-4 fb-item fb-100-item-column">
                                <label class="inputName" for="formImage">Upload Image:</label>
                                <div class="dropzone-drag-area form-controls" id="previews" type="file">
                                    <div class="dz-message text-muted opacity-50" data-dz-message >
                                        <br><span>Drag Image Here or Click Here to Upload</span>
                                    </div>
                                        <div class="dz-preview" id="dzPreviewContainer">
                                            <div class="dz-photo dz-image-preview">
                                                <img class="dz-thumbnail" data-dz-thumbnail id="uploadedImage">
                                            </div>
                                    </div>
                                </div>
                                <div class="invalid-feedback fw-bold">Please upload an image.</div>
                            </div>
     
      
      </div>
      
  </div>
                            
                            <div class="fb-item-alignment-left fb-footer" id="fb-submit-button-div"
                                style="min-height: 1px;">
    <input class="fb-button-special" id="submitButton" type="submit" data-regular="" value="Submit" style="background-image: url(&quot;https://myhoamailboxes.com/not-in-database/theme/default/images/btn_submit.png&quot);;">
  </div>     
                            
                        </form>
                    </div>
                </div>
            </div>
            
    </div>
</div>
<style type="text/css">
    .text-danger {
    color: red !important;
    font-size: medium;
}
</style>
               <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>

    <script>
    
    Dropzone.autoDiscover = false;

            /**
             * Setup dropzone
             */
             
            $('#formDropzone').dropzone({
                previewTemplate: $('#dzPreviewContainer').html(),
                url: "{{ route('user-add') }}",
                addRemoveLinks: true,
                autoProcessQueue: false,       
                uploadMultiple: false,
                parallelUploads: 10,
                maxFiles: 10,
                acceptedFiles: '.jpeg, .jpg, .png, .gif',
                thumbnailWidth: 900,
                thumbnailHeight: 600,
                previewsContainer: "#previews",
                timeout: 0,
                init: function() 
                {
                    myDropzone = this;

                    // when file is dragged in
                    this.on('addedfile', function(file) { 
                        $('.dropzone-drag-area').removeClass('is-invalid').next('.invalid-feedback').hide();
                    });
                },
                success: function(file, response) 
                {
                    console.log('Data Saved');
                }
            });

           
            
            $('#submitButton').on('click', function(event) {
                debugger;
         $("#submitButton").val('Please Wait...').prop('disabled', true);      
    event.preventDefault();
    var $this = $(this);
    
    // show submit button spinner
    $this.children('.spinner-border').removeClass('d-none');
    

    // validate form & submit if valid
    if ($('#formDropzone')[0].checkValidity() === false) {
        
       // Remove any existing error messages
            $('.text-danger').remove();
            
            // Iterate over invalid input elements
            $('#formDropzone :invalid').each(function() {
                // Get the validation message
                var errorMessage = this.validationMessage;
                
                // Create a new error message element
                var errorElement = $('<div class="text-danger"></div>').text(errorMessage);
                
                // Insert the error message element after the invalid input field
                $(this).after(errorElement);
                $(window).scrollTop($(this).offset().top);

            });
            
        event.stopPropagation();

        // show error messages & hide button spinner    
        $('#formDropzone').addClass('was-validated'); 
        $this.children('.spinner-border').addClass('d-none');

        // if dropzone is empty show error message
        // if (!myDropzone.getQueuedFiles().length > 0) {                        
        //     $('.dropzone-drag-area').addClass('is-invalid').next('.invalid-feedback').show();
        // }

        $("#submitButton").val('Submit').prop('disabled', false);


    } else {
        
        // If the input is valid, hide the error message
            $('#error-message').hide();
            // Continue with the form submission logic
        $("#submitButton").val('uploading...').prop('disabled', true);

        var formData = new FormData();
        
        // Collect form data
        $('#formDropzone').serializeArray().forEach(function(field) {
            formData.append(field.name, field.value);
        });

        // Collect files
       if (myDropzone.getQueuedFiles().length > 0) {
        myDropzone.getQueuedFiles().forEach(function(file) {
            formData.append('files[]', file);
        });
    }

        // Send data to the server
        $.ajax({
            url: "{{ route('user-add') }}",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                // hide form and show success message
                // $('#formDropzone').fadeOut(600);
                // setTimeout(function() {
                //     $('#successMessage').removeClass('d-none');
                // }, 600);
                $("#submitButton").val('Send').prop('disabled', false);
                window.location.href = "{{ route('response') }}";

                console.log(response);
            },
            error: function(xhr, status, error) {
                // handle error
            },
            complete: function() {
                // hide button spinner
                $this.children('.spinner-border').addClass('d-none');
            }
        });
    }
});

</script>

@include('partials/footer')
            
          