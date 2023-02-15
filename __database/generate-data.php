<?php

require_once('vendor/autoload.php');

class GenerateData 
{
    public $pdo;

    public function __construct($pdo)
	{
	    $this->pdo = $pdo;
		$this->faker = \Faker\Factory::create();
    }
  
    public function truncate($table_name='')
	{ 
      $stmt = $this->pdo->prepare("truncate table $table_name");
      $stmt->execute();
    }
  
    public function table_1($count)
	{
        $sql = 'INSERT INTO `table 1` (`col 1`, `col 2`, `col 3`) VALUES (:col_1, :col_2, :col_3)';
        $stmt = $this->pdo->prepare($sql);

        for ($i=0; $i < $count; $i++) {
            $stmt->execute([
                ':col_1' => $this->faker->firstName, 
                ':col_2' => $this->faker->lastName,    
                ':col_3' => $this->faker->email
            ]);
        }
    }
}


$config_array = explode("\n", file_get_contents(__DIR__.'/config'));
foreach($config_array as $config_each) {
	$config_each_explode = explode("=", $config_each);
	$config_name = $config_each_explode[0];
	$config_value = str_replace("'", "", $config_each_explode[1]);
	${$config_name} = $config_value;
	//echo $config_name.':'. $config_value.';' ;
}
//echo "DB Host Name: $db_host_name; DB User Name: $db_user_name; DB Password: $db_password; Database Name: $database_name";

$pdo = new PDO("mysql:host=$db_host_name;dbname=$database_name", "$db_user_name", "$db_password", array(PDO::ATTR_PERSISTENT => true));
$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
$generate_data = new GenerateData($pdo);

if(array_key_exists("1", $argv)) {
    $table_name = "$argv[1]";
    if(array_key_exists("2", $argv)) {
        $row_number = "$argv[2]";
    } else {
        $row_number = 1;
    }
    $generate_data->$table_name($row_number);
}
