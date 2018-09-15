<?php
/*
*@author Marko Stankov
*/
define("SITE_KEY", "d0d48339c3b82db41^&*Slk(Ks@a1c1fd3e2792605d3cbfda1HEM54!!");

//Loduj sadržaj i foldera pages/naziv stranice.php
function loadContent($where,$content)
{
    $where = filter_input(INPUT_GET, $where, FILTER_SANITIZE_STRING);
    $content = filter_var($content, FILTER_SANITIZE_STRING);
    //ako je gde prazno, onda je je stranica $Content ako nije onda je default kja stavimo
    $where = (empty($where)? $content:$where);
    if($where)
    {
        $html = include 'pages/'.$where.'.php';
        return $html;
    }
}

//autoload svih klasa

function __autoload($class_name)
{
	try
	{
		$class_file = 'classes/'.$class_name.'.php';
		if(is_file($class_file))
		{
			require_once $class_file;
		}
		else
		{
			throw new Exception("Greška pri učitavanju $class_name u fajlu $class_file");
		}
	}
	catch(Exception $e)
	{
		$e->getMessage();
	}

}


	function userlogin()
	{
		$ret = new stdClass();
        $flag = true; 
        $poruka ='';
	    $token = $_POST['token'];
	    $email_user = $_POST['email_user'];
	    $password_user = $_POST['password_user'];

	    if($flag)
    	{
    		$flag = ($email_user =='') ? false: $flag;
    		$poruka = ($flag) ? $poruka : "Enter your email addres "; 
    	}
        if($flag)
    	{
    		$flag = ($password_user=='') ? false:$flag;
    		$poruka = ($flag) ? $poruka : "Enter your password"; 
    	}

    	 if($flag)
    	 {
         if(!isset($token) || empty($token) )
        {
            $flag = false;
            $poruka= "Error ";
        }
        else
        {
        	$id = login_user::getidUser($email_user, $password_user);
        	if(empty($id))
            {
               $flag = false;
               $poruka=  "Wrong username or password";
            }
            else
            {
            	if($flag)
                {
                $flag = true;
                
                $poruka = login_user::logIN($id);
            }
        }
    }
}

	    $ret->flag = $flag;
        $ret->poruka = $poruka;
        $answer= json_encode($ret);
      	echo $answer;
        exit;

}
if(isset($_REQUEST['funkcija']) && $_REQUEST['funkcija']=='userlogin')
{
	userlogin();
	return;
}


?>