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
		$e->getException();
	}

}


	function userlogin()
	{
		$ret = new stdClass();
        $flag = true; 
     
	    $token = $_POST['token'];
	    $email_user = $_POST['email_user'];
	    $password_user = $_POST['password_user'];

	    if($flag)
    	{
    		$flag = (empty($email_user)) ? false:$flag;
    		$poruka = ($flag) ? $poruka : "Enter your email addres "; 
    	}
    	 if($flag)
    	{
    		$flag = (trim($password_user=='')) ? false:$flag;
    		$poruka = ($flag) ? $poruka : "Enter your password"; 
    	}

	    $ret->flag = $flag;
        $ret->poruka = $poruka;
        echo json_encode($ret);
        exit();

}
if(isset($_REQUEST['funkcija']) && $_REQUEST['funkcija']=='userlogin')
{
	userlogin();
	return;
}


?>