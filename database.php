<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of database
 *
 * @author Miroslav Sedy
 */
class database {
    
    private static $conn;
    
    public function connect(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "wapsql";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, "utf8");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed");
        } echo "Connected successfully";
    }
    
    public function select(){
        $query = mysqli_query(self::$conn,"SELECT 'jmeno', 'prijmeni', 'registrace', 'vuzFK' FROM vlastnik");
        $result = self::$conn->query($sql);
        

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"]. " - Name: " . $row["jmeno"]. " " . $row["prijmeni"]. " " . $row["registrace"]. " " . $row["vuzFK"].  "<br>";
    }
      } else {
      echo "0 results";
      
      }
        
        
    }
            
    public function insertVlastnik(){
        $query = mysqli_query("INSERT INTO vlastnik 'jmeno', 'prijmeni', 'registrace', 'vuzFK' VALUES ('John', 'Doe', '1979-03-08', '4')");
        echo "Vlozen novy zaznam do tabulky vlastnik <br>";
    }
    
    public function insertVuz(){
        $query = mysqli_query("INSERT INTO vozidla 'vozidlo' VALUES ('Mercedes-Benz SLK300')");
        echo "Vlozen novy zaznam do tabulky vozidla <br>";
    }
    
    public function update(){
       $query = mysqli_query("UPDATE vlastnik SET vuzFK='4' WHERE jmeno=Miroslav");
    }  
    
    
}