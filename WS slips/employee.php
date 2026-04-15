<?php
$doc = new DOMDocument("1.0");

// root
$root = $doc->createElement("employees");
$doc->appendChild($root);

// data (5 employees)
$data = [
    ["101","Amit","Manager","HR","2020-01-10"],
    ["102","Neha","Developer","IT","2021-03-15"],
    ["103","Rahul","Analyst","Finance","2019-07-20"],
    ["104","Sneha","Designer","Marketing","2022-02-05"],
    ["105","Ravi","Tester","IT","2023-06-12"]
];

// loop
foreach($data as $d){
    $emp = $doc->createElement("employee");

    $emp->appendChild($doc->createElement("id",$d[0]));
    $emp->appendChild($doc->createElement("name",$d[1]));
    $emp->appendChild($doc->createElement("position",$d[2]));
    $emp->appendChild($doc->createElement("department",$d[3]));
    $emp->appendChild($doc->createElement("doj",$d[4]));

    $root->appendChild($emp);
}

// save
$doc->save("Employees.xml");

echo "XML Created";
?>
