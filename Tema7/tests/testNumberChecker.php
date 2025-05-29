<?php

use PHPUnit\Framework\TestCase;
require_once 'numberChecker.php';

final class testNumberChecker extends TestCase{

    public function testIsPositive(): void
    {
        $numberChecker = new NumberChecker(2);

        $result = $numberChecker->isPositive();

        $this->assertSame(true, $result);
    }

    public function testIsEven(): void {

    
        $numberChecker = new NumberChecker(2);

        $result = $numberChecker->isEven();

        $this->assertSame(true, $result);
    }


}

?>