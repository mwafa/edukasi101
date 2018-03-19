<?php
use VSXLSX\Parser;
$filename = "example.xlsx";

$parser = new Parser($filename,1);

if ($parser->parse()) {
	// Returns an array
	$parsed = $parser->get_parsed();
	/* Do something with the parsed array */
} else {
	foreach($parser->get_errors() as $error) {
		echo "Error: $error\n";
	}
}

print_r($parsed);
?>