<?php require_once("ImConnect.php") ?>
 <?php session_start(); ?>
<?php 
$sql = " INSERT INTO producta(p_name,p_des,p_color,p_price,p_quantity,p_weight) select p_name,p_des,p_color,p_price,p_quantity,p_weight from product where p_id ='$_GET[id]'" ;
