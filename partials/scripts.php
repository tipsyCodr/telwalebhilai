<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.3/dist/cdn.min.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
    integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        setTimeout(function () {
            const style = document.createElement('style');
            style.innerHTML = `
            .flip-card .flip-card-inner {
                transform: rotateY(180deg);
            }
        `;
            document.head.appendChild(style);
        }, 1000); // 1000 milliseconds = 1 second
        setTimeout(function () {
            const style = document.createElement('style');
            style.innerHTML = `
            .flip-card .flip-card-inner {
                transform: rotateY(0deg);
            }
        `;
            document.head.appendChild(style);
        }, 2000); // 1000 milliseconds = 1 second
    });
</script>