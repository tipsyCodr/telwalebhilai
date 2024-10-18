<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.3/dist/cdn.min.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.5/dist/js/lightbox.min.js"></script>

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