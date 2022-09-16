<?php 
    
    include_once('backend/CityManager.php');
    $citymanager = new CityManager();
    $data = $citymanager->displayCities();

    // echo "<pre>";
    // var_dump($data);
    // echo "</pre>";

?>


<!DOCTYPE html>
<html lang="en">
<?php include_once('partials/head.php') ?>

<body>

    <?php include_once('partials/navbar.php') ?>


    <div class="container">
        <div class="card">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>






    <?php include_once('partials/footer.php') ?>

</body>

</html>