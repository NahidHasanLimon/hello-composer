<?php 

namespace NahidHasanLimon\HelloWorld;

class Index
{
    public function greet($greet)
    {
        $added_string = "Thank you for installation.";
        $returned_string = $greet.$added_string;
        return $returned_string;
    }
}

