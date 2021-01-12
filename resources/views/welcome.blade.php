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
                <span class="h4"> {{auth()->user()->role }} : {{auth()->user()->name }}
                <a class="btn btn-primary float-right" href="/user/create"> + </a></span>
                </div>
                                   <div> <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </div>
                <div >
                    <div class="card-body">
                    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email Adress</th>
      <th scope="col">Phone number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>


  @php
    $count = 1;
  @endphp

  @foreach($users as $user)
     
    <tr>
      <th scope="row">{{$count}}</th>
      <td>{{$user->user_name}}</td>
      <td>{{$user->email_adress}}</td>
      <td>{{$user->phone_number}}</td>
      <td>
      <a href="{{route('user.edit', $user->id)}}" class="btn btn-sm btn-info"> Edit </a> 
      <a href="{{route('user.destroy',$user->id)}}" class="btn btn-sm btn-danger"> Delete </a>
      </td>
      @php
        $count += 1;
      @endphp
      @endforeach
      
    </tr>
   
  </tbody>
</table>
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