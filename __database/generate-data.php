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
        $sql = 'INSERT INTO table_1 (col_1, col_2, col_3) VALUES (:col_1, :col_2, :col_3)';
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

$pdo = new PDO('mysql:host=localhost;dbname=test_db_1', 'root', '', array(PDO::ATTR_PERSISTENT => true));
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
