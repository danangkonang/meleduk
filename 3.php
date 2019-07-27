<?php 

function gambar($i)
{
    $setengah = $i-(($i-1)/2);
    for ($row=1; $row < $i+1; $row++)
    {
      for ($col=1; $col<= $i; $col++)
        {
            if($col==1)
            {
                echo"*";
            }
            elseif ($col==$i)
            {
                echo "*";
            }
            elseif ($row==$setengah)
            {
                echo "*";
            }
            else 
            {
                echo "=";
            }
        }        
      echo "<br>";
    }
}

gambar(5);


