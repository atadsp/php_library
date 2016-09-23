<?PHP
if ( file_exists( "dictionary.txt" ) ) {
	$file_handle = fopen("dictionary.txt", "r");
	while (!feof($file_handle)) {
		$line_of_text = fgets($file_handle);
		print $line_of_text . "<BR>";
	}
	fclose($file_handle);

} else {
	print 'file does not exist';
}

$file_handle = fopen("testFile.txt", "w");
$file_contents = "Some test text";

fwrite($file_handle, $file_contents);
fclose($file_handle);
print "file created and written to";

print '<br> <br>';


$file_handle = fopen("presidents.csv", "r");



while (!feof($file_handle) ) {
	$line_of_text = fgetcsv($file_handle, 1024);

	$i = 0;
	$end_num = count($file_handle);

	for($i; $i < $end_num; $i++){
		print($line_of_text[$i] . '<br>');
	}
}
fclose($file_handle);

?>