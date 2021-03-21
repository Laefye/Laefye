<?php

$cflags = str_replace("\n", "",fgets(STDIN));

$includeDirectories = [];
$cflag = explode(" ", $cflags);

foreach ($cflag as $key => $value) {
	if (substr($value, 0, 3) == "-I/")
	{
		$directory = substr($value, 2);
		$includeDirectories[] = $directory;
	}
}

$result = [
	"C_Cpp.default.includePath" => $includeDirectories
];

echo json_encode($result);
