<?php
namespace ProfideoDeepCopyTest\Matcher;

use ProfideoDeepCopy\Matcher\PropertyMatcher;

/**
 * Test PropertyMatcher
 */
class PropertyMatcherTest extends \PHPUnit_Framework_TestCase
{
    public function testMatches()
    {
        $matcher = new PropertyMatcher('ProfideoDeepCopyTest\Matcher\PropertyMatcherTestFixture', 'property1');

        $this->assertTrue($matcher->matches(new PropertyMatcherTestFixture(), 'property1'));
        $this->assertFalse($matcher->matches(new \stdClass(), 'property1'));
        $this->assertFalse($matcher->matches(new PropertyMatcherTestFixture(), 'property2'));
    }
}

class PropertyMatcherTestFixture {
    public $property1;
}
