<html>
<body>

<form name='form' method='post' action="index.php">

字詞: <input type="text" name="name" id="name" ><br/>

<input type="submit" name="submit" value="Submit">  

</form>

<?php
ini_set('memory_limit', '1024M');

require_once "/Applications/XAMPP/xamppfiles/htdocs/funkbull/src/vendor/multi-array/MultiArray.php";
require_once "/Applications/XAMPP/xamppfiles/htdocs/funkbull/src/vendor/multi-array/Factory/MultiArrayFactory.php";
require_once "/Applications/XAMPP/xamppfiles/htdocs/funkbull/src/class/Jieba.php";
require_once "/Applications/XAMPP/xamppfiles/htdocs/funkbull/src/class/Finalseg.php";
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
