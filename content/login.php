<html>
<head>
    <title>Halaman Login</title>
</head>
<body>
 <h3 class="animasi2">Login Aplikasi</h3>
<div class="well animasi2">
<form class="form-horizontal" action="index.php?page=login-admin" method="post">
  <fieldset>
    <legend>Login</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" placeholder="Username" id="Yourname" name="username" value="Username" onblur="if(this.value=='') this.value='Username';" onfocus="if(this.value=='Username') this.value='';"  />
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input name="password" class="form-control" placeholder="password" type="password" id="password" value="Password" onblur="if(this.value=='') this.value='Password';" onfocus="if(this.value=='Password') this.value='';"  />
        </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <input type="submit" name="submit" id="submit" value="Login">
      </div>
    </div>
    </fieldset>
    </form>
    </div>
</body>
</html>