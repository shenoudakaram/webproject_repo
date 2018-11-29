<?php
function delete_db($train)
{
  $stm = $my_pdo_obj->exec("DROP DATABASE IF EXISTS " . $train);
}
?>