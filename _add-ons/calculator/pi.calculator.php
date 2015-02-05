<?php

/**
 * Calculate a provided math formula and return a result.
 * If a precision is supplied, will be formatted using number_format
 * If invalid equation provided, will return error array
 */
class Plugin_calculator extends Plugin {

    public function index() {
        $equation = $this->fetchParam('equation', null);
        $precision = (int)$this->fetchParam('precision', -1, 'is_numeric');
        
        // make sure the characters are all good 
        // (only operands, numbers and related charaters)
        if (preg_match("/[^\d\s+*^\/()\.,-]/", $equation)) { 
            return array('error' => array('message' => 'Not a valid equation (only operands, numbers and related characters allowed).', 'equation' => $equation)); 
        }
        
        $result =  eval("return ($equation);");

        if ($precision >= 0) {
             return number_format($result, $precision);    
        }
        else {
            return $result;  
        }
    }

}
