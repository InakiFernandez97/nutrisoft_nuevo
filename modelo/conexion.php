
<?php 

class ConexionMysql
{
    static public function ConectarMysql(){
        try {
            // Configuración optimizada para LiteSpeed
            $opciones = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::ATTR_PERSISTENT => false,  // Evitar problemas con persistent connections en LiteSpeed
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci",
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true
            );

            if (!defined('DB_HOST')) {
                require_once dirname(__DIR__) . '/config.php';
            }

            $dsn = sprintf(
                "mysql:host=%s;port=%s;dbname=%s;charset=utf8mb4",
                DB_HOST,
                DB_PORT,
                DB_NAME
            );
            
            $link = new PDO(
                $dsn,
                DB_USER,
                DB_PASS,
                $opciones
            );
            
            return $link;
            
        } catch(PDOException $e) {
            // Log del error y propagar excepción para que el controlador responda JSON
            error_log("Error de conexión BD: " . $e->getMessage());
            throw new Exception("Error de conexión a la base de datos.");
        }
    }
}

/*

class Conexion
{
    private static $db = 'TREK_BACKUP';    
    private static $server = "192.140.56.137";#servidor\instancia,numero de puerto( por defecto es 1433 )
    private static $user = 'UsuTrekR2018';
    private static $passwd = 'PassTrek2022.,R';
    private static $cont  = null;
    private static $conec_info=  null;

    public function __construct() {
        die('Init function is not allowed');
    }
    public static function Conectar()
    {
       if ( null == self::$cont )
       {     
        try
        {
          self::$conec_info = array("Database"=> self::$db ,"UID"=> self::$user ,"PWD"=> self::$passwd );
         self::$cont =   mysql_connect( self::$server, self::$conec_info ); 

         
        }
        catch(PDOException $e)
        {
          die($e->getMessage()); 
        }
       }
       return self::$cont;
    }
    public static function Desconectar()
    {
        sqlsrv_close( self::$cont );
        self::$cont = null;
    }
}
*/