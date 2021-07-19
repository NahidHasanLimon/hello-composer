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
    
        function currency_format($number){
            $number=round($number,2);
        
        
        
            $number = preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $number);
        
        
            return $number;
            
        }
}

