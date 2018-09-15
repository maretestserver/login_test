<?php
/*
*@author Marko Stankov
*/

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

?>