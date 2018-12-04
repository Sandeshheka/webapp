<?php
    include 'config/config.php';

    $sql = "SELECT * FROM tbl_tutorials";
 
    $result = mysqli_query($conn, $sql);

    $xml = new DOMDocument("1.0");
    $xml->formatOutput=true;
    $tutorials=$xml->createElement("tutorial");
    $xml->appendChild($tutorials);

    while($row=mysqli_fetch_array($result)){
        $tutorial=$xml->createElement("tutorial");
        $tutorials->appendChild($tutorial);

        $name=$xml->createElement("name",$row['name']);
        $tutorial->appendChild($name);

        $cost=$xml->createElement("cost",$row['cost']);
        $tutorial->appendChild($cost);

        $teacher=$xml->createElement("teacher",$row['teacher']);
        $tutorial->appendChild($teacher);
    }

    echo "<xmp>".$xml->saveXML()."</xmp>";

    $xml->save("tutorials.xml");