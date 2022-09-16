<?php 
use PHPUnit\Framework\TestCase;

require_once 'WordCount.php';

class SimpleTest extends TestCase
{
    public function testCountWords()
    {
        $Wc = new WordCount();

        $TestSentence = "Installation";
        $WordCount = $Wc->countWords($TestSentence);


        $this->assertEquals(1, $WordCount);
    }
}
?>