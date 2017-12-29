<?php
class Usuarios{
 
    private $conn;
    private $table_name = "usuarios";
 
    public $id;
    public $name;
    public $description;
    public $created;
 
    public function __construct($db){
        $this->conn = $db;
    }
 
    public function readAll(){
        
        $query = "SELECT
                    id, name, description
                FROM
                    " . $this->table_name . "
                ORDER BY
                    name";
 
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
 
        return $stmt;
    }
	
	
	public function read(){
	 
		
		$query = "SELECT
					id, name, description
				FROM
					" . $this->table_name . "
				ORDER BY
					name";
	 
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
	 
		return $stmt;
}

function create(){
 
    $query = "INSERT INTO
                " . $this->table_name . "
            SET
                name=:name, description=:description,created=:created";
 
    $stmt = $this->conn->prepare($query);
 
    $this->name=htmlspecialchars(strip_tags($this->name));
    $this->description=htmlspecialchars(strip_tags($this->description));
    $this->created=htmlspecialchars(strip_tags($this->created));
 
    $stmt->bindParam(":name", $this->name);
    $stmt->bindParam(":description", $this->description);
    $stmt->bindParam(":created", $this->created);
 
    if($stmt->execute()){
        return true;
    }
 
    return false;
     
}

}
?>
