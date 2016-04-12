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
    <div id="splash"><img style="align:center"src="../img/mikey.jpg"width="400" height="500"alt="self portrait" /></div>
    <div id="wrapper">
        <div id="page">
            <div id="box1">
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            </div>

        </div>
    </div>
    </body>
EOT;
echo($pageString);
include 'footer.php';
?>