<footer>

</footer>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.slimNav_sk78.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="../js/script.js"></script>
<script>
$(document).ready(function() {
    $('.car-slide').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
});
</script>
</body>

</html>