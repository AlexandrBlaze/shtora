<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="dist/js/slick.js"></script>
<script src="dist/js/jquery.mmenu.all.js"></script>
<script src="dist/js/fancySelect.js"></script>
<script src="dist/js/ion.rangeSlider.js"></script>
<script src="dist/js/main.js"></script>
<script>
    $(document).ready(function(){
        $("#range__slider").ionRangeSlider({
            type: "double",
            min: 1000,
            max: 900000,
            from:200000,
            to:800000,
            hide_min_max: true,
            postfix: ' <i class="fa fa-rub" aria-hidden="true"></i>'
        });
    });
</script>