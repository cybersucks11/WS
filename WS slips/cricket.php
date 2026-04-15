<?php

$doc = new DOMDocument("1.0");

// root element
$root = $doc->createElement("CricketTeam");
$doc->appendChild($root);

// data (easy to remember)
$data = [
    ["Australia","Smith","80","2"],
    ["India","Virat","100","1"],
    ["England","Root","75","3"]
];

foreach($data as $d){
    $team = $doc->createElement("Team");
    $team->setAttribute("Country",$d[0]);

    $team->appendChild($doc->createElement("Player",$d[1]));
    $team->appendChild($doc->createElement("Runs",$d[2]));
    $team->appendChild($doc->createElement("Wicket",$d[3]));

    $root->appendChild($team);
}

// save file
$doc->formatOutput = true;
$doc->save("cricket.xml");

echo "XML Created";

?>
