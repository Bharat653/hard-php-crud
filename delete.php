<?php
include 'connection.php';
class YourClass {
    private $db;

    function __construct() {
        $servername = "localhost";
        $username = "root";
        $password = "";
                                
        try {
            $this->db = new PDO("mysql:host=$servername;dbname=project", $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo("connected succesfully");
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function deletecategory($id) {
        try {
            $query = "DELETE FROM `department` WHERE id = :id";
            $statement = $this->db->prepare($query);
            $statement->bindParam(':id', $id);
            $statement->execute();

            header("Location:department_data.php");
        } catch (PDOException $e) {
            echo "Failed to delete: " . $e->getMessage();
        }
    }
}

// Create an instance of the class
$yourObject = new YourClass();
$id = $_GET['deleteid'];
// Call the method on the instance
$yourObject->deletecategory($id); // Replace $yourCountryId with the actual country ID you want to delete

?>