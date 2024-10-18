<div class="relative slider w-full h-full">
    <div class="relative w-full">
        <!-- Background Video with Fallback -->
        <video src="./assets/video/bg-hero1.webm" autoplay loop muted playsinline
            class="w-full h-full object-cover fixed top-0 left-0 -z-10">
            <source src="./assets/video/bg-hero1.webm" type="video/webm">
            <source src="./assets/video/bg-hero1.mp4" type="video/mp4">
            <!-- Fallback Image for unsupported video -->
            <img src="./assets/img/fallback.jpg" alt="Background Image">
        </video>

        <!-- Content Overlay -->
        <div
            class="content  h-[80vh] md:h-screen py-10 bg-black bg-opacity-40 backdrop-blur-sm w-full inset-0 flex justify-center items-center">
            <div class="text-center p-4 max-w-lg mx-auto">
                <!-- Logo -->
                <img class="w-24 md:w-40 lg:w-52 mx-auto" src="./assets/img/logo.png" alt="Logo">

                <!-- Heading with responsive text scaling -->
                <h1
                    class="text-2xl md:text-4xl lg:text-5xl uppercase text-orange-400 font-bold lg:font-black antialiased stroke-white font-bakbakOne py-4">
                    तेलघानी का 100% शुद्ध तेल
                </h1>

                <!-- Paragraph, hidden on smaller screens -->
                <p class=" text-white text-sm md:text-md lg:text-lg antialiased font-bold leading-relaxed">
                    हमारे यहाँ आपको 100% शुद्ध और उच्च गुणवत्ता वाला तेल मिलता है, जिसे हम सीधे आपके सामने कोल्ड प्रेस
                    तकनीक से निकालते हैं। हमारे तेल में किसी भी प्रकार की रसायनों या मिलावट की कोई गुंजाइश नहीं है,
                    जिससे आपको शुद्धता और स्वास्थ्य का पूरा भरोसा मिलता है।
                </p>
            </div>
        </div>
    </div>
</div>