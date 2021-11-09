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
 <h1>
<form >
 <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw">

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
<center>
<h1>
