<html>
<head>
<body bgcolor="yellow">

<title>Login paget</title>
</head>
<script type="text/javascript">
function display(form){
if (form.username.value=="root") { 
  if (form.password.value=="root") {              
          location="dama.php" 
           } else {
             alert("Invalid Password")
             }
        } else {  alert("Invalid Username")
          }
      }
   </script>   
<body >

<form >
<input type="text" name="username" /><br><br>
<input type="password" name="password"/><br><br>
<input type="button" value="Login" onClick="display(this.form)"/>

</form>
