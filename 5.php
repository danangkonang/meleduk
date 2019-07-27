<?php
$abjad=["a","f","e","g","x"];
sort($abjad);

    $clength=count($abjad);
    //$a = "";
    for($x=0;$x<$clength;$x++)
    {
      
      print_r(explode (" ,",$abjad[$x].","));
    }
?>