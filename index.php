<?php 
    
    include_once('backend/citymanager.php');
    $citymanager = new CityManager();
    $data = $citymanager->getAllCities();

    // echo "<pre>";
    // var_dump($data);
    // echo "</pre>";
    // exit;

?>

<!DOCTYPE html>
<html lang="en">
<?php include_once('partials/head.php') ?>

<body>

    <?php include_once('partials/navbar.php') ?>

    <?php if(count($data)>0) :?>
    <div class="container">
        <?php for ($i=0; $i < count($data); $i++) : ?>
        <div class="card">
            <div class="card-header">
                <p><?php echo $data[$i]["date_created"] ?></p>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $data[$i]["name"] ?></h5>
                <p class="card-text">Population : <?php echo $data[$i]["population"] ?></p>

                <div class="buttons">
                    <a class="btn btn-sm btn-primary" href="routes/edit.php?id=<?php echo $data[$i]["id"] ?>">Edit</a>
                    <form action="routes/delete.php" method="post" style="display: inline">
                        <input class="btn btn-primary" name="id" type="hidden" value="<?php echo $data[$i]["id"] ?>">
                        <input type="submit" class="btn btn-sm btn-danger" name="submit" value="Delete">
                    </form>
                </div>
            </div>
        </div>
        <br>
        <?php endfor ?>
    </div>
    <?php else :?>
    <?php echo "<h3>No Data Available </h3>" ?>
    <?php endif ?>







    <!-- <?php include_once('partials/footer.php') ?> -->

</body>

</html>