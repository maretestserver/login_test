<?php 
class login_user
{
	protected $ime_prezime;
    protected $user_name;
    protected $sifra;

    public function __construct($input = false)
    {
        if(is_array($input))
        {
            foreach ( $input as $k=>$value)
            {
                $this->$k = $value;
            }
        }
    }

    //get id of the user
    public static function getidUser($email, $sifra)
    {
        $konekcija= Database::getConnection();
        
//      
        $sifra = hash_hmac('sha512', $sifra,SITE_KEY);
        $id= '';
        $query ="SELECT id FROM data_user WHERE email='".$email."' AND sifra_korisnik='".$sifra."' AND vazi_do IS NULL AND status='A' LIMIT 1";
        
      
        $result_query = $konekcija->query($query);
        while($result = $result_query->fetch_array(MYSQL_ASSOC))
        {
            $id = $result['id'];
        }
        if(!$id)
        {
             return false;
        }
        else 
        {
            return $id;
        }
    }

    //uzimaju se podaci logovanog korisnika, prosledjuju se id od funkcija uzmiIdKorisnika($user_name, $sifra)
    //podaci se pozivaju u funkcija.php (include/function.php)
     public static function logIN($id)
    {
        $konekcija = Database::getConnection();
        
            $query = "SELECT  id,ime, email FROM logovan_korisnik WHERE id=$id";
            $result_obj = $konekcija->query($query);
            while($result =  $result_obj->fetch_array(MYSQL_ASSOC))
            {
              
                $_SESSION['ime'] = $result['ime'];
                $_SESSION['id'] = $result['id'];
                $_SESSION['email'] = $result['email'];
             
              
                
            }
            $rezultat = "{$_SESSION['ime']}";
        
        return $rezultat; 
    }


	//unisti sve sesije
    public static function logout()
    {
    	unset($_SESSION['ime']);
        unset($_SESSION['id']);
        unset($_SESSION['email']);
    }

    //provera pristupa koristio za linkove

    public static function pritup()
    {
    	if(isset($_SESSION['id']))
    	{
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }
}
?>