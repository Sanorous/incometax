<?php ob_start(); ?>

<?php
require("db.php");
mysql_query('SET character_set_results=utf8');
mysql_query('SET names=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_results=utf8');
mysql_query('SET collation_connection=utf8_general_ci');
 $result = mysql_query('SELECT * FROM `employees`');
 if (!$result) die('Couldn\'t fetch records');
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
        header("Content-Disposition:attachment;filename=\"client.csv\"");
        header('Pragma: no-cache');
        header('Expires: 0');
        fputcsv($fp, $headers);
        while ($row = mysql_fetch_row($result))
        {
           fputcsv($fp, array_values($row));
        }
 die;
 }

mysql_close($conn);
?>
	<?php ob_end_flush(); ?>
