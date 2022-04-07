<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="text-center">Registration Form</h2>
  <form class="form-horizontal" action="{{url('/')}}/register" method="Post">
  @csrf
  <!-- <pre>
      @php 
      print_r($errors->all());
      @endphp
</pre> -->
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  placeholder="Enter name" value="{{old('name')}}" name="name">
        <span class="text-danger">
            @error('name')
            {{$message}}
            @enderror
</span>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" value="{{old('email')}}"  placeholder="Enter email" name="email">
        <span class="text-danger">
            @error('email')
            {{$message}}
            @enderror
</span>
      </div>
      
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control"  placeholder="Enter password" name="password">
        <span class="text-danger">
            @error('password')
            {{$message}}
            @enderror
</span>
      </div>
     
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="cpsw">confirm Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" placeholder="confirm password" name="password_confirmation">
        <span class="text-danger">
            @error('password_confirmation')
            {{$message}}
            @enderror
</span>
      </div>
      
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
