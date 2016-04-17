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
 
/**
 * @var conn "Staticka promenna, pomoci ktere se pripojuje do databaze"
 * @param connect "Pripojeni k databazi."
 * @var servername "Nazev serveru, ke kteremu se SQL pripojuje."
 * @var username "Jmeno uzivatele, pod kterym se prihlasujeme k databazi."
 * @var password "Heslo uzivatele, pod kterym se pripojujeme k databazi."
 * @var dbname "Jmeno databaze, do ktere se chceme pripojit."
 */    
    
    private static $conn;
    
    public function connect(){          // Pripojeni do databaze
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "wapsql";

        // Vytvoreni spojeni s databazi
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, "utf8");
        // Test spojeni
        if ($conn->connect_error) {
            die("Spojeni selhalo");
        } echo "Pripojeno";
    }
/**
 * @param select "Vyber prvku z databaze."
 * @var query "Promenna, ve ktere se provadi mysql prikaz."
 * @var result "Promenna, do ktere se uklada vysledek mysql prikazu."
 * 
 */
 
    public function select(){           // SELECT
        $query = mysqli_query(self::$conn,"SELECT 'jmeno', 'prijmeni', 'registrace', 'vuzFK' FROM vlastnik");
        $result = self::$conn->query(mysqli_querry);
        

    if ($result->num_rows > 0) {
    // Vypis kazdeho radku z tabulky
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"]. " - Name: " . $row["jmeno"]. " " . $row["prijmeni"]. " " . $row["registrace"]. " " . $row["vuzFK"].  "<br>";
    }
      } else {
      echo "0 results";
      
      }
        
        
    }
 
/**
 * @param insertVlastnik "Vkladani prvku do tabulky vlastnik."
 * @var query "Promenna, ve ktere se provadi mysql prikaz."
 */    
    
    public function insertVlastnik(){           //INSERT INTO VLASTNIK
        $query = mysqli_query("INSERT INTO vlastnik 'jmeno', 'prijmeni', 'registrace', 'vuzFK' VALUES ('John', 'Doe', '1979-03-08', '4')");
        echo "Vlozen novy zaznam do tabulky vlastnik <br>";
    }
 
/**
 * @param insertVuz "Vkladani prvku do tabulky vuz."
 * @var query "Promenna, ve ktere se provadi mysql prikaz."
 */      
    
    public function insertVuz(){            // INSERT INTO VUZ
        $query = mysqli_query("INSERT INTO vozidla 'vozidlo' VALUES ('Mercedes-Benz SLK300')");
        echo "Vlozen novy zaznam do tabulky vozidla <br>";
    }
 
/**
 * @param updateVlastnik "Zmena prvku v databazi."
 * @var query "Promenna, ve ktere se provadi mysql prikaz."
 */      
    
    public function updateVlastnik(){           // UPDATE VLASTNIK
       $query = mysqli_query("UPDATE vlastnik SET vuzFK='4' WHERE jmeno=Miroslav");
       echo "Zaznam v tabulce vlastnik byl uspesne upraven. <br>";
    }  
    
    
}