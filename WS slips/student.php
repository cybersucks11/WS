<?php
$doc = new DOMDocument("1.0");

// root
$root = $doc->createElement("students");
$doc->appendChild($root);

// data (5 records)
$data = [
    ["1","Amit",20,"Male","BSc"],
    ["2","Neha",21,"Female","BCA"],
    ["3","Rahul",22,"Male","BSc"],
    ["4","Sneha",20,"Female","BCom"],
    ["5","Ravi",23,"Male","BBA"]
];

// loop
foreach($data as $d){
    $s = $doc->createElement("student");

    $s->appendChild($doc->createElement("id",$d[0]));
    $s->appendChild($doc->createElement("name",$d[1]));
    $s->appendChild($doc->createElement("age",$d[2]));
    $s->appendChild($doc->createElement("gender",$d[3]));
    $s->appendChild($doc->createElement("program",$d[4]));

    $root->appendChild($s);
}

// save
$doc->save("Student.xml");

echo "XML Created";
?>
