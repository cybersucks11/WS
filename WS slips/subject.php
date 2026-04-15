<?php

$doc = new DOMDocument("1.0");

// root
$root = $doc->createElement("subjects");
$doc->appendChild($root);

// data array (easy to remember)
$data = [
    ["101","DBMS","TYBSc","5"],
    ["102","Cyber Security","TYBSc","5"],
    ["103","Networking","TYBSc","5"]
];

// loop
foreach($data as $d){
    $sub = $doc->createElement("subject");
    
    $sub->appendChild($doc->createElement("id",$d[0]));
    $sub->appendChild($doc->createElement("name",$d[1]));
    $sub->appendChild($doc->createElement("class",$d[2]));
    $sub->appendChild($doc->createElement("semester",$d[3]));
    
    $root->appendChild($sub);
}

// save
$doc->save("Subject.xml");

echo "Done";

?>

