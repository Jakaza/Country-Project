<?php

    
    include_once('City.php');
    // $connection = require_once('config/DBConnection.php');


    class CityManager{

        const USERNAME = "root";
        const PASSWORD = "";
        public $connection = null;


        function __construct(){
             try {
                $this->connection = new PDO("mysql:host=localhost;dbname=CountryDB", self::USERNAME, self::PASSWORD);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch (PDOException  $e) {
                echo "Connection Failed ". $e->getMessage();
            }
        
        }


        function addCity(City $city){
            $name = $city->get_name();
            $population = $city->get_population();
            $latitude = $city->get_latitude();
            $longitude = $city->get_longitude();

            $date = date('Y-m-d H:i:s');
            try {

                $slq = "INSERT INTO citytbl (name, population, latitude, longitude, date_created) VALUES ( '$name', '$population', '$latitude', '$longitude',  '$date')";
                $statement = $this->connection->prepare($slq);
                $statement->execute();
                header('Location: index.php');
            } catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
                header('Location: form.php');
            }
        }
        
        function displayCities(){
            $sql = "SELECT * FROM citytbl";

            try {
                $data = $this->connection->query( $sql)->fetchAll();
                // $statement->execute();

                // $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
                // $statement->fetchAll();

                return $data;
            } catch (PDOException $e) {
                 echo $sql . "<br>" . $e->getMessage();
            }

        }
    }

?>