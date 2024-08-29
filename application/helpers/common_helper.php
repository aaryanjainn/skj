<?php
    
    function e($getElement)
    {
        echo $getElement;
    }

    function ep($getElement)
    {
        echo "<pre>";
        print_r($getElement);
        echo "</pre>";
    }

    function epd($getElement)
    {
        echo "<pre>";
        print_r($getElement);
        echo "</pre>";
        die;
    }

?>