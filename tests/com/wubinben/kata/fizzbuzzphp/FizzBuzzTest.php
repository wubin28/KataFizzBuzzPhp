<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 14-2-12
 * Time: 下午7:38
 */

namespace com\wubinben\kata\fizzbuzzphp;
require_once '../../../../../src/com/wubinben/kata/fizzbuzzphp/WordHandler.php';


class FizzBuzzTest extends \PHPUnit_Framework_TestCase {

    public function test_Given_1_SHOULD_say_1() {
        // Given
        $wordHandler = new WordHandler();

        // When & Then
        $this->assertEquals("1", $wordHandler->handle(1));
    }

    public function test_Given_2_SHOULD_say_2() {
        // Given
        $wordHandler = new WordHandler();

        // When & Then
        $this->assertEquals("2", $wordHandler->handle(2));
    }

}
 