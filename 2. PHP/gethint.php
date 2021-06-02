<?php
// Array with names
$a[] = "Jadavpur University";
$a[] = "Indian Institute of Technology, Kharagpur";
$a[] = "Indian Institute of Technology, Kanpur";
$a[] = "Indian Institute of Technology, Bombay";
$a[] = "Indian Institute of Technology, Delhi";
$a[] = "Indian Institute of Technology, Dhanbad";
$a[] = "Heritage Instite of Technology";
$a[] = "Maulana Abul Kalam Azad university of technology, Serampore";
$a[] = "Kalyani Govt. Engineering College";
$a[] = "Jalpaiguri Govt. Engineering College";
$a[] = "Indian Institute of Engineering science and Technology, Shibpur";
$a[] = "Govt. college of Engineering and Textile Technology, Serampore";
$a[] = "Govt. college of Engineering and Textile Technology, Berhampore";
$a[] = "Govt. college of Engineering and Ceramic Technology, Beleghata";
$a[] = "Govt. college of Engineering and Leather Technology, Saltlake";
$a[] = "Institute of Engineering & Management";
$a[] = "Techno India, Hooghly";
$a[] = "Techno India, Saltlake";
$a[] = "Techno India, Rajarhat";
$a[] = "Techno India university";
$a[] = "Techno India, Siliguri";
$a[] = "Camelia Institute of Technology";
$a[] = "Future Institute of Technology";
$a[] = "Supreme Institute of Management and Technology";
$a[] = "IISWBM";
$a[] = "Calcutta University";
$a[] = "Aliah University";
$a[] = "Neotia University";
$a[] = "Academy of Technology, Adisaptagram";
$a[] = "Calcutta Institute of Engineering and Management";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
