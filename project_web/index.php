<?php

include 'database.php';

$sql="select * from Station_m";

$r = $db->getRows($sql,array());
?>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/css.css" />
    <script>
    //Pop up a prompt
    var userColor = window.prompt("Enter a color.", "");
</script>
</head>
<body>
<p>
<span onclick="document.body.style.backgroundColor = 
'red';">Red</span> |
<span onclick="document.body.style.backgroundColor = 'white';">White</span> |
<span onclick="document.body.style.backgroundColor = 'green';">Green</span> |
<span onclick="document.body.style.backgroundColor =
 'blue';">Blue</span> |
<span onclick="document.body.style.backgroundColor = userColor;">
<script>
document.write(userColor);
</script>


</head>
<body>
    <div class="body">
        <div class="head">
            &emsp; Egypt Train : قطار مصر
        </div>
        <div class="form" dir="rtl" >
            <form action="show.php" method="get"  dir="rtl">
                <table width='100%'><tr>
<?php
echo "<td align=left width='45%'><font color='red'><h2>اختر محطة القيام</h2></font></td><td> <select name='start' >";
foreach ($r as $value) {
    //echo "<option value='".$value['Sta_num']."'>".$value['Sta_num']."</option>";
     echo "<option value='".$value['Sta_num']."'>".$value['Name_sta']."</option>";
}
echo "</select></td></tr><tr><td align=left><font color='red'><h2>اختر محطة الوصول</h2></font></td><td>
<select name='end'>";
foreach ($r as $value) {
    echo "<option value='".$value['Sta_num']."'>".$value['Name_sta']."</option>";
    // echo "<option value='".$value['Name_sta']."'>".$value['Name_sta']."</option>";
}
echo "</select></td></tr><tr><td align=left >";

//$sql="SELECT 'type_t' FROM 'train' GROUP BY 'type_t'";
$sql="select * from train_m ";
$r = $db->getRows($sql,array());


echo " <font color='red'><h2>اختر الدرجة</h2></font></td><td><select name='type'>";

foreach ($r as $value) {
    echo "<option value='".$value['type_t']."'>".$value['type_t']."</option>";
}
echo "</select><br>";

?>
</td></tr></table>
<button type="submit">عرض القطارات</button>
    </form>

</body>

</html>