<html>
<head>
<body bgcolor="purple">

<title>Login paget</title>
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
<body >
<center>
<form >
<input type="text" name="username" /><br><br>
<input type="password" name="password"/><br><br>
<input type="button" value="Login" onClick="display(this.form)"/>
<center>
</form>
