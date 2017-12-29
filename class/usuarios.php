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

function readOne(){
 
    $query = "SELECT
                u.id, u.name, u.description, u.price, u.created
            FROM
                " . $this->table_name . " u
                
            WHERE
                p.id = ?
            LIMIT
                0,1";
 
    $stmt = $this->conn->prepare( $query );
 
    $stmt->bindParam(1, $this->id);
 
    $stmt->execute();
 
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
}
}
?>