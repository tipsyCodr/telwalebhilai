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
</style>

<body>
    <?php require_once "partials/navbar.php"; ?>

    <div class=" my-32 mx-auto">
        <h1 class="text-3xl font-bold text-center my-5">Licenses</h1>
        <div class="column-sm">
            <div class="card">
                <object class="pdf h-full" data="assets/pdf/license.pdf" width="800" height="500">
                </object>
            </div>
        </div>
    </div>

    <?php require_once "partials/scripts.php"; ?>
    <?php require_once "partials/footer.php"; ?>

</body>

</html>