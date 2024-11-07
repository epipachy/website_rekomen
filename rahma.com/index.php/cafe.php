<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Recommendation</title>
</head>
<body>
    <?php include "layout/header.html" ?>

    <h3>Cafe</h3>
    <form method="post">
        <button type="submit" name="filter" value="all">ALL</button>
        <button type="submit" name="filter" value="halal">Indoor</button>
        <button type="submit" name="filter" value="nonhalal">Outdoor</button>
    </form>

    <?php include "layout/footer.html" ?>
</body>
</html>