<?php
/**
 * Created by PhpStorm.
 * User: lecl1ste
 * Date: 3/31/16
 * Time: 2:23 PM
 */
//todo change js src
    include 'header.php';
    $pageString= <<<EOT
    <div id="splash"><img src="images/header-photo.jpg" width="780" height="413" alt="" /></div>
    <div id="wrapper">
        <div id="page">
            <div id="box1">
                <p> This is <strong>Fotofolium</strong>, a free, fully standards-compliant CSS template designed by <a href="http://www.freecsstemplates.org">FCT</a>. The slideshow uses photos from <a href="http://fotogrph.com/">Fotogrph</a> and is powered by Poptrox (a jQuery plugin by <a href="http://www.nodethirtythree.com/">NodeThirtyThree</a>). This free template is released under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attributions</a> license, so you’re pretty much free to do whatever you want with it (even use it commercially) provided you keep the links in the footer intact. Aside from that, have fun with it :) </p>
            </div>
            <div id="poptrox">
                <!-- start -->
                <ul id="gallery">
                    <li class="nopad"><a href="images/pic01-big.jpg"><img src="images/pic01.jpg" width="230" height="150" alt="" title="Fusce ultrices fringilla metus" /></a></li>
                    <li><a href="images/pic02-big.jpg"><img src="images/pic02.jpg" width="230" height="150" alt="" title="Praesent scelerisque scelerisque erat" /></a></li>
                    <li><a href="images/pic03-big.jpg"><img src="images/pic03.jpg" width="230" height="150" alt="" title="Integer sit amet pede vel arcu aliquet pretium" /></a></li>
                    <li class="nopad"><a href="images/pic02-big.jpg"><img src="images/pic02.jpg" width="230" height="150" alt="" title="Phasellus nec erat sit amet nibh pellentesque congue" /></a></li>
                    <li><a href="images/pic03-big.jpg"><img src="images/pic03.jpg" width="230" height="150" alt="" title="Pellentesque quis elit non lectus gravida blandit" /></a></li>
                    <li><a href="images/pic01-big.jpg"><img src="images/pic01.jpg" width="230" height="150" alt="" title="Cras vitae metus aliquam risus pellentesque pharetra" /></a></li>
                </ul>
                <br class="clear" />
                <script type="text/javascript">
                    $('#gallery').poptrox({
                        popupCloserBackgroundColor: '#6F9840',
                        popupPadding: 20,
                        windowMargin: 100
                    });
                </script>
                <!-- end -->
            </div>
        </div>
    </div>
    </body>
EOT;
echo($pageString);
    include 'footer.php';
?>