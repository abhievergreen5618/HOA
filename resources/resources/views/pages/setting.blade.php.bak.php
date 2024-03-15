
        @extends('layouts.master')
        
        @section('content')

        <div class="content-wrapper">
            
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item active">Setting</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="content">
                
                
                
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-12">
                            
                                                @if(session('status'))
                                                    <div class="alert alert-success">
                                                {{ session('status') }}
                                                    </div>
                                                @endif

                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Profile Setting</h3>
                                </div>
                                <section class="content-header">
                                    <div class="container-fluid">
                                       
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card card-primary">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Profile</h3>

                                                    </div>
                                                    <form id="formDropzone" action="{{ route('profile-setting') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="form-group mb-4">
                                <label class="inputName" for="formImage">Profile Image:</label>
                                <div class="dropzone-drag-area form-control" id="previews" type="file">
                                    <div class="dz-message text-muted opacity-50" data-dz-message>
                                        <span><i class="fa-solid fa-camera"></i>  @if(Auth::user()->image)
    @php
        $imagePathArray = json_decode(Auth::user()->image, true);
        $imagePath = isset($imagePathArray[0]) ? $imagePathArray[0] : null;
    @endphp

    @if($imagePath)
        <img class="img-circle elevation-2" src="{{ asset($imagePath) }}" alt="profile_image" data-dz-thumbnail id="uploadedImage" width="120px" height="120px">
    @endif
@endif
               </span>
                                    </div>
                                    <div class="d-none" id="dzPreviewContainer">
                                        <div class="dz-preview dz-file-preview">
                                            
                                            
                                                <div class="dz-photo">
                                                    <img class="img-circle elevation-2" src="" data-dz-thumbnail id="uploadedImage" >
                                                         
                                                </div>
                                               
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="invalid-feedback fw-bold">Please upload an image.</div>
                            </div>
                            
                                                                
                                                                <div class="form-group">
                                                                    <label>Name:</label>
                                                                    <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" />
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <label>Email Address:</label>
                                                                    <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <button id="submitButton" class="btn btn-primary">Save</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                 
                                                <div class="card card-primary">
                                                    <div class="card-header">
                                                        <h3 class="card-title">SMTP Mail Configuration</h3>
                                                    </div>
                                                </div>
                                              
                                                    <form id="smtpForm" action="{{ route('save-smtp') }}" method="post">
                                                        @csrf
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label>SMTP Host:</label>
                                                                <input type="text" class="form-control" name="smtp_host" value="{{ $smtpHost }}"/>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>SMTP Port:</label>
                                                                <input type="text" class="form-control" name="smtp_port" value="{{ $smtpPort }}"/>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>USERNAME:</label>
                                                                <input type="text" class="form-control" name="username" value="{{ $username }}" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>PASSWORD:</label>
                                                                <input type="text" class="form-control" name="password" value="{{ $password }}" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>FROM MAIL ADDRESS:</label>
                                                                <input type="text" class="form-control" name="from_mail_address" value="{{ $fromMailAddress }}" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label>ENCRYPTION:</label>
                                                                <input type="text" class="form-control" name="encryption" value="{{ $encryption }}" />
                                                            </div>
                                                            <div class="form-group">
                                                                <button id="saveButton" onclick="saveSmtp()" class="btn btn-primary">Save</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <form id="heading1Form" action="{{ route('heading1') }}" method="post">
                                     @csrf
                                     <div class="row">
                                            <div class="col-md-12">
                                                <div class="card card-primary">
                                                    <div class="card-header">
                                                        <h3 class="card-title">In DB Heading</h3>
                                                    </div>
                                                
                                                    <div class="form-group">
                                                    <textarea id="heading1" class="form-control" name="heading1" style="height: 300px">
                                                                    {{ $heading1->heading }}     
                                                     </textarea>
                                                    </div>
                                                    
                                                    <div class="card-body">
                                                        <div class="row">
                                                             <div class="form-group">
                                                                <label>Customer Name:</label>
                                                                <input type="text" class="form-control" value=[customername] disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="card-body">
                                                        <div class="row">
                                                             <div class="form-group">
                                                                <button id="saveHeading1" onclick="saveHeading1()" class="btn btn-primary">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                        
                                        
                                         <form id="heading2Form" action="{{ route('heading2') }}" method="post">
                                     @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card card-primary">
                                                    <div class="card-header">
                                                        <h3 class="card-title">In not DB Heading</h3>
                                                    </div>
                                                
                                                    <div class="form-group">
                                                    <textarea id="heading2" class="form-control" name="heading2" style="height: 300px">
                                                                 {{ $heading2->heading }}             
                                                     </textarea>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                             <div class="form-group">
                                                                <button id="saveHeading2" onclick="saveHeading2()" class="btn btn-primary">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    
                                </section>

                            </div>

                    </div>
                </div>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
                
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
                parallelUploads: 1,
                maxFiles: 1,
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
                    // setTimeout(function() {
                    //     $('#successMessage').removeClass('d-none');
                    // }, 600);
                    console.log('Data Saved');
                }
            });

           
            
            $('#submitButton').on('click', function(event) {
    event.preventDefault();
    var $this = $(this);
    
    // show submit button spinner
    $this.children('.spinner-border').removeClass('d-none');
    
    // validate form & submit if valid
    if ($('#formDropzone')[0].checkValidity() === false) {
        event.stopPropagation();

        // show error messages & hide button spinner    
        $('#formDropzone').addClass('was-validated'); 
        $this.children('.spinner-border').addClass('d-none');

        // if dropzone is empty show error message
        if (!myDropzone.getQueuedFiles().length > 0) {                        
            $('.dropzone-drag-area').addClass('is-invalid').next('.invalid-feedback').show();
        }
    } else {
        var formData = new FormData();
        
        // Collect form data
        $('#formDropzone').serializeArray().forEach(function(field) {
            formData.append(field.name, field.value);
        });

        // Collect files
        myDropzone.getQueuedFiles().forEach(function(file) {
            formData.append('files[]', file);
        });

        // Send data to the server
        $.ajax({
            url: "{{ route('profile-setting') }}",
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
                
                window.location.href = "{{ route('setting') }}";

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




   function saveSmtp(){
        // Serialize form data
        var formData = $('#smtpForm').serialize();
        console.log(formData);

        // Send Ajax request
        $.ajax({
            url: "{{ route('save-smtp') }}",
            type: 'post',
            data: formData,
            success: function(response) {
               console.log('save');
            },
            error: function(error) {
                // Handle error response
                console.log(error.responseJSON);
                // Optionally, update the UI or show an error message
            }
        });
    }

     
        function saveHeading1() {
        // Get the updated content from the textarea
        var updatedHeading = $('#heading1').val();

        // Send Ajax request
        $.ajax({
            url: "{{ route('heading1') }}",
            type: 'post',
            data: {
                heading1: updatedHeading
            },
            success: function(response) {
                console.log('save');
            },
            error: function(error) {
                // Handle error response
                console.log(error.responseJSON);
                // Optionally, update the UI or show an error message
            }
        });
    }


function saveHeading2() {
        // Get the updated content from the textarea
        var updatedHeading = $('#heading2').val();

        // Send Ajax request
        $.ajax({
            url: "{{ route('heading2') }}",
            type: 'post',
            data: {
                heading1: updatedHeading
            },
            success: function(response) {
                console.log('save');
            },
            error: function(error) {
                // Handle error response
                console.log(error.responseJSON);
                // Optionally, update the UI or show an error message
            }
        });
    }


    </script>
    
    @endsection
    
    