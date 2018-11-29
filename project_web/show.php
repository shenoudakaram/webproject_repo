<?php

include 'database.php';

$start=$_GET['start'];
$end=$_GET['end'];
$type=$_GET['type'];

if ($start>$end){
    $dif=$start-$end;
    $q="select * from train_m where startid >= $start or endid <= $end and type_t = '$type'";
}else{
    $dif=$end-$start;
    $q="select * from train_m where startid <= $start or endid >= $end and type_t = '$type'";
}

$sql="select * from Station_m where Sta_num=$start";
$from=$db->getRow($sql,array());
$sql="select * from Station_m where Sta_num=$end";
$to=$db->getRow($sql,array());

$tarins=$db->getRows($q,array());
$count=$db->getCount($q,array());

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/css.css" />

</head>

<body>
    <div class="body">
        <div class="head">
            &emsp; Egypt Train : قطار مصر
        </div>
<h2 align="center" class="count"> From <?php echo $from['Name_sta']." To ".$to['Name_sta']." يوجد $count قطار"; ?></h2>
<table border="2" width="100%" dir="rtl">
    <tr bgcolor='aqua'>
        <th>قطار رقم</th>
        <th>وقت القيام </th>
        <th>المدة الوصول</th>
        <th>الدرجة</th>
          </tr>
<?php

foreach ($tarins as  $value) {
   echo " <tr >
        <th>".$value['Train_Number']."</th>
        <th>".$value['starttime']." </th>
        <th>".$value['timeeach']*$dif." دقيقة</th>
        <th>$type</th>
    </tr>";
}

?>
        </table>
    </div>
</body>

</html>