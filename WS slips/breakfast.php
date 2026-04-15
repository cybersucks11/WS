<?php

$doc = new DOMDocument("1.0");

// check if file already exists
if(!file_exists("breakfast.xml")) {

    // create root
    $root = $doc->createElement("Breakfast");
    $doc->appendChild($root);

    // first item (French Fries)
    $item = $doc->createElement("Item");

    $item->appendChild($doc->createElement("Name","French Fries"));
    $item->appendChild($doc->createElement("Price","45"));
    $item->appendChild($doc->createElement("Description","Young youths are very much interested to eat it"));
    $item->appendChild($doc->createElement("Calories","650"));

    $root->appendChild($item);

    $doc->formatOutput = true;
    $doc->save("breakfast.xml");

    echo "Breakfast XML Created<br>";
}

// load file to add Juice category
$doc->load("breakfast.xml");
$root = $doc->documentElement;

// Juice item
$juice = $doc->createElement("Item");

$juice->appendChild($doc->createElement("Category","Juice"));
$juice->appendChild($doc->createElement("Name","Orange Juice"));
$juice->appendChild($doc->createElement("Price","30"));
$juice->appendChild($doc->createElement("Description","Fresh and healthy drink"));
$juice->appendChild($doc->createElement("Calories","120"));

$root->appendChild($juice);

// save updated file
$doc->formatOutput = true;
$doc->save("breakfast.xml");

echo "Juice Added Successfully";

?>
