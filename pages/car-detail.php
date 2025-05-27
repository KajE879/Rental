<?php require "includes/header.php" ?>
<?php require_once "database/connection.php"; ?>
<?php
$name = $_GET['name'] ?? null;
if ($name) {
    $stmt = $conn->prepare("SELECT * FROM cars WHERE name = :name LIMIT 1");
    $stmt->execute(['name' => $name]);
    $car = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$car) {
        echo "<p>Auto niet gevonden.</p>";
    }
} else {
    echo "<p>Geen auto opgegeven.</p>";
}
?>
<main class="car-detail">
    <div class="grid">
        <?php if ($car): ?>
            <div class="row">
                <div class="advertorial">
                    <h2>Sport auto met het beste design en snelheid</h2>
                    <p>Veiligheid en comfort terwijl je rijd in een futiristische en elante auto </p>
                    <img src="<?=$car['image_path']?>" alt=""> 
                    <img src="../assets/images/header-circle-background.svg" alt="" class="background-header-element">
                </div>
            </div>
            <div class="row white-background">
                <h2><?= $car['name']?></h2>
                <div class="rating">
                    <span class="stars stars-4"></span>
                    <span>440+ reviewers</span>
                </div>
                <p><?= $car['description']?></p>
                <div class="car-type">
                    <div class="grid">
                        <div class="row"><span class="accent-color">Type Car</span><span><?= $car['type']?></span></div>
                        <div class="row"><span class="accent-color">Capacity</span><span><?= $car['capacity'] . ' Personen' ?></span></div>
                    </div>
                    <div class="grid">
                        <div class="row"><span class="accent-color">Steering</span><span><?= $car['steering_type']?></span></div>
                        <div class="row"><span class="accent-color">Gasoline</span><span><?= $car['fuel_capacity_liters'] . 'L' ?></span></div>
                    </div>
                    <div class="call-to-action">
                        <div class="row"><span class="font-weight-bold"><?= '€' . $car['price_per_day']?></span> / dag</div>
                        <div class="row"><a href="" class="button-primary">Huur nu</a></div>
                    </div>

                </div>
            </div>
        <?php endif; ?>
    </div>
</main>
<?php require "includes/footer.php" ?>
