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

        </div>
    </div>
    </body>
EOT;
echo($pageString);
include 'footer.php';
?>