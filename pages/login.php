<div class='col-md-4'>
<form  method="post" action="<? echo $_SERVER['PHP_SELF']?>"  >
	  <div class="form-group">
	  	<label>Enter Email adresu</label>
	  	<input type ='email' class="form-control form-control-lg" name ='email_user' id='email_user' value=''  >
	  	<label>Enter password</label>
	  	<input type ='password' class="form-control " name ='password_user' id='password_user' value='' >
	 <br>
	 <button type="button" class="btn btn-primary" onclick="login_user();">Log In</button>
	  </div>
</form>
</div>

<script>
	function login_user()
	{
		var emails = $('#email_user').val();
		alert(emails);
	}

</script>