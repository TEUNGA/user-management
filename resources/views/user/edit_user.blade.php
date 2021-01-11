<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<div class="container">
    <div class= "row">
        <div class ="offset-2 col-md-8 mt-5">
            <div class ="card">
                <div class="card-header">
                <span class="h4"> Update User 
               
                    <div class="card-body">
                    <form method="post" action="{{ route('user.update', $user->id) }}">
                    @csrf
                    @method('post')
                    
  <div class="form-group">
    <label for="user_name">Name</label>
    <input type="text" name="user_name" value="{{$user->user_name}}" class="form-control" id="user_name" aria-describedby="namehelp" >
  </div>
  <div class="form-group">
    <label for="email_adress">Email address</label>
    <input type="email" name="email_adress" value="{{$user->email_adress}}"class="form-control" id="email_adress" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="phone_number">Phone Number</label>
    <input type="number" name="phone_number" value="{{$user->phone_number}}" class="form-control" id="phone_number" placeholder="Phone Number">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>