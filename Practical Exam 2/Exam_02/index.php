<?php 
$file = fopen("hello_there.php", "w") or die("Unable to open file!");
$txt = "<?php\n";
fwrite($file, $txt);
$txt = "\n";
fwrite($file, $txt);
$txt = "//This is a comment\n";
fwrite($file, $txt);
$txt = "\n";
fwrite($file, $txt);
$txt = "echo \"This is a test page!\";\n";
fwrite($file, $txt);
$txt = "echo \"Exam number two!\";\n";
fwrite($file, $txt);
$txt = "\n";
fwrite($file, $txt);
$txt = "//This is the end of a comment\n";
fwrite($file, $txt);
$txt = "\n";
fwrite($file, $txt);
fclose($file); 
?>