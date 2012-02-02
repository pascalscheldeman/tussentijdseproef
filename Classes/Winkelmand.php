<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Winkelmand
 *
 * @author webmaster
 */
class Winkelmand {

    public $aantal = 0;
    
    public function toevoegen($soort) {
        
        $this->aantal = $this->aantal +1;
    }
    
    public function mandWeergeven ()
    {
        return $this->aantal;
        
    }
}

?>
