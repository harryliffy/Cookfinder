<?php 

Class Navigation  {

    public function ActiveMenu($TabId)
    {
            echo '<script >
            var element = document.getElementById("'.$TabId.'");
            element.classList.add("current-menu-item");
                </script>';
    }

                 }



?>