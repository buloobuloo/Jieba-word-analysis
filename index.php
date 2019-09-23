<html>
<body>



<?php
ini_set('memory_limit', '1024M');

require_once "/funkbull/src/vendor/multi-array/MultiArray.php";
require_once "/funkbull/src/vendor/multi-array/Factory/MultiArrayFactory.php";
require_once "/funkbull/src/class/Jieba.php";
require_once "/funkbull/src/class/Finalseg.php";
use Fukuball\Jieba\Jieba;
use Fukuball\Jieba\Finalseg;
Jieba::init();
Finalseg::init();

$name = $_POST['name'];
$seg_list = Jieba::cut($name);

if (in_array("不", $seg_list)) {
    echo "0";
    }
    else {
    echo "1";
    }
?>

</body>
</html>
