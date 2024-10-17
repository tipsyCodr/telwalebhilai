<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.3/dist/cdn.min.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
    integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
<script>
    document.querySelectorAll(".rotate").forEach(el => {
        el.addEventListener("click", () => {
            if (!el.classList.contains("rotateY-180")) {
                el.classList.add("rotateY-180");
                el.classList.remove("rotateY-0");
            }
        });

        el.addEventListener("mouseout", () => {
            el.classList.remove("rotateY-180");
            el.classList.add("rotateY-0");
        });
    });
</script>