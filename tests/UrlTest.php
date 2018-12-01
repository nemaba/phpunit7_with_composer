<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class URLTest extends TestCase
{
    public function testSluggifyReturnsSluggifiedString()
    {
        $originalString = 'My string to be sluggified';
        $expectedResult = 'my-string-to-be-sluggified';

        $url = new URL();
        $result = $url->sluggify($originalString);
        $this->assertEquals($expectedResult, $result);
    }
}
