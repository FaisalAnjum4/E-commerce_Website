
    <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}



.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Login Form For CUSTOMER</h2>

<form action="" method="post">
{{@csrf_field()}}
 

  <div class="container">
  Email: <input type="text" id="id" name="id" placeholder="Email" value="{{old('id')}}"><br>
        @error('id')
            {{$message}} <br>
        @enderror
        
        Password: <input type="password" id="password" name="password"><br>
        @error('password')
            {{$message}}<br>
        @enderror
        
    <button type="submit" id="submit" value="Sign In">Login</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn"><a href="/list">Cancel</a></button>
    <span class="psw"> <a href="/register">Don't Have An Account?</a></span>
  </div>
</form>

</body>
</html>

