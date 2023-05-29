<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
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
      
      <div class="form-group">
        <form action="{{ route('forgot-password.reset')}}" method="POST">
          @csrf
        <div class="row m-auto" style="width: 80%;">
          <input type="hidden" name="id" id="" value="{{ $user->id }}">
          <label>
            <span>New Password</span>
          </label>
          <div class="col-lg-11">
            <input type="password" id="password" name="password"/>
          </div>
          <div class="col-lg-1">
            <img src="{{ asset('frontend/assets/img/view.png')}}" style="width: 20px" id="eye_icon_password" class="notif-box-none">
          </div>
        </div>
        <div class="row m-auto" style="width: 80%;">
          <label>
            <span>Confirm Password</span>
          </label>
          <div class="col-lg-11">
            <input type="password" id="confirm_password" name="confirm_password"/>
          </div>
          <div class="col-lg-1">
            <img src="{{ asset('frontend/assets/img/view.png')}}" style="width: 20px" id="eye_icon_password_confirm">
          </div>
        </div>
      </div>
      <button type="submit" class="submit">Reset</button>
    </form> 
    </div>

  </div>
  
</header>
<script>
  var input_password = document.getElementById('password');
  var input_password_confirm = document.getElementById('confirm_password');
  const notif_box = document.getElementById('notif_box');

  check_input();

  input_password.addEventListener("keyup", function(event){
    check_confirm();
    check_input();
  })

  input_password.addEventListener("keydown", function(event){
    check_confirm();
    check_input();
  });

  input_password_confirm.addEventListener("keyup", function(event){
    check_confirm();
    check_input();
  })

  input_password_confirm.addEventListener("keydown", function(event){
    check_confirm();
    check_input();
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

  
  const eyeIconPassword = document.getElementById('eye_icon_password');
  const eyeIconPasswordConfirm = document.getElementById('eye_icon_password_confirm');
  
  function check_input(){
    const eyeIconPassword = document.getElementById('eye_icon_password');
    const eyeIconPasswordConfirm = document.getElementById('eye_icon_password_confirm');
    
    if (!(input_password.value == "")) {
      eyeIconPassword.className = "";
    }else{
      eyeIconPassword.className = "notif-box-none";
    }

    if (!(input_password_confirm.value == "")) {
      eyeIconPasswordConfirm.className = "";
    }else{
      eyeIconPasswordConfirm.className = "notif-box-none";
    }
  }
  eyeIconPassword.addEventListener("click",  () => {
    input_password.type = input_password.type === "password" ? "text" : "password";
  });

  eyeIconPasswordConfirm.addEventListener("click", () => {
    input_password_confirm.type = input_password_confirm.type === "password" ? "text" : "password";
  })
</script>

</body>
</html>
