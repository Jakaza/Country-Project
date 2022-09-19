<?php
    require('../backend/citymanager.php');

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $citymanager = new CityManager();
        $citymanager->delete($id);
    }
?>