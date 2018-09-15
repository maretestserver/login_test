<div class='col-md-4'>
<form  method="post" action="<? echo $_SERVER['PHP_SELF']?>"  >
	  <div class="form-group">
	  	<label>Enter Email adresu</label>
	  	<input type ='email' class="form-control form-control-lg" name ='email_user' id='email_user' value=''  ><br>
	  	<label>Enter name:</label>
	  	<input type ='text' class="form-control form-control-lg" name ='name_user' id='name_user' value=''  ><br>
	  	<label>Enter password</label>
	  	<input type ='password' class="form-control " name ='password_user' id='password_user' value='' >
		<br>
		<label>Repeat password</label>
		<br>
	  	<input type ='password' class="form-control " name ='password_user_repeat' id='password_user_repeat' value='' >
	 <br>
	 <button type="button" class="btn btn-primary" onclick="login_user();">Log In</button>
	  </div>
</form>
</div>

