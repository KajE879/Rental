<?php require_once "../database/connection.php"; ?>
<?php require "../includes/header.php" ?>
    <div class="container">
        <div class="filter-bar">
            <h3>Filters</h3>
            <div class="filter-group">
                <h4>Type</h4>
                <label><input type="checkbox" name="category" value="sport"> Sport</label>
                <label><input type="checkbox" name="category" value="sedan"> Sedan</label>
                <label><input type="checkbox" name="category" value="suv"> SUV</label>
                <label><input type="checkbox" name="category" value="hatchback"> Hatchback</label>
            </div>
        </div>
        <div class="content">
            <div class="cars">
                <?php foreach ($cars as $car) : ?>
                    <div class="car-details">
                        <div class="car-brand">
                            <h3><?= $car['name']?></h3>
                            <div class="car-type">
                                <?= $car['type']?>
                            </div>
                        </div>
                        <img src="<?=$car['image_path']?>" alt=""> 
                        <div class="car-specification">
                            <span><img src="../assets/images/icons/gas-station.svg" alt=""><?= $car['fuel_capacity_liters'] . 'L' ?></span>
                            <span><img src="../assets/images/icons/car.svg" alt=""><?= $car['steering_type']?></span>
                            <span><img src="../assets/images/icons/profile-2user.svg" alt=""><?= $car['capacity'] . ' Personen' ?></span>
                        </div>
                        <div class="rent-details">
                            <span><span class="font-weight-bold"><?= '€' . $car['price_per_day']?></span> / dag</span>
                            <a href="/car-detail?name=<?=$car['name']?>" class="button-primary">Bekijk nu</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php require "../includes/footer.php" ?>

