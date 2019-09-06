<?php ob_start(); ?>

<?php
require("db.php");
mysql_query ("set character_set_client='utf8'");
 mysql_query ("set character_set_results='utf8'");
 mysql_query ("set collation_connection='utf8_general_ci'");
 $sql = "SHOW COLUMNS FROM calculations";
 $result = mysql_query($conn,$sql);
 while($row = mysql_fetch_array($result)){
     echo $row['Field']."<br>";
 }

 //$result = mysql_query('ALTER TABLE `calculations` ADD `gpf2019` VARCHAR(100) NOT NULL AFTER `fftotal`, ADD `gpf2020` VARCHAR(100) NOT NULL AFTER `gpf2019`');
 /*if (!$result) die('Couldn\'t fetch records');
 $num_fields = mysql_num_fields($result);
 $headers = array();
 for ($i = 0; $i < $num_fields; $i++)
 {
        $headers[] = mysql_field_name($result , $i);
 }
 $fp = fopen('php://output', 'w');
 if ($fp && $result)
 {

        header("content-type:application/csv;charset=UTF-8");
        header("Content-Disposition:attachment;filename=\"calculations.csv\"");
        header('Pragma: no-cache');
        header('Expires: 0');
        fputcsv($fp, $headers);
        while ($row = mysql_fetch_row($result))
        {
           fputcsv($fp, array_values($row));
        }
 die;
 }*/

mysql_close($conn);
?>
	<?php ob_end_flush(); ?>
