<?php 
//kreira se token za proveru token
$salt = 'Kji*&#hdhf4*jJSYS9dj'.time();
$token = sha1(mt_rand(1, 1000000).$salt);
$_SESSION['token'] = $token;
?>
<div class='col-md-4'>
<form  method="post" action="<? echo $_SERVER['PHP_SELF']?>"  >
	  <div class="form-group">
	  	<label>Enter Email adresu</label>
	  	<input type ='email' class="form-control form-control-lg" name ='email_user' id='email_user' value=''  >
	  	<label>Enter password</label>
	  	<input type ='password' class="form-control " name ='password_user' id='password_user' value='' >
	 <br>
	 <input type="hidden" name="token" value="<?php echo $token; ?>"  id="log_token">
	 <button type="button" class="btn btn-primary" onclick="login_user();">Log In</button>
	  </div>
</form>
</div>

<script>
	function login_user()
	{
		var token = $('#log_token').val();
	    var email_user = $('#email_user').val();
	    var password_user = $('#password_user').val();
	    // alert(password_user);
	    // return;
	     $.ajax({
			type:"POST",
			
			url:"include/function.php?funkcija=userlogin",
			data:{token:token, email_user:email_user,password_user:password_user },
                        success: function (ret)
                        {
                            var data = JSON.parse(ret);
                            if(data.flag==false)
                            {
                                alert(data.poruka);
                            }
                            else
                            {
                                //alert(data.poruka);
                               window.location = "index.php?pages=search";
                            }

                        }
			});
	}

</script>