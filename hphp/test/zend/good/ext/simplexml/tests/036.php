<?php
class SXE extends SimpleXmlElement {
    public function count() {
        echo "Called Count!\n";
        return parent::count();
    }
}

$str = '<xml><c>asdf</c><c>ghjk</c></xml>';
$sxe = new SXE($str);
var_dump(count($sxe));
?>
==Done==