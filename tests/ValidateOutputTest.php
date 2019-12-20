<?php

use PHPUnit\Framework\TestCase; 

class ValidateOutputTest extends TestCase {
    
    public function testOutputStingSuccess(){
        $objValidateOutput = new \source\ValidateOutput();
        $this->assertNotEmpty($objValidateOutput->outputString());
    }

    // public function testOutputStingFail(){
    //     $objValidateOutput = new \source\ValidateOutput();
    //     $this->assertEmpty($objValidateOutput->outputString());
    // }
}