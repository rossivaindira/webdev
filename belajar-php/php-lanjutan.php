<?php

    $nama = "Bugs";
    $umur = 3;
    $tinggi = 3.5;


   // $kalimat = "Halo, nama saya $nama umur saya adalah $umur tahun tinggi badan saya adalah $tinggi cm";

   // echo $kalimat; 
    
   // percabangan if-else
    /*
    if ($nama == "Bugs") 
    {
        echo "Benar itu Bugs";

    } else {
        echo "Kamu siapa?";
    }   
*/
/*
    // percabangan switch-case

    switch($nama) {
        case "Bugs";
        echo "Benar itu Bugs";
        break;
        default;
        echo "Kamu siapa?";


    }
    */

    // Ternary Operator
    /*
    $kalimat = $nama == "Bugs" ? "Benar itu Bugs" : "Kamu Siapa?";

    echo $kalimat;
    */ 

    // perulangan for
    /*
    for($i=0; $i < 10; $i++) {
        echo "Ini adalah perulangan ke-$i";
        echo "<br/>"; 
    }
    */

    $i = 0;


// perualangan while
/*
    while($i <=10) {
        echo "Ini adalah perulangan ke-$i";
        echo "<br/>";
        $i++;
    }
*/

// perulangan do while
/*
$i = 10;

do {
    echo "Ini adalah perulangan ke-$i";
    echo "<br/>";
    $i--;
    
}while($i > 0);
*/

// perulangan foreach
/*
$nama = array("Rossi" => 25000000,
              "Jenner" => 10000000,
              "Indira" => 230000000,
              "Tom" => 50000000,
              "Evans" => 450000000,
              "Ben" => 5000000000);

foreach ($nama as $sebutan => $nilai) {
    echo "Nama saya adalah $sebutan nilai buruan saya adalah Rp ".number_format($nilai, 2, ".", ",");
    echo "<br/>";
}
*/

//user-defined function
/*
function sebut_nama ($nama) {
    $sebut = "Halo nama saya $nama";
    return $sebut;
    
}
    echo sebut_nama("Rossiva"); 
*/

echo strlen("Halo nama saya $nama");
?>