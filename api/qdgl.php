<?php
    $intnum = intval(file_get_contents('../data/qd.txt'));
    file_put_contents('../data/qd.txt',strval($intnum + 1));
?>
<?php echo file_get_contents("../data/qd.txt"); ?>