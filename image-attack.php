<?php
//Use exif editor software to add php script in "DocumentName" tag like: <?php echo "vulnerability check"; phpinfo(); __halt_compiler();
//and after that if you try to run this code and include that image file, the php code will get invoked and your above script which you added in
//the exif tag will get executed
require("image-safe.jpg");

?>
