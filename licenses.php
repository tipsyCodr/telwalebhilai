<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TelWale Telghani | Licenses</title>
    <?php require_once "partials/head.php"; ?>
</head>
<style>
    .pdf {
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
        aspect-ratio: 210/297;
    }

    .nav {
        /* background-color: #ffd600; */
        background-image: url('./assets/img/banner.png');
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        height: 70px;
    }
</style>

<body>
    <?php require_once "partials/navbar.php"; ?>

    <div class=" my-32 mx-auto">
        <h1 class="text-3xl font-bold text-center my-5">Licenses</h1>
        <div class="column-sm">
            <div class="card">
                <iframe class="pdf h-full" src="assets/pdf/license.pdf" width="800" height="500" style="border:none;"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <?php require_once "partials/scripts.php"; ?>
    <?php require_once "partials/footer.php"; ?>

</body>

</html>