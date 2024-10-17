<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telwale Telghani | 100% Pure Cold Pressed Oil</title>

    <?php require_once "partials/head.php"; ?>
</head>


<body class="font-poppins">
    <?php require_once "partials/navbar.php"; ?>
    <!-- main content -->
    <main>
        <?php require_once "partials/slider.php"; ?>
        <section class="  "
            style="background-image: url(./assets/img/banner.png); background-size: cover; background-attachment: fixed; background-position:center; background-repeat: no-repeat;">
            <div class="px-4 pt-10 pb-4 bg-gradient-to-r from-transparent to-[#000000d9]">
                <div class="flex flex-wrap justify-around ">
                    <div class=" max-w-xl ">
                        <h2 class="text-3xl font-bold text-black ">About Us:
                        </h2>
                        <p class="mt-4 text-lg  leading-relaxed">
                            We're proud to say that our oil extraction process is FSSAI certified, ensuring that every
                            bottle of our oil is not only 100% pure but also meets the highest standards of quality and
                            safety. We provide Groundnut, Mustard, Coconut, Sesame (tilli), Flaxseed (alsi),
                            Sunflower, Badam (almond), and Special Hair Oil, which are freshly
                            extracted before you and remain 100% pure with no added substances.
                        </p>
                        <p class="mt-4 text-lg  leading-relaxed">
                            Our <strong>FSSAI certification</strong> number is <strong>10523006000177</strong>, and
                            we're committed to
                            maintaining the
                            highest
                            standards of quality and safety in our production process. This means that you can trust
                            that
                            our oils are not only delicious but also safe for consumption.
                        </p>
                        <div class="py-4 flex flex-col md:flex-row gap-4">
                            <a class='bg-orange-400 px-6 py-4 hover:bg-orange-600 transition-all   text-white uppercase font-bold'
                                href="#">
                                Read more
                            </a>
                            <a class='border border-white px-6 py-4  hover:bg-orange-600 transition-all hover:text-white  text-black uppercase font-bold'
                                href="#">
                                Contact Us
                            </a>
                        </div>
                    </div>
                    <div class="">
                        <img class='animate__animated  animate__fadeInRight h-[470px] rounded-xl hover:scale-105 transition-transform duration-700'
                            src="./assets/img/machine.jpg" alt="Cold Press Machine">
                    </div>
                </div>
            </div>

        </section>
        <?php require_once "partials/products.php"; ?>

        <section class="px-6 py-20 bg-white">
            <h1 class="font-bold text-center text-xl "> JOIN OUR NEWSLETTER NOW</h1>
            <div class="flex flex-col gap-4 justify-center items-center py-5  ">
                <form class='flex flex-wrap gap-4 justify-center items-center' action="">
                    <input class="px-4 w-full md:w-1/2 py-2 border" type="email" name="email" id="email">
                    <input class="uppercase w-full md:w-1/4 px-4 py-2 bg-yellow-500 hover:bg-yellow-600 " type="submit"
                        value="Sign up">
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