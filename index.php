<html>
<head>

<title>Login paget</title>
  </head>
   <style>
	body {
		background: #000 url(asd.png);
 </body>
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
<body>  
    <center> <h1> Student Login Form </h1> </center> 
    <form>
        <div class="container"> 
            <label>Username : </label> 
            <input type="text" placeholder="Enter Username" name="username" required>
            <label>Password : </label> 
            <input type="password" placeholder="Enter Password" name="password" required>
            <button type="submit">Login</button> 
            <input type="checkbox" checked="checked"> Remember me 
            <button type="button" class="cancelbtn"> Cancel</button> 
            Forgot <a href="#"> password? </a> 
        </div> 
    </form>   
</body>   
</html>
