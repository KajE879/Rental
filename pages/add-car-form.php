<?php require "../includes/header.php"; ?>
<main>
    <form action="../actions/add-car.php" method="post" class="account-form" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="image">Image</label>
        <input type="file" name="image" required>

        <label for="description">Description:</label>
        <input type="text" name="description">

        <label for="price_per_day">Price per day:</label>
        <input type="number" name="price_per_day" required>

        <label for="type">Type:</label>
        <select name="type" required>
            <option value="Sport">Sport</option>
            <option value="Sedan">Sedan</option>
            <option value="SUV">SUV</option>
            <option value="Hatchback">Hatchback</option>
        </select>

        <label for="fuel_capacity_liters">Fuel capacity liters:</label>
        <input type="number" name="fuel_capacity_liters" required>

        <label for="steering_type">Steering type:</label>
        <select name="steering_type" required>
            <option value="Manual">Manual</option>
            <option value="Automatic">Automatic</option>
        </select>

        <label for="capacity">Capacity:</label>
        <input type="number" name="capacity" required>

        <input type="submit" value="Add Car">
    </form>
</main>
<?php require "../includes/footer.php"; ?>