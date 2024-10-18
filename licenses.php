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
        background-image: url('./assets/img/banner.webp');
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
                <object data="assets/pdf/license.pdf" type="application/pdf" frameborder="0" width="100%" height="600px"
                    style="padding: 20px;">
                    <embed src="https://drive.google.com/file/d/1B65AMQ2IELIkQzIGtznpa2sAYMlXBiW-/preview?usp=sharing"
                        width="100%" height="600px" />
                </object>
            </div>
        </div>
    </div>

    <?php require_once "partials/scripts.php"; ?>
    <?php require_once "partials/footer.php"; ?>

</body>

</html>