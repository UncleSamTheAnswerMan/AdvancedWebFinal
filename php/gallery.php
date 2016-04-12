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
    <div id="wrapper">
        <div id="page">
            <div id="poptrox">
                <!-- start -->
                <ul id="gallery">
                    <li class="nopad"><a href=""><img src="" width="230" height="150" alt="" title="Fusce ultrices fringilla metus" /></a></li>
                    <li><a href=""><img src="" width="230" height="150" alt="" title="Praesent scelerisque scelerisque erat" /></a></li>
                    <li><a href=""><img src="" width="230" height="150" alt="" title="Integer sit amet pede vel arcu aliquet pretium" /></a></li>
                    <li class="nopad"><a href=""><img src="images/pic02.jpg" width="230" height="150" alt="" title="Phasellus nec erat sit amet nibh pellentesque congue" /></a></li>
                    <li><a href=""><img src="" width="230" height="150" alt="" title="Pellentesque quis elit non lectus gravida blandit" /></a></li>
                    <li><a href=""><img src="" width="230" height="150" alt="" title="Cras vitae metus aliquam risus pellentesque pharetra" /></a></li>
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