<?php 

class City{
    public String $name;
    private int $population;
    private float $latitude;
    private float $longitude;
    
    function __construct(String $name ,int $population,float $latitude,float $longitude){
        $this->name = $name;
        $this->population = $population;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    function get_name(){
        return $this->name;
    }

    function get_population(){
        return $this->population;
    }

    function get_latitude(){
        return $this->latitude;
    }

    function get_longitude(){
        return $this->longitude;
    }
}

?>