<?php 
error_reporting (E_ALL ^ E_WARNING||E_NOTICE);
    $date=date('Y-m-d');
    echo "<head><title>My Guest Book</title></head>";
    $fp = fopen("Data.txt", "r");
    echo "<center>";
    echo "<h1>Data Orderan Laundry</h1>";
    echo "<table border='1' cellspacing='0' cellpadding='2'>";
    echo "<tr> <td witdh='150px'>Tanggal</td>
               <td witdh='150px'>Nama</td>
               <td witdh='150px'>Alamat</td>
               <td witdh='150px'>Kontak</td>
               <td witdh='150px'>Orderan</td>
               <td witdh='150px'>Catatan</td>
          </tr>";
    while ($isi = fgets($fp,80)) {
        $pisah = explode('|', $isi);
        
        echo "<tr>  <td>$date</td>
                     <td>$pisah[0]</td>
                     <td>$pisah[1]</td>
                     <td>$pisah[2]</td>
                     <td>$pisah[3]</td>
                     <td>$pisah[4]</td>
            </tr>";
        

    }

    echo "</table>";
    echo "</center>";
    echo "<center><a href='index.html'>HOME</a></center><br>";

?>