<?php
function count_vowels($kata){
    $arr = str_split($kata);
    $vocal = ['a', 'i', 'u', 'e', 'o'];
    $found = array_intersect($vocal, $arr);
    $count = array_count_values($arr);
    $result = [];
    foreach ($found as $item) {
      $result[$item] = $count[$item];
    }
    return $result; 
    }

    $hasil = 0;
    $jumlah = 0;
    foreach (count_vowels('programmer') as $jumlah):
        $hasil = $hasil + $jumlah;
    endforeach;

    echo "- count_vowels('programmer')";
    echo "<br>";
    echo "&nbsp&nbspMaka akan dicetak/return: "; echo $hasil;
    echo "<br>";
    echo "<br>";

    $hasil = 0;
    $jumlah = 0;
    foreach (count_vowels('hmm') as $jumlah):
        $hasil = $hasil + $jumlah;
    endforeach;

    echo "- count_vowels('hmm..')";
    echo "<br>";
    echo "&nbsp&nbspMaka akan dicetak/return: "; echo $hasil;
?>
