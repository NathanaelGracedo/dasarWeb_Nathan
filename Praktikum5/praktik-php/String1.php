<?php 
$loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Cras non pharetra velit. Ut eget ligula tempor, auctor sapien ut, consectetur lorem. 
Donec eu dui non risus porta aliquet a sed tellus. Nam sodales, purus vel varius lacinia, 
risus ligula tristique turpis, sit amet eleifend ante metus ut sem. Aliquam sit amet mauris placerat, vestibulum neque ut, vehicula quam."; // Menambahkan titik koma di akhir

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>"; 
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>
