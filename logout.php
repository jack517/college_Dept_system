<?php
session_start();
if(session_destroy()){
header("location:home.php?logout");

}
else
{
echo "err";
}

?>