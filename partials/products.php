<style>
    /* The flip card container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
    .flip-card {
        background-color: transparent;
        width: 500px;
        height: 500px;
        border: 1px solid #f1f1f1;
        border-radius: 20px;
        padding: 10px;
        perspective: 1000px;
        /* Remove this if you don't want the 3D effect */
    }

    /* This container is needed to position the front and back side */
    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.8s;
        transform-style: preserve-3d;
    }

    /* Do an horizontal flip when you move the mouse over the flip box container */
    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    /* Position the front and back side */
    .flip-card-front,
    .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        /* Safari */
        backface-visibility: hidden;
    }

    /* Style the front side (fallback if image is missing) */
    .flip-card-front {
        background-color: white;
        color: black;
    }

    /* Style the back side */
    .flip-card-back {
        background-color: white;
        height: 500px;
        color: white;
        transform: rotateY(180deg);
    }

    @media (max-width: 1090px) {

        .flip-card {
            width: 300px;
            height: 300px;
        }

        .flip-card-back {
            height: 300px;
        }
    }

    li {
        white-space: wrap;
    }
</style>
<section class="flex flex-col gap-40 py-8 px-5 md:px-20 bg-d-300 bg-white bg-opacity-70">
    <div
        class="flex flex-col-reverse items-center md:items-start md:flex-row-reverse  flex-wrap  justify-center gap-10 ">
        <div class="max-w-96">
            <h2 class="text-3xl font-bold text-black">Groundnut Oil</h2>
            <p class="mt-4 text-lg leading-relaxed">
                Groundnut oil is ideal for frying and cooking, offering a subtle, nutty flavor. It is rich in
                monounsaturated fats and Vitamin E, making it a healthier option for your everyday cooking.
            </p>
            <h2 class="font-bold text-2xl py-4">Benefits</h2>
            <ul class="list-disc text-sm leading-normal">
                <li><strong>Rich in Vitamin E</strong>: Protects the skin from free radical damage and promotes
                    youthful skin.</li>
                <li><strong>Promotes Heart Health</strong>: Contains monounsaturated fats that help lower bad
                    cholesterol and improve heart function.</li>
                <li><strong>Enhances Brain Function</strong>: Groundnut oil is known to help in improving
                    cognitive health and memory.</li>
                <li><strong>Ideal for Cooking</strong>: With a high smoke point, it is perfect for frying and
                    cooking without losing its nutritional value.</li>
            </ul>
        </div>

        <div class="img ">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front rounded-xl overflow-hidden p-2 shadow-xl">
                        <img class="object-contain" src="./assets/img/products/groundnut.webp" alt="Groundnut Oil">
                    </div>
                    <div class="flip-card-back flex items-center  rounded-xl overflow-hidden p-2">
                        <a href="./assets/img/products/report/groundnut.webp" data-lightbox="image-1"
                            data-title="Groundnut Oil">
                            <img class="object-contain" src="./assets/img/products/report/groundnut.webp"
                                alt="Groundnut Oil">
                        </a>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="flex flex-col-reverse items-center md:items-start md:flex-row flex-wrap  justify-center gap-10 ">
        <div class="max-w-96">
            <h2 class="text-3xl font-bold text-black">Mustard Oil</h2>
            <p class="mt-4 text-lg leading-relaxed">
                Rich in antioxidants and Omega-3 fatty acids, our cold-pressed mustard oil is a powerhouse
                of
                health. It aids in boosting heart health, reducing inflammation, and adding a bold, tangy
                flavor
                to your dishes.
            </p>
            <h2 class="font-bold text-2xl py-4">Benefits</h2>
            <ul class="list-disc text-sm leading-normal">
                <li><strong>Boosts Heart Health</strong>: Rich in Omega-3 fatty acids, it helps reduce
                    cholesterol and supports cardiovascular function.</li>
                <li><strong>Anti-inflammatory Properties</strong>: Mustard oil has natural anti-inflammatory
                    benefits that can
                    reduce joint pain and swelling.</li>
                <li><strong>Improves Skin & Hair Health</strong>: Known for its moisturizing properties, mustard
                    oil promotes
                    healthy skin and hair growth.</li>
                <li><strong>Boosts Immunity</strong>: High in antioxidants, it helps strengthen the immune
                    system and protect the
                    body from infections.</li>
            </ul>
        </div>

        <div class="img ">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front rounded-xl overflow-hidden p-2 shadow-xl">
                        <img class="object-contain" src="./assets/img/products/mustard.webp" alt="Mustard Oil">
                    </div>
                    <div class="flip-card-back flex items-center  rounded-xl overflow-hidden p-2">
                        <a href="./assets/img/products/report/mustard.webp" data-lightbox="image-1"
                            data-title="mustard Oil">
                            <img class="object-contain" src="./assets/img/products/report/mustard.webp"
                                alt="Mustard Oil">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div
        class="flex flex-col-reverse items-center md:items-start md:flex-row-reverse flex-wrap  justify-center gap-10 ">
        <div class="max-w-96">
            <h2 class="text-3xl font-bold text-black">Coconut Oil</h2>
            <p class="mt-4 text-lg leading-relaxed">
                Cold-pressed coconut oil is rich in nutrients and antioxidants, making it ideal for cooking,
                skincare, and hair care. This versatile oil is extracted without heat, preserving its natural
                benefits and mild flavor.

            </p>
            <h2 class="font-bold text-2xl py-4">Benefits</h2>
            <ul class="list-disc text-sm leading-normal">
                <li><strong>Promotes Heart Health</strong>: Coconut oil is rich in lauric acid, which helps
                    increase good HDL cholesterol, improving heart health.</li>
                <li><strong>Boosts Immunity</strong>: Its antiviral, antifungal, and antibacterial properties
                    help fight infections and boost the immune system.</li>
                <li><strong>Improves Skin Health</strong>: Coconut oil acts as a natural moisturizer, reducing
                    dryness and improving the texture and appearance of the skin.</li>

            </ul>
        </div>

        <div class="img ">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front rounded-xl overflow-hidden p-2 shadow-xl">
                        <img class="object-contain" src="./assets/img/products/coconut.webp" alt="Coconut Oil">
                    </div>
                    <div class="flip-card-back flex items-center  rounded-xl overflow-hidden p-2">
                        <a href="./assets/img/products/report/coconut.webp" data-lightbox="image-1"
                            data-title="coconut Oil">
                            <img class="object-contain" src="./assets/img/products/report/coconut.webp"
                                alt="Coconut Oil">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <div class="flex flex-col-reverse items-center md:items-start md:flex-row flex-wrap  justify-center gap-10 ">
        <div class="max-w-96">
            <h2 class="text-3xl font-bold text-black">Sesame Oil</h2>
            <p class="mt-4 text-lg leading-relaxed">
                Our pure sesame oil is packed with antioxidants and essential nutrients that improve heart
                health and boost immunity. Its nutty flavor makes it perfect for stir-fries, marinades, and even
                skincare routines.
            </p>
            <h2 class="font-bold text-2xl py-4">Benefits</h2>
            <ul class="list-disc text-sm leading-normal">
                <li><strong>Improves Heart Health</strong>: Sesame oil contains sesamin and sesamol, compounds
                    that promote healthy cholesterol levels.</li>
                <li><strong>Anti-inflammatory & Antioxidant</strong>: Helps fight inflammation and oxidative
                    stress in the body.</li>
                <li><strong>Enhances Bone Health</strong>: High in calcium, sesame oil supports strong bones
                    and overall bone health.</li>
                <li><strong>Boosts Immune Function</strong>: Rich in zinc, it helps in boosting the body’s
                    immunity and fighting off infections.</li>
            </ul>
        </div>


        <div class="img ">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front rounded-xl overflow-hidden p-2 shadow-xl">
                        <img class="object-contain" src="./assets/img/products/sesame.webp" alt="Sesame Oil">
                    </div>
                    <div class="flip-card-back flex items-center  rounded-xl overflow-hidden p-2">
                        <a href="./assets/img/products/report/sesame.webp" data-lightbox="image-1"
                            data-title="Sesame Oil">
                            <img class="object-contain" src="./assets/img/products/report/sesame.webp" alt="Sesame Oil">
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div
        class="flex flex-col-reverse items-center md:items-start md:flex-row-reverse flex-wrap items-center justify-center gap-10 ">
        <div class="max-w-96">
            <h2 class="text-3xl font-bold text-black">Flaxseed Oil (Alsi Oil)</h2>
            <p class="mt-4 text-lg leading-relaxed">
                Known for its high content of Omega-3 fatty acids, flaxseed oil supports brain health, reduces
                inflammation, and helps regulate cholesterol levels. Ideal for dressings and smoothies, this oil
                is a nutritious addition to your diet.
            </p>
            <h2 class="font-bold text-2xl py-4">Benefits</h2>
            <ul class="list-disc text-sm leading-normal">
                <li><strong>Rich in Omega-3 Fatty Acids</strong>: Helps improve brain function, reduce
                    inflammation, and support heart health.</li>
                <li><strong>Promotes Skin Hydration</strong>: Contains essential fatty acids that keep the
                    skin supple and hydrated.</li>
                <li><strong>Supports Digestive Health</strong>: Flaxseed oil aids digestion and can help
                    reduce symptoms of constipation.</li>
                <li><strong>Cholesterol Regulation</strong>: Helps lower bad cholesterol (LDL) while
                    increasing good cholesterol (HDL).</li>
            </ul>
        </div>

        <div class="img ">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front rounded-xl overflow-hidden p-2 shadow-xl">
                        <img class="object-contain" src="./assets/img/products/alsi.webp" alt="alsi Oil">
                    </div>
                    <div class="flip-card-back flex items-center  rounded-xl overflow-hidden p-2">
                        <a href="./assets/img/products/report/alsi.webp" data-lightbox="image-1" data-title="Alsi Oil">
                            <img class="object-contain" src="./assets/img/products/report/alsi.webp" alt="alsi Oil">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div
        class="flex flex-col-reverse items-center md:items-start md:flex-row flex-wrap items-center justify-center gap-10 ">
        <div class="max-w-96">
            <h2 class="text-3xl font-bold text-black">Sunflower Oil </h2>
            <p class="mt-4 text-lg leading-relaxed">
                Sunflower oil is a light, neutral-tasting oil made from sunflower seeds. It’s rich in Vitamin E and low
                in saturated fats, making it ideal for cooking and frying. Its high smoke point ensures the retention of
                nutrients, making it a heart-healthy choice for everyday meals
            </p>
            <h2 class="font-bold text-2xl py-4">Benefits</h2>
            <ul class="list-disc text-sm leading-normal">
                <li>Promotes heart health by lowering cholesterol.</li>
                <li>Rich in antioxidants, improving skin health.</li>
                <li>Boosts energy levels with healthy fats.</li>
                <li>Supports immune system function.</li>
            </ul>
        </div>

        <div class="img ">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front rounded-xl overflow-hidden p-2 shadow-xl">
                        <img class="object-contain" src="./assets/img/products/sunflower.webp" alt="sunflower Oil">
                    </div>
                    <div class="flip-card-back flex items-center  rounded-xl overflow-hidden p-2">
                        <a href="./assets/img/products/report/sunflower.webp" data-lightbox="image-1"
                            data-title="sunflower Oil">
                            <img class="object-contain" src="./assets/img/products/report/sunflower.webp"
                                alt="sunflower Oil">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div
        class="flex flex-col-reverse items-center md:items-start md:flex-row-reverse flex-wrap items-center justify-center gap-10 ">
        <div class="max-w-96">
            <h2 class="text-3xl font-bold text-black">Almond Oil (Badam Oil)</h2>
            <p class="mt-4 text-lg leading-relaxed">
                Badam (almond) oil is known for its rich, nourishing properties. Extracted from raw almonds, this oil is
                widely used in skincare and hair care routines, as well as cooking. Its high concentration of Vitamin E
                and essential fatty acids make it beneficial for overall well-being.
            </p>
            <h2 class="font-bold text-2xl py-4">Benefits</h2>
            <ul class="list-disc text-sm leading-normal">
                <li>Enhances skin radiance and moisturizes deeply.</li>
                <li>Promotes healthy hair growth and reduces hair fall.</li>
                <li>Supports heart health with monounsaturated fats.
                </li>
                <li>Nourishes dry skin and soothes irritation.
                </li>
            </ul>
        </div>
        <div class="img">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front rounded-xl overflow-hidden p-2 shadow-xl">
                        <img class="object-contain" src="./assets/img/products/almond.webp" alt="almond Oil">
                    </div>
                    <div class="flip-card-back flex items-center  rounded-xl overflow-hidden p-2">
                        <a href="./assets/img/products/report/almond.webp" data-lightbox="image-1"
                            data-title="almond Oil">
                            <img class="object-contain" src="./assets/img/products/report/almond.webp" alt="almond Oil">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div
        class="flex flex-col-reverse items-center md:items-start md:flex-row flex-wrap items-center justify-center gap-10 ">
        <div class="max-w-96">
            <h2 class="text-3xl font-bold text-black">Special Hair Oil</h2>
            <p class="mt-4 text-lg leading-relaxed">Our Special Hair Oil is designed to reduce hair fall, boost growth,
                and enhance hair vitality. This blend of natural oils hydrates the scalp, prevents dandruff, and
                strengthens roots. It leaves hair soft, shiny, and voluminous, promoting thicker, longer, and healthier
                strands. Suitable for all hair types.
            </p>
            <h2 class="font-bold text-2xl py-4">Benefits</h2>
            <ul class="list-disc text-sm leading-normal">
                <li><b>Reduces Hair Fall:</b> Strengthens hair at the roots, reducing breakage and promoting healthy
                    growth.
                </li>
                <li><b>Improves Hair Growth and Thickness:</b> Flaxseed oil stimulates hair follicles, encouraging
                    faster,
                    thicker hair growth.</li>
                <li><b>Hydrates and Nourishes Scalp:</b> Helps prevent dandruff and dryness by deeply moisturizing the
                    scalp.
                </li>
                <li><b>Adds Natural Shine and Softness:</b> Enhances your hair's natural shine and softness, making it
                    look
                    smooth and vibrant.</li>
            </ul>
            </ul>
        </div>

        <div class="img">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front rounded-xl overflow-hidden p-2 shadow-xl">
                        <img class="object-contain" src="./assets/img/products/hairoil.webp" alt="hairoil Oil">
                    </div>
                    <div class="flip-card-back flex items-center  rounded-xl overflow-hidden p-2">
                        <a href="./assets/img/products/report/hairoil.webp" data-lightbox="image-1"
                            data-title="Hairoil Oil">
                            <img class="object-contain" src="./assets/img/products/report/hairoil.webp"
                                alt="Hairoil Oil">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>