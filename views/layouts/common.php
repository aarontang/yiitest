<html>
<header></header>
<body>
<!--<h1>common</h1>-->
<?php
if(isset($this->blocks['block1'])) {
    echo $this->blocks['block1'];
}else{
    ?>
    <h1>common</h1>
    <?php
}
?>
<?php echo $content;?>
</body>
</html>