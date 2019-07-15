
<?php
get_header();
echo do_shortcode('[smartslider3 slider=2]');
get_footer();
?>
    <div class="box">
        <h1 class="text-center font-weight-normal" style="font-family: 'Lobster', cursive; ">Sushi</h1>
        <p>Sushi  is a Japanese dish of prepared vinegared rice , usually with some sugar and salt, accompanying a variety of ingredients , such as seafood, vegetables, and occasionally tropical fruits. Styles of sushi and its presentation vary widely, but the one key ingredient is "sushi rice", also referred to as shari, or sumeshi. The term sushi is no longer used in its original context; it literally means "sour-tasting".</p>
    </div>
<script type="text/javascript">
    var box = document.getElementsByClassName('box')
    window.onscroll = function () {
        if (document.documentElement.scrollTop > -1) {
            box[0].style.display = 'block'
        }
    }
</script>
