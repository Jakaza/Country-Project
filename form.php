<?php 

    // $connection = require_once('config/DBConnection.php');
    include_once('backend/City.php');
    include_once('backend/CityManager.php');

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $population = intval($_POST['population']);
        $latitude = floatval($_POST['latitude']);
        $longitude = floatval($_POST['longitude']);

        $city = new City($name, $population, $latitude,$longitude);

        $ciyManager = new CityManager();
        $ciyManager->addCity($city );
        // header('Location: index.php');
    }






?>




<!DOCTYPE html>
<html lang="en">
<?php include_once('partials/head.php') ?>

<body>

    <?php include_once('partials/navbar.php') ?>

    <main>

        <form action="form.php" method="post">
            <div class="custom-input-d">
                <label for="city-name" class="form-label"><strong>Name Of City</strong></label>
                <input type="text" name="name" class="form-control" id="city-name" aria-describedby="name">
            </div>
            <div class="custom-input-d">
                <label for="population" class="form-label "><strong> Population</strong></label>
                <input type="number" name="population" class="form-control" id="population"
                    aria-describedby="population">
            </div>

            <div class="custom-input-d">
                <label for="latitude" class="form-label "><strong> Latitude</strong></label>
                <input type="number" name="latitude" class="form-control" id="latitude" aria-describedby="population">
            </div>

            <div class="custom-input-d">
                <label for="longitude" class="form-label "><strong> Longitude</strong></label>
                <input type="number" name="longitude" class="form-control" id="longitude" aria-describedby="population">
            </div>

            <div class="custom-input-d mt-3">
                <input class="btn btn-primary" name="submit" type="submit" value="Add City">
            </div>

        </form>

    </main>

    <?php include_once('partials/footer.php') ?>

</body>

</html>