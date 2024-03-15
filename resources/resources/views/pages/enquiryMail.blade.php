  @extends('layouts.master')
        
        @section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">


        <div class="content-wrapper">
            <div class="container-fluid">
                
                 <section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1></h1>
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
<a href="{{ route('enquiry-list') }}" class="btn btn-primary btn-block mb-3">Back to Enquiry List</a>
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
    <label>Name:</label>
    <input type="text" class="form-control" value=[name] disabled>
</div>



<div class="form-group">
    <label>Email:</label>
    <input type="text" class="form-control" value=[email] disabled>
</div>



<div class="form-group">
    <label>Phone:</label>
    <input type="text" class="form-control" value=[phone] disabled>
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
To: <input class="form-control" placeholder="to" name="email" value={{ $item->email }}>
</div>
<div class="form-group">
Subject: <input class="form-control " placeholder="subject" id="subject" name="subject">
</div>
<div class="form-group">
<textarea id="compose-textarea" class="form-control" name="email_content" style="height: 300px">
                        
                      
                    </textarea>
</div>

</div>


<div class="card-footer">
<div class="float-right">
<button type="submit" class="btn btn-primary" onclick="sendMail()"><i class="far fa-envelope"></i> Send</button>
</div>
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

    
     var emailContent = $("#compose-textarea").val();

        // Replace [name] with the actual name value
        var name = emailContent.replace("[name]", "{{$item->name}}");
        
        // Replace [email] with the actual name value
        var email = emailContent.replace("[email]", "{{$item->email}}");

        // Replace [name] with the actual name value
        var phone = emailContent.replace("[phone]", "{{$item->phone}}");
        
       var content = emailContent
  .replace("[name]", "{{$item->name}}")
  .replace("[email]", "{{$item->email}}")
  .replace("[phone]", "{{$item->phone}}");

console.log(content);

   
    var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content; // Get CSRF token from meta tag
    $("#sb").html('<i class="far fa-envelope"></i> Sending Please Wait').prop('disabled', true);
    $.ajax({
        type: 'POST',
        url: "{{ route('send-email') }}",
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
