<?php

    // datenbank initialisieren (nur einmal nötig)
    // Parameter: ($server, $user, $password, $database)
    $connection = new mysqli("localhost","spieler","spielerPw","gewinnspiel"); 

    // Test ob die Verbindung geklappt hat
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    
    
    // Beispiel für Webaufruf für Parameter
    // http://localhost/gewinnspiel/index_seb.php?id=2&hallo=test
    
    // --- Beispiel für ein Select für einen bestimmten Eintrag ---
    
    if(isset($_GET["opt"]))
    {
    	$option = $_GET["opt"];
    }
    else {
     	die("Fehler beim Verbinden zur Datenbank");
    }
    switch ($option) {
    	case "getUserById":
    		;
    		break;
    	case "getGamesByUser":
    		;
    		break;
    	case "getAllGames":
    		;
    		break;
    	case "getPrizeByGame":
    		;
    		break;
    	case "getHighscoreListByGame":
    		;
    		break;
    	case "getHighScoreListByUserGame":
    		;
    		break;
    	case "insertNewUser":
    		;
    		break;
    	case "updateUser":
    		;
    		break;
    	case "insertNewGame":
    		;
    		break;
    	case "updateGame":
    		;
    		break;
    			 
    			 
    			 
    	case "game":
    	
    	case "prize":
    	
    	default:
    		
    		break;
    }

    
     $statement = $connection->prepare("SELECT `ID`,`NAME`,`EMAIL` FROM `user` WHERE `ID` = ?"); // der SQL Befehl
     $statement->bind_param(
     "i", // Typ der ? parameter (i für Integer, s für String, d für double, b für blob) (Vorsicht Reihenfolge beachten!)
     $id // Werte für die ? Parameter als Variablen (Vorsicht Reihenfolge beachten!)
     );
    
     if($statement->execute()) // ein if auf das Ergebnis (wenns nich klappt kommt hier ein false)
     {
     $statement->bind_result($id, $name, $email); // Variablen an die das Ergebnis gebunden werden soll (Vorsicht Anzahl und Reihenfolge Wichtig!)
     $statement->fetch(); // Damit führen wir das ganze aus
     }
    
     // ein paar Testausgaben
     echo "-- Beispiel für einen einzelnen Select --<br>";
     echo "ID = $id <br>";
     echo "name = $name <br>";
     echo "Email = $email <br>";
    
     // Verbindung wieder beenden nich vergessen
     $statement->close();
     
    
     
     
    // --- Beispiel für ein Select für einen bestimmten Eintrag ---
    /*
    $id = 1;
    
    $statement = $connection->prepare("SELECT `name`,`boolean`,`email` FROM `tabelle` WHERE `id` = ?"); // der SQL Befehl
    $statement->bind_param(
        "i", // Typ der ? parameter (i für Integer, s für String, d für double, b für blob) (Vorsicht Reihenfolge beachten!)
        $id // Werte für die ? Parameter als Variablen (Vorsicht Reihenfolge beachten!)
    );
    
    if($statement->execute()) // ein if auf das Ergebnis (wenns nich klappt kommt hier ein false)
    {
        $statement->bind_result($name, $boolean, $email); // Variablen an die das Ergebnis gebunden werden soll (Vorsicht Anzahl und Reihenfolge Wichtig!)
        $statement->fetch(); // Damit führen wir das ganze aus
    }
    
    // ein paar Testausgaben
    echo "-- Beispiel für einen einzelnen Select --<br>";
    echo "Name = $name <br>";
    echo "Boolean = $boolean <br>";
    echo "Email = $email <br>";
    
    // Verbindung wieder beenden nich vergessen
    $statement->close();
    */
    
    
    
    
    // --- Beispiel für ein Select auf mehrere Einträge ---
    /*
    $statement = $connection->prepare("SELECT `name`,`boolean`,`email` FROM `tabelle`"); // der SQL Befehl
    // keine Parameter also auch kein bind Param nötig
    
    if($statement->execute()) // ein if auf das Ergebnis (wenns nich klappt kommt hier ein false)
    {
        $statement->bind_result($name, $boolean, $email); // Variablen an die das Ergebnis gebunden werden soll (Vorsicht Anzahl und Reihenfolge Wichtig!)
        
        echo "<br>-- Beispiel für einen multi Select --";
        
        while($statement->fetch()) // Damit führen wir das ganze aus (bei mehreren gehen wir der Reihe nach durch die Einträge)
        {
            // ein paar Testausgaben für jedes einzelne Element
            echo "<br>";
            echo "Name = $name <br>";
            echo "Boolean = $boolean <br>";
            echo "Email = $email <br>";
        }
    }
    
    // Verbindung wieder beenden nich vergessen
    $statement->close();
    */
    
    
    
    // --- Beispiel für das inserten von Einträgen ---
    /*
    $name = "Hans";
    $boolean = true;
    $email = "Hans@gmx.de";
    
    $statement = $connection->prepare("INSERT INTO `tabelle` (`name`, `boolean`, `email`) VALUES (?, ?, ?)"); // der SQL Befehl
    $statement->bind_param(
        "sis", // Typ der ? parameter (i für Integer, s für String, d für double, b für blob) (Vorsicht Reihenfolge beachten!)
        // Werte für die ? Parameter als Variablen (Vorsicht Reihenfolge beachten!)
        $name, $boolean, $email
    );
    
    if($statement->execute()) // ein if auf das Ergebnis (wenns nich klappt kommt hier ein false)
    {
        echo "<br>Insert Hat geklappt";
    }
       
    // Verbindung wieder beenden nich vergessen
    $statement->close();
    */
    
    
    
    
    // --- Beispiel für das Löschen von Einträgen ---
    // Achtung: klappt auch wenn der Eintrag garnich existiert
    /*
    $name = "Hans";
    
    $statement = $connection->prepare("DELETE FROM `tabelle` WHERE `name`=?"); // der SQL Befehl
    $statement->bind_param(
        "s", // Typ der ? parameter (i für Integer, s für String, d für double, b für blob) (Vorsicht Reihenfolge beachten!)
        // Werte für die ? Parameter als Variablen (Vorsicht Reihenfolge beachten!)
        $name
    );
    
    if($statement->execute()) // ein if auf das Ergebnis (wenns nich klappt kommt hier ein false)
    {
        echo "<br>Hans wurde wieder gelöscht";
    }
       
    // Verbindung wieder beenden nich vergessen
    $statement->close();
    */
    
     function getUserById() {
     	return;
     }
     
     function getGamesByUser() {
     	return; 
     }
     
     function getAllActiveGames() {
     	return;
     }
    
     function getPrizeByGame() {
     	return;
     }
     
     function getHighscoreListByGame() {
     	return;
     }
     
     function getUserHighscoreListByGame() {
     	return;
     }
     
     function insertNewUser() {
     	return;
     }
     
     function insertNewHighscore() {
     	return;
     }
     
     function updateUser() {
     	return;
     }
     
     function updateHighscore() {
     	return;
     }
     
    
    // Ganz zum Schluss Datenbankverbindung komplett trennen
    $connection->close();
?>