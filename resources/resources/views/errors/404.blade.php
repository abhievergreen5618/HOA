<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            margin:0;
            padding:0;
        }
        .container {
                background-color: #0d1b44;
                color: white;
                height: 100vh;
        }
        .data-container {
                width: 50%;
                margin: auto;
                text-align: center;
        }
        .cardDiv
        {
            padding-top:30px;
        }
        
        .card-body {
            font-size:23px;
        }
    </style>
    </head>
    <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 data-container">
                <div class="cardDiv">
                    <div class="error-image">
                        <img src="{{asset('images/notfound.jpg')}}" alt="not found" style="width:350px; height:200px;">
                    </div>
                   

                    <div class="card-body">
                        <p>The data you are looking for does not exist or has been deleted by admin.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
