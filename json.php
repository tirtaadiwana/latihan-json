<?php
$json_data=file_get_contents("latihan.json");
$obj = json_decode($json_data);
echo "nim : "; echo $obj->nim;
echo "<br>";
echo "nama : "; echo $obj->nama;
echo "<br>";
echo "email : "; echo $obj->email;
echo "<br>";
echo "no_hp: "; echo $obj->no_hp;
echo "<br>";
echo "Nama matakuliah: ";echo $obj->mata_kuliah[0];
echo "<br>";
echo "Nama matakuliah: ";echo $obj->mata_kuliah[1];
echo "<br>";
echo "Nama matakuliah: ";echo $obj->mata_kuliah[2];
?>