<?php
    $awal = 1 ;
    while ($awal <=5) { //true
        echo "No :" .$awal. "<br>";
        $awal++;

    }
    $awal = 5;
    do{
        echo "Do While : ".$awal." <br>";
        $awal--;
    } while ($awal>=1);

    ?>
    
    <select name="" id="">
    <?php
       for ($i=1; $i <=31; $i++) {
        echo "<option> hari $i</option>";
    }
    ?>
   </select> 

   <select name="" id="">
    <?php
       for ($i=1; $i <=12; $i++) {
        echo "<option> bulan $i</option>";
    }
    ?>
   </select> 



   <select name="" id="">
    <?php
       for ($i=2000; $i <=2030; $i++) {
        echo "<option> tahun $i</option>";
    }
    ?>
   </select> 
 <br> <br> <br>
   <?php 
   $film[0] = "Avenger";
   $film[1] = "dune";
   $film[2] = "DIlan 1990";
   $film[3] = "doremon";
   $film[4] = "snowden";
   $film[5] = "Black berry";
   $film[6] = "wikileaks";
   $film[7] = "shincan";

   for ($i=0; $i < count($film); $i++) {
    echo " Nonton Film" .$film[$i]. "<br>";
   }
   ?>
 <br> <br> <br>
   <?php
   $films = array ( "Avenger","Dune","Doraemon");
   for ($i=0; $i < count($films); $i++) {
    echo " Nonton Film" .$films[$i]. "<br>";
   }
   ?>
 <br> <br> <br>
   <?php
    $mhs["budi"] = "21111012";
    $mhs["agus"] = "21111020";
    $mhs["sultan"] = "21111015";

    foreach ($mhs as $nama => $nim){
        echo "Mahasiswa Atas Nama " .$nama. " Dan NIM " .$nim. "<br>";
    }
   ?>
 <br> <br> <br>
   <?php
    $mhs = array (
        "budi" => "21111014",
        "wahyu" => "21111024",
        "dian" => "21111034",
        "wati" => "21111054",
    );
    foreach ($mhs as $nama => $nim){
        echo "Mahasiswa Atas Nama " .$nama. " Dan NIM " .$nim. "<br>";
    }

   ?>


