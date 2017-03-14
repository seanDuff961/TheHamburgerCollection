<?php
get_header();
?>

<div class="container">
    <div class="hamburger-collection">
        <h1 class="heading">The Hamburger Collection</h1>
        <!--<img class="first-image" src="http://thehamburgercollection.com/wp-content/themes/thehamburgercollection/images/image1.png" >
        <img class="hidden-image">-->
    </div>
</div>
<div>
    <div class="container image-container">
        <div class="clearfix"></div>
        <ul class="tiles">
            <li>
                <img src="/images/hamburger1.png">
            </li>
            <li>
                <img src="/images/hamburger1.png">
            </li>
            <li>
                <img src="/images/hamburger1.png">
            </li>
            <li>
                <img src="/images/hamburger1.png">
            </li>
            <li>
                <img src="/images/hamburger1.png">
            </li>
            <li>
                <img src="/images/hamburger1.png">
            </li>
            <li>
                <img src="/images/hamburger1.png">
            </li>
            <li>
                <img src="/images/hamburger1.png">
            </li>
            <li>
                <img src="/images/hamburger1.png">
            </li>
            <li>
                <img src="/images/hamburger1.png">
            </li>
            <li>
                <img src="/images/hamburger1.png">
            </li>
            <li>
                <img src="/images/hamburger1.png">
            </li>
            <li>
                <img src="/images/hamburger1.png">
            </li>
            <li>
                <img src="/images/hamburger1.png">
            </li>
            <li>
                <img src="/images/hamburger1.png">
            </li>
            <li>
                <img src="/images/hamburger1.png">
            </li>
        </ul>


    </div>
    <div class="clearfix"></div>
</div>
<script>
    jQuery(document).ready(function($){
        organizeImages();
        $(window).resize(function(){
           organizeImages();
        });
        function organizeImages() {
            var margin = 15;
            var imageContainer = $('.image-container');
            var headingHeight = $('.heading').height();
            var windowHeight =( (document.body.clientHeight - headingHeight) - 40);
            var containerWidth = $('.image-container').width();
            var imageHeight = ( (windowHeight - margin) / 4);
            var imageWidth = ( (containerWidth) / 4 ) - 4;
            imageContainer.height(windowHeight);


            console.log('container: ' + containerWidth);
            console.log('container height: ' + windowHeight);
            console.log('image: ' + imageWidth);
            console.log('image height: ' + imageHeight);

            $('.image-container li').width(imageWidth);
            $('.image-container img').width(imageWidth);
            //$('.image-container img').height(imageHeight);
            //$('.image-container img').css('width', 'auto');
            var liWidth = $('.tiles li').width() + 5;
            $('.tiles').width((liWidth * 4));
        }

    });
</script>
<?php
get_footer();
?>
