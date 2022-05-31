<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Booking Record</title>
</head>
<body>
    <div class="container" style="width:30%">
    <br>
    <h2>Booking Record</h2>
    <br>
    <div class="upper">
            @if(session('message'))
                <div class="alert alert-success">
                    <ul>
                        <li>{{session('message')}}</li>
                    </ul>
                </div><br/>
            @endif
    </div>
    <br>
    <ul>
        <li>
            <strong>Name:</strong>
            {{$name}}
        </li>

        <li>
            <strong>Email:</strong>
            {{$email}}
        </li>

        <li>
            <strong>Phone:</strong>
            {{$phone}}
        </li>

        <li>
            <strong>Date:</strong>
            <br>
            <strong>from:</strong>
            {{$from}}

            <strong>to:</strong>
            {{$to}}
        </li>

        <li>
            <strong>People:</strong>
            
            {{$people}}
        </li>

        <li>
            <strong>Tour Interest:</strong>
           {{$interest}}
           
        </li>
       
        <li>
            <strong>File:</strong>
            
            <img src="{{asset('storage/'.$file)}}" class="img-fluid">
        </li>
        
    </ul>
    </div>
</body>
</html>