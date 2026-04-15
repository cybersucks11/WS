<?php

$doc = new DOMDocument("1.0");

// root element
$root = $doc->createElement("Timetable");
$doc->appendChild($root);

// data
$data = [
    ["Monday","Cyber Security","Mr. A","10:00-11:00","A1"],
    ["Wednesday","DBMS","Mrs. B","11:00-12:00","B2"],
    ["Friday","Python","Mr. C","12:00-01:00","C3"]
];

foreach($data as $d){
    $cls = $doc->createElement("Class");

    $cls->appendChild($doc->createElement("Day",$d[0]));
    $cls->appendChild($doc->createElement("ClassName",$d[1]));
    $cls->appendChild($doc->createElement("Instructor",$d[2]));
    $cls->appendChild($doc->createElement("TimeSlot",$d[3]));
    $cls->appendChild($doc->createElement("Classroom",$d[4]));

    $root->appendChild($cls);
}

// save file
$doc->formatOutput = true;
$doc->save("Timetable.xml");

echo "XML Created";

?>
