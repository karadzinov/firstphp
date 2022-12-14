<?php


$imeNaVariabla = false; // boolean




$niza = ["Martin", "Laze", "Matea", "Irena"];


$products = ["name" => "Parfem", "cena" => 200, "kolicina" => 2];





extract($_POST);


if($iagree) {
    $iagree = 1;
}  else {
    $iagree = 0;
}





$message2 = " and it is for service";

$message = "This is Martin's MacBook Pro" . " 2008 year" . $message2;
$message = "Filip;Martin;Matea;Laze";


$nekojaData = date("d-m-Y");
$novDatum = explode("-", $nekojaData);
$novDatum[1] = "Декември";
$novDatum = implode("-", $novDatum);



var_dump($novDatum);
die();



$novaNiza = explode(";", $message);

$novaNiza[1] = "Vlado";
var_dump($novaNiza[1]);

$novStrinig = implode("-", $novaNiza);

var_dump($message);
var_dump($novStrinig);


var_dump($novaNiza[0]);
die();




$cena = $products["cena"];

echo $cena;

die();


$c = mnozenje(1,10);

// echo $c;




if(10 < $c) {
    echo "Vistina e";
} else if("10" === $c) {
    echo "Ednakvi se";
} else {
    echo "Ne e vistina";
}



$email = '';
$password = '';



if(isset($_POST['email']) && !empty($_POST['email'])) {
   $email = $_POST['email'];
};

if(isset($_POST['password']) && !empty($_POST['password']))  {
    $password = $_POST['password'];
}


$password = $_POST["password"];

$address = $_POST['address'];

$address2 = $_POST['address2'];

$city = $_POST['city'];

$state = $_POST['state'];

$zip = $_POST['zip'];

$iagree = $_POST['iagree'];


// console.log(a + " " + "neshto treto");

 echo $email . " " . $password . " " . $address . " " . $address2 . " " .$city;





function mnozenje($a, $b) {
    $resultat = $a * $b;
    return $resultat;
}

