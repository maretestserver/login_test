 <?php 

/*
 * @author Marko Stankovic
 * @param IN
 * Konekovanje sa bazom preko propertija uzimamo podatke za bazu, uzimamo usera, sifru, naziv baze, naziv hosta
 * izbegavanje Sql inekcije
 * */
class database
{
    private static $_mysqluser='user_korisnik';
	private static $_mysqlPas = '1234567';
	private static $_mysqlDb = 'login_user';
	private static $_hostName= 'localhost';
	private static $_connection = NULL;
	

	private function __construct()
	{

	}

//kreiraj konekciju
	
	public static function getConnection()
	{
		if(!self::$_connection)
		{
			self::$_connection = @new mysqli(self::$_hostName, self::$_mysqluser, 
								 self::$_mysqlPas, self::$_mysqlDb);
			if(self::$_connection->connect_error)
			{
				die('Connect Error: '.self::$_connection->connect_error);
			}
		}
		return self::$_connection;
	}


	//priprema za izbegavanje mysql injection
	public static function prep($value)
	{
                //ako su magig quote aktivare ukloniti  kose crte
		if( get_magic_quotes_gpc())
		{
			$value = stripcslashes($value);
		}
		
                //izbegavanje specijalnih stringova da bi izbegli SQL inekciju
		$value = self::$_connection->real_escape_string($value);
		return $value;
	}
}