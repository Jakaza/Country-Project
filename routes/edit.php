<?php

    require('../backend/city.php');
    require('../backend/citymanager.php');
    
    $targetID = $_GET['id'];
    // echo $targetID;
    // exit;

        $citymanager = new CityManager();
        $data = $citymanager->getDataById($targetID);
        $name = $data[0]["name"];
        $population = intval($data[0]["population"]);
        $latitude = floatval($data[0]["latitude"]);
        $longitude = floatval($data[0]["longitude"]);
        $targetID = $data[0]["id"];

?>

<!DOCTYPE html>
<html lang="en">
<?php include_once('../partials/head.php') ?>

<body>

    <?php include_once('../partials/navbar.php') ?>

    <main>

        <form action="form.php" method="post">
            <div class="custom-input-d">
                <label for="city-name" class="form-label"><strong>Name Of City</strong></label>
                <input type="text" name="name" value="<?php echo $name ?>" class="form-control" id="city-name"
                    aria-describedby="name">
            </div>
            <div class="custom-input-d">
                <label for="population" class="form-label "><strong> Population</strong></label>
                <input type="number" name="population" value="<?php echo $population ?>" class="form-control"
                    id="population" aria-describedby="population">
            </div>

            <div class="custom-input-d">
                <label for="latitude" class="form-label "><strong> Latitude</strong></label>
                <input type="number" name="latitude" value="<?php echo $latitude ?>" class="form-control" id="latitude"
                    aria-describedby="population">
            </div>

            <div class="custom-input-d">
                <label for="longitude" class="form-label "><strong> Longitude</strong></label>
                <input type="number" name="longitude" value="<?php echo $longitude ?>" class="form-control"
                    id="longitude" aria-describedby="population">
            </div>


            <div class="custom-input-d mt-3">
                <input class="btn btn-primary" name="id" type="hidden" value="<?php echo $targetID ?>">
                <input class="btn btn-primary" name="submit" type="submit" value="Update City">
            </div>

        </form>

    </main>

    <?php include_once('../partials/footer.php') ?>

</body>

</html>