<?php

//    function Perkalian ($Bilangan1, $Bilangan2)
//    {
//       $hasil = $Bilangan1*$Bilangan2;
//        return $hasil;
//    }
//    echo "Hasilnya Adalah = ".Perkalian (5, 25);

//    function sayHai()
//    {
//        echo"hello bro <br/>";
//    }
//    sayHai();
//    sayHai();
//    sayHai();

      function Predikat ($Predikat)
      {
          if ($Predikat >= 80)
          {
              $Predikat = "A";
          }
          elseif ($Predikat >= 70)
          {
              $Predikat = "B";
          }
          else
          {
              $Predikat = "Sinau Maning";
          }
          return $Predikat;
      }
      $nilai = 76;

      echo "Nilai anda adalah ".$nilai ;
      echo "<br/>Dengan Predikat ".Predikat($nilai);


?>
