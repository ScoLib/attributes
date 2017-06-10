<?php

namespace Sco\Attributes;

class HasAttributesTraitTest extends \PHPUnit_Framework_TestCase
{
    protected $mock;

    public function setUp()
    {
        $this->mock = $this->getMockForTrait('Sco\Attributes\HasAttributesTrait');
    }

    public function testSetAttribute()
    {
        $this->assertTrue($this->mock->setAttribute('test', 123));
        return $this->mock;
    }


    /**
     * @depends testSetAttribute
     *
     * @param $mock
     */
    public function testGetAttribute($mock)
    {
        $this->assertEquals(123, $mock->getAttribute('test'));
    }
}
