<?php
    
    $tab = array();
    $tab[0][0] = 1;
    $nb = 15;
    
    error_reporting(0);
    
    
    for ($i = 0; $i < $nb; $i++)
    {
        for ($o = 0; $o < count($tab[$i])+1; $o++)
        {
            
            if ($o == 0)
            {
               $tab[$i+1][$o] = $tab[0][0];
            }
            else
            {
                $new = $tab[$i][$o-1] + $tab[$i][$o];
                $tab[$i+1][$o] = $new;
            }
            
        }
        echo "<br>";
        print_r($tab[$i]);
    }
    
?>