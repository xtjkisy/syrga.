<form action="action_page.php" method="post">
  <div class="imgcontainer">
    <body bgcolor="purple">
      <script type="text/javascript">
function display(form){
if (form.username.value=="syrga") { 
  if (form.password.value=="123456") {              
          location="dama.php" 
           } else {
             alert("Invalid Password")
             }
        } else {  alert("Invalid Username")
          }
      }
   </script>   
    </body>
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <a href="dama.php">
    
  
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

