<?php

require ("Entities/CoffeEntity.php");

class CoffeeModel()
{
    function GetCoffeTypes()
    {
        require 'credentials.php';


        //open connections and Select databe
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($database);
        $result = mysql_query("SELECT DISTINCT type FROM coffee") or die(mysql_error());
        $types = array();

        //get data from database

        While ($row = mysql_fetch_array($result)) {
            array_push($types, $row[0]);
        }

        mysql_close();
        return $types;
    }

        function GetCoffebyType($type)
        {
             require 'credentials.php';


        //open connections and Select databe
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($database);

        $query = "SELECT * FROM  coffee  WHERE TYPE LIKE  '$type'";
        $result = mysql_query($query) or die (mysql_error());
        $coffeArray = array();

        //get data from database

        While($row = mysql_fetch_array($result))
        {
            $name = $row[1];
            $type = $row[2];
            $price = $row[3];
            $roat = $row[4];
            $country = $row[5];
            $image = $row[6];
            $review = $row[7];

            //Cresate coffe object and store them  in a array
            $coffe = new CoffeEntity(-1, $name, $type,$price,$roat,$country,$image,$review);
            array_push($coffeArray, $coffe)

        }


        mysql_close();
        return $coffeArray;


    }






}

?>