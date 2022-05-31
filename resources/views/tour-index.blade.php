<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Booking Form</title>
</head>
<body>
    <div class="container" style="width:40%">
        <h2>Tour Booking Form</h2>
        
        <div>
        @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif
        </div>

        <form method="POST" action="{{url('tour-save')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name*:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{request()->input('name',old('name'))}}">
            <br>
        </div>

        <div class="form-group">
            <label for="email">Email*:</label>
            <input type="text" id="email" name="email" class="form-control" value="{{request()->input('email',old('email'))}}">
            <br>
        </div>

        <div class="form-group">
            <label for="phone">Phone*:</label>
            <input type="text" id="phone" name="phone" class="form-control" value="{{request()->input('phone',old('phone'))}}">
            <br>
        </div>

        <div class="form-group">
            <label for="date">When are you planning to visit?(from-to):</label>
            <br>
            <input type="date" id="from" name="from">
            <input type="date" id="to" name="to">
            <br>
        </div>

        <div class="form-group">
            <label for="people">How many people are in your group?</label>
            <br>
            <input type="number" id="people" name="people" value="{{request()->input('people',old('people'))}}" min="1" max="20">
            <br>
        </div>

        <div class="form-group">
            <label for="tour">Which tours or events are you most interested in?</label>
            <br>
            <input type="text" id="tour" name="interest" class="form-control" value="{{request()->input('tour',old('tour'))}}">
            <br>
        </div>

        <div class="form-group">
            <p>What is the best way to contact you?</p>
            <input type="checkbox" id="contact1" name="contact[]" value="Phone">
            <label for="contact1">Phone</label><br>
            <input type="checkbox" id="contact2" name="contact[]" value="Email">
            <label for="contact2">Email</label><br>
            <input type="checkbox" id="contact3" name="contact[]" value="Other">
            <label for="contact3">Other</label><br><br>
        </div>

        <div class="form-group">
            <label for="file">Attach file:</label>
            <input type="file" id="file" name="file" value="{{request()->input('file',old('file'))}}"> 
            <br>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>

        </form>
    </div>

</body>
</html>