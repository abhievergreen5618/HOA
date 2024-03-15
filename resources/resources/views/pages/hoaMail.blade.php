  @extends('layouts.master')
        
        @section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">


        <div class="content-wrapper">
            <div class="container-fluid">
                
                 <section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
                                        @if(session('status'))
                                                    <div class="alert alert-success">
                                                {{ session('status') }}
                                                    </div>
                                                @endif
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
<li class="breadcrumb-item active">Mail</li>
</ol>
</div>
</div>
</div>
</section>

                
<section class="content">
<div class="container-fluid">
<div class="row">


<div class="col-md-3">
<a href="{{ route('user-hoa-list') }}" class="btn btn-primary btn-block mb-3 " style="display:flex;"><i class="fa-solid fa-arrow-left" style="padding:10px;"></i> <p style="margin:0px; padding:6px 0px;">Back to User HOA List</p></a>
<div class="card">
<div class="card-header">
<h3 class="card-title">Folders</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
</div>
</div>
<div class="card-body">
<ul class="nav nav-pills flex-column">


<div class="form-group">
    <label>HOA Name:</label>
    <input type="text" class="form-control" value=[hoa_name] disabled>
</div>


<div class="form-group">
    <label>Email:</label>
    <input type="text" class="form-control" value=[email] disabled>
</div>


<div class="form-group">
    <label>Phone:</label>
    <input type="text" class="form-control" value=[phone] disabled>
</div>


<div class="form-group">
    <label>Contact Person:</label>
    <input type="text" class="form-control" value=[contact_person] disabled>
</div>


</div>

</div>



</div>


<div class="col-md-9">
<div class="card card-primary card-outline">
<div class="card-header">
<h3 class="card-title">Compose New Message</h3>
</div>


<div class="card-body">
    
<div class="form-group">
To: <input class="form-control" placeholder="to" name="email" value={{ $item->email }} required>
@error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
</div>
<div class="form-group">
Subject: <input class="form-control " placeholder="subject" id="subject" required>
@error('subject')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
</div>

<div class="form-group">
<textarea id="compose-textarea" class="form-control" name="email_content" style="height: 300px">
                        
                      
                    </textarea>
</div>

</div>


<div class="card-footer">
<div class="float-right">
<!--<button type="button" class="btn btn-default" onclick="replaceName()"><i class="fas fa-pencil-alt"></i> Draft</button>-->
<button type="submit" id="sb" class="btn btn-primary" onclick="sendMail()"><i class="far fa-envelope"></i> Send</button>
</div>
<!--<button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Discard</button>-->
</div>

</div>

</div>

</div>

</div>
</section>

</div>
</div>


    <script>
        
        function sendMail() {

    

       
    var to = document.querySelector('input[placeholder="to"]').value;
    console.log(to);
    var subject = document.getElementById('subject').value;
    
     var emailContent = $("#compose-textarea").val();
     
      // Validation: Check if 'To' and 'Subject' are empty
    if (to.trim() === '' && subject.trim() === '') {
        alert('Please fill both "To" and "Subject" fields.');
        return;
    } else if (to.trim() === '') {
        alert('Please fill "To" field.');
        return;
    } else if (subject.trim() === '') {
        alert('Please fill "Subject" field.');
        return;
    }

        
        // Replace [email] with the actual name value
        var email = emailContent.replace("[email]", "{{$item->email}}");

        // Replace [name] with the actual name value
        var phone = emailContent.replace("[phone]", "{{$item->phone}}");
        
        
        // Replace [name] with the actual name value
        var hoa = emailContent.replace("[hoa_name]", "{{$item->hoa_name}}");
        
        // Replace [name] with the actual name value
        var contact_person = emailContent.replace("[contact_person]", "{{$item->contact_person}}");
        
       var content = emailContent
  .replace("[email]", "{{$item->email}}")
  .replace("[phone]", "{{$item->phone}}")
  .replace("[hoa_name]", "{{$item->hoa_name}}")
  .replace("[contact_person]", "{{$item->contact_person}}")

console.log(content);

   
    var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content; // Get CSRF token from meta tag
    $("#sb").html('<i class="far fa-envelope"></i> Sending Please Wait').prop('disabled', true);
    $.ajax({
        type: 'POST',
        url: "{{ route('send-hoa-mail') }}", 
        data: {
            email: to,
            subject: subject,
            content: content,
        },
        headers: {
            'X-CSRF-TOKEN': csrfToken, // Include the CSRF token in the headers
        },
        success: function(response) {
            console.log(response.message);
            alert('Email sent Successfully');
            $("#sb").html('<i class="far fa-envelope"></i> Send Email').prop('disabled', false);
            // Optionally, close the modal or show a success message
        },
        error: function(error) {
            console.error('Error sending email:', error);
        }
    });
}

        
    </script>

@endsection
