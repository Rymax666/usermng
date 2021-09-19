<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laravel 8 | Login </title>
    <style>
        body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: #1B2631;
}

.box{
  width: 300px;
  padding: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: #191919;
  text-align: center;
  border-radius: 20px 20px;
}
.box h1{
  color: white;
  text-transform: uppercase;
  font-weight: 500;
  background: linear-gradient(
    to right,
    hsl(1 100% 50%),
    hsl(100 100% 50%)
  );
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-align: center;
}
.box input[type = "text"],.box input[type = "password"]{
  border:0;
  background: none;
  display: block;
  margin: 5px auto;
  text-align: center;
  border: 2px solid #D4AC0D;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.5s;
}
.box input[type = "text"]:focus,.box input[type = "password"]:focus{
  border-color: #A04000;
  width: 250px;
}
.box input[type = "text"]:hover,.box input[type = "password"]:hover{
  border-color: #A04000;
}
.box input[type = "submit"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #D4AC0D;
  padding: 14px 40px;
  outline: none;
  color: white;
  transition: 0.25s;
  cursor: pointer;
}
.box input[type = "submit"]:focus{
  border-color: #D4AC0D;
}
.box input[type = "submit"]:hover{
  background: #D4AC0D;
  border-radius: 24px;
}

a {
  font-family: "Dank Mono", ui-monospace, monospace;
  background: linear-gradient(
    to right,
    hsl(98 100% 62%),
    hsl(204 100% 59%)
  );
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-align: center;
}

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
      @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      @if(session()->has('logingagal'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('logingagal') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <form class="box" action="/login" method="post">
      @csrf
      <h1>Login</h1>
      <input type="text" name="username" placeholder="username" required autofocus value="{{ old('username') }}">
      <input type="password" name="password" placeholder="password" required>
      <input type="submit" value="Login">
      <a href="/register">Register</a>
    </form>
</div>
   </body>
</html>
