<?php require_once "database/connection.php"; ?>
<?php require "includes/header.php" ?>
    <header>
        <div class="advertorials">
            <div class="advertorial">
                <h2>Hét platform om een auto te huren</h2>
                <p>Snel en eenvoudig een auto huren. Natuurlijk voor een lage prijs.</p>
                <a href="pages/ons-aanbod.php" class="button-primary">Huur nu een auto</a>
                <img src="../assets/images/car-rent-header-image-1.png" alt="">
                <img src="../assets/images/header-circle-background.svg" alt="" class="background-header-element">
            </div>
            <div class="advertorial">
                <h2>Wij verhuren ook bedrijfswagens</h2>
                <p>Voor een vaste lage prijs met prettig voordelen.</p>
                <a href="pages/ons-aanbod.php" class="button-primary">Huur een bedrijfswagen</a>
                <img src="../assets/images/car-rent-header-image-2.png" alt="">
                <img src="../assets/images/header-block-background.svg" alt="" class="background-header-element">

            </div>
        </div>
    </header>
    <main>
    <h2 class="section-title">Populaire auto's</h2>
    <div class="cars">
        <?php foreach ($cars as $car) : ?>
            <?php if ($car['id'] >= 0 && $car['id'] <= 3): ?>
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
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <h2 class="section-title">Aanbevolen auto's</h2>
    <div class="cars">
        <?php foreach ($cars as $car) : ?>
            <?php if ($car['id'] >= 4): ?>
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
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    </div>
    <div class="show-more">
        <a class="button-primary" href="pages/ons-aanbod.php">Toon alle</a>
    </div>
    </main>
<?php require "includes/footer.php" ?>