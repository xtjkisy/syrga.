<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <tittle>Login Page</tittle>
</head>
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
<body bgcolor="purple">

<form action="/form_login" method="post">
<h2></h2>Username:<br>
<input type="text" name='username'><br>
Password:<br>
<input name='password' ><br><br>
<input type="submit" value="Login">
</form>
<h1 >{{info}}</h1>

</body>
</html>

