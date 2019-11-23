<? php

print"<h3>REFRESH PAGE</h3>";
$name="new.txt";
$file=fopen($file,"r");
$hits=fscanf($file,"%d");
fclose($file);

$hits[0]++;
$file=fopen($file,"w");
fprintf($file,"%d",$file);
fclose($file);

print"Total number Of viwes".$hits[0];

?> 