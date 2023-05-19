<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="{{ asset('frontend/assets/css/resetp.css')}}" rel="stylesheet">
</head>
<body>
  <div class="cont">
    <div class="form sign-in">
      <div style=" display:flex; justify-content: center; align-items: center;">
      <img src="{{ asset('frontend/assets/img/padlock.png')}}" alt="" style="width: 100px;">
      </div>
      <div class="notif-box-none" id="notif_box">
        <span id="notif-message"></span>
      </div>
      <label>
        <span>New Password</span>
        <input type="password" id="password"/>
      </label>
      <label>
        <span>Confirm Password</span>
        <input type="password" id="confirm_password" />
      </label>

      <button type="button" class="submit">Reset</button>
 
    </div>

  </div>
  
</header>
<script>
  var input_password = document.getElementById('password');
  var input_password_confirm = document.getElementById('confirm_password');
  const notif_box = document.getElementById('notif_box');

  input_password.addEventListener("keyup", function(event){
    check_confirm();
  })

  input_password.addEventListener("keydown", function(event){
    check_confirm();
  });

  input_password_confirm.addEventListener("keyup", function(event){
    check_confirm();
  })

  input_password_confirm.addEventListener("keydown", function(event){
    check_confirm();
  });

  function check_confirm(){
    if (!(input_password.value == "") && !(input_password_confirm.value == "")) {
      if(input_password.value == input_password_confirm.value){
        notif_box.className = "notif-box-valid"
        document.getElementById('notif-message').innerHTML =  "Nice! Confirm Password Matched"
      }else{
        notif_box.className = "notif-box-error"
        document.getElementById('notif-message').innerHTML =  "Error! Confirm Password Not Match"
      }
    } else {
      notif_box.className = "notif-box-none"

    }
  }
</script>

</body>
</html>
