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
            style="background-image: url(./assets/img/banner.png); background-size: cover; background-attachment: fixed; background-position:center; background-repeat: no-repeat;">
            <div class="flex justify-around">
                <div class="max-w-xl">
                    <h2 class="text-3xl font-bold text-black">About Us:</h2>
                    <p class="mt-4 text-lg leading-relaxed">
                        At Telwale Telghani, we believe in delivering the purest, traditionally extracted oils to your
                        home.
                        For generations, we've been committed to maintaining the age-old methods of cold pressing to
                        ensure that the natural goodness of oils is preserved in every drop.

                    </p>

                    <p class="mt-4 text-lg leading-relaxed">
                        We specialize in a wide range of cold-pressed oils, including Alsi (Flaxseed) Oil, Mustard Oil,
                        Groundnut Oil, and Coconut Oil.
                        In addition to oils, we also offer 100% pure and natural spices, including millet chai masala,
                        garam masala, turmeric, coriander, and cumin powder.
                        All our products are carefully crafted to retain their natural health benefits and flavors,
                        ensuring you get the best nature has to offer.
                    </p>

                    <p class="mt-4 text-lg leading-relaxed">
                        Choose us for pure, traditionally extracted oils and spices that promote health and well-being.
                        Experience the richness of nature's best, with products that are free from chemicals and
                        preservatives.
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

        <!-- Benefits of Pure Groundnut Oil Section -->
        <section class="py-8 px-20 bg-d-300 bg-white bg-opacity-70">
            <div class="flex flex-wrap items-center justify-center gap-10">
                <div class="">
                    <h2 class="font-bold text-3xl py-4">Benefits of Consuming Pure Groundnut Oil</h2>
                    <ul class="list-disc ml-4 max-w-xl">
                        <li>Helps in boosting heart health.</li>
                        <li>Aids in weight loss.</li>
                        <li>Has anti-aging properties.</li>
                        <li>Helps in raising good HDL cholesterol.</li>
                        <li>Keeps the brain healthy and protects it from Alzheimer's and dementia.</li>
                        <li>Beneficial in diabetes.</li>
                        <li>Relieves joint pain.</li>
                    </ul>
                </div>
                <div class="img">
                    <img class="object-contain w-[300px] md:w-[500px]" src="./assets/img/products/groundnut.png"
                        alt="Groundnut Oil">
                </div>
            </div>
        </section>

        <!-- Benefits of Pure Sesame Oil Section -->
        <section class="py-8 px-20 bg-d-300 bg-white bg-opacity-70">
            <div class="flex flex-wrap items-center justify-center gap-10">
                <div class="img">
                    <img class="object-contain w-[300px] md:w-[500px]" src="./assets/img/products/sesame.png"
                        alt="Sesame Oil">
                </div>
                <div class="">
                    <h2 class="font-bold text-3xl py-4">Benefits of Consuming Pure Sesame Oil</h2>
                    <ul class="list-disc ml-4 max-w-xl">
                        <li>Improves brain function.</li>
                        <li>Keeps the heart healthy.</li>
                        <li>Fights harmful bacteria.</li>
                        <li>Boosts hunger.</li>
                        <li>Has antibacterial, antifungal, and anti-inflammatory properties.</li>
                        <li>Fights cancer.</li>
                        <li>Prevents asthma.</li>
                        <li>Beneficial for the skin.</li>
                        <li>Strengthens immunity.</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Newsletter Section -->
        <section class="px-6 py-20 bg-white">
            <h1 class="font-bold text-center text-xl">JOIN OUR NEWSLETTER NOW</h1>
            <div class="flex flex-col gap-4 justify-center items-center py-5">
                <form class='flex flex-wrap gap-4 justify-center items-center' action="">
                    <input class="px-4 w-full md:w-1/2 py-2 border" type="email" name="email" id="email"
                        placeholder="Enter your email">
                    <input class="uppercase w-full md:w-1/4 px-4 py-2 bg-yellow-500 hover:bg-yellow-600" type="submit"
                        value="sign up">
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