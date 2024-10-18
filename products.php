<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Telwale Telghani | 100% Pure Cold Pressed Oil</title>

    <?php require_once "partials/head.php"; ?>
</head>


<body class="font-poppins">
    <?php require_once "partials/navbar.php"; ?>
    <!-- main content -->
    <main>
        <!-- About Us Section -->
        <section class="px-4 py-32"
            style="background-image: url(./assets/img/banner.webp); background-size: cover; background-attachment: fixed; background-position:center; background-repeat: no-repeat;">
            <div class="flex justify-around">
                <div class="max-w-xl">
                    <h2 class="text-3xl font-bold text-black">Cold-Pressed Oils:</h2>
                    <p class="mt-4 text-lg leading-relaxed">
                        Our oils are extracted using traditional cold-press methods to ensure that all the essential
                        nutrients and flavors are preserved. No chemicals or heat are used, ensuring that each oil
                        retains its natural purity.
                    </p>



                    <div class="py-4 flex flex-col md:flex-row gap-4">

                        <a class='border border-white px-6 py-4 hover:bg-orange-600 transition-all hover:text-white text-black uppercase font-bold'
                            href="contact.php">
                            Contact Us
                        </a>
                    </div>
                </div>
                <div class="">
                    <!-- Add optional image or video if needed -->
                </div>
            </div>
        </section>
        <?php require_once "partials/products.php"; ?>

        <!-- Newsletter Section -->
        <section class="px-6 py-20 bg-white">
            <h1 class="font-bold text-center text-xl">JOIN OUR NEWSLETTER NOW</h1>
            <div class="flex flex-col gap-4 justify-center items-center py-5">
                <form class='flex flex-wrap gap-4 justify-center items-center' action="">
                    <input class="px-4 w-full md:w-1/2 py-2 border" type="email" name="email" id="email"
                        placeholder="Enter your email">
                    <input class="uppercase w-full md:w-1/4 px-4 py-2 bg-yellow-500 hover:bg-yellow-600" type="submit"
                        value="Subscribe">
                </form>
                <a href="https://www.facebook.com/TelwaleTelghani">
                    Will be used in accordance with our <strong>Privacy Policy</strong>
                </a>
            </div>
        </section>
    </main>



    <!-- main content -->
    <?php require_once "partials/scripts.php"; ?>
    <?php require_once "partials/footer.php"; ?>
</body>

</html>