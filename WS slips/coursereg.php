<?php

$doc = new DOMDocument("1.0");

// root element
$root = $doc->createElement("CourseRegistrations");
$doc->appendChild($root);

// data
$data = [
    ["R101","Asha","Cyber Security","Mr. A","01-04-2026"],
    ["R102","Rahul","DBMS","Mrs. B","02-04-2026"],
    ["R103","Neha","Python","Mr. C","03-04-2026"],
    ["R104","Amit","AI","Dr. D","04-04-2026"],
    ["R105","Sara","Web Dev","Mr. E","05-04-2026"]
];

foreach($data as $d){
    $reg = $doc->createElement("Registration");

    $reg->appendChild($doc->createElement("RegistrationID",$d[0]));
    $reg->appendChild($doc->createElement("StudentName",$d[1]));
    $reg->appendChild($doc->createElement("CourseName",$d[2]));
    $reg->appendChild($doc->createElement("Instructor",$d[3]));
    $reg->appendChild($doc->createElement("Date",$d[4]));

    $root->appendChild($reg);
}

// save file
$doc->formatOutput = true;
$doc->save("Course Registrations.xml");

echo "XML Created Successfully";

?>
