<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styleLogin.css">
  <title>Login</title>
</head>
<body>
  
<form method="POST">
      <div class="form">
      <div class="title">Welcome</div>
      <div class="subtitle">Let's signIn your account!</div>
      <div class="input-container ic1">
        <input id="firstname" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="firstname" class="placeholder">Username</label>
      </div>
      <div class="input-container ic2">
        <input id="lastname" class="input" type="password" placeholder=" " />
        <div class="cut"></div>
        <label for="lastname" class="placeholder">Password</label>
      </div>
      <div class="input-container ic2">
        <!-- <input id="email" class="input" type="" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder">Level</label> -->

        <select name="cars" id="cars" class="input">
          <optgroup label="Swedish Cars">
            <option value="admin">Admin</option>
            <option value="kariawan">Karyawan</option>
          </optgroup>
        </select>
      </div>
      <button type="text" class="submit"><a href="/barang">submit</a></button>
    </div>
</form>
</body>
</html>