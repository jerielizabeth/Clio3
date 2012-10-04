<?php
ini_set ("auto_detect_line_endings", true);

$fileName = 'cases.csv';

//set function for opening files
$file = fopen($fileName, "r+") of die("can't open file");

//recognize file as csv, get it to loop
while (($data = fgetcsv($file, 1000, ',')) !== FALSE) {
	//set the second column to old date
	//$data[1] =$old_date;
	// this earlier one obliterates $data because $old_date is not defined.

	$old_date = $data[1];


	//switch the order
	$new_date = explode ('/', $old_date);
	//$date = $old_date[2].'-'.$old_date[0].'-'.$old_date[1];
	$date = $new_date[2].'-'.$new_date[0].'-'.$new_date[1];
	//set the second column to new date
	//$data[1] = $new_date;
	$data[1] = $date;
	
	fputcsv($file, $data);


}

//close csv file
fclose($file);

?>