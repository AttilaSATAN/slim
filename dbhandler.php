<?php
class DbHandler {
 
    private $conn;
 
    function __construct() {
        require dirname(__FILE__) . '/dbconnect.php';
    // opening db connection
        $db = new DbConnect();
        $this->conn = $db->connect();
    }
    public function iller() {
//       	$stmt = $this->conn->prepare("SELECT * from il");
//        $stmt->execute();
//	$result = $stmt->get_result();
//	while ($data = $result->fetch_assoc())
//	{
//    		$iller[] = $data;
//	}
 	$res = $this->conn->query('SELECT * from il');      
	while ($bandArr = $res->fetch_assoc()) {
  		$iller[] = $bandArr;
	}
	return $iller; 
    	}
}
?>
