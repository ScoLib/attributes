<?php

namespace Sco\Attributes;

class HasAttributesTraitTest extends \PHPUnit_Framework_TestCase
{
    protected $mock;

    protected $array = [
        'test'  => 123,
        'empty' => '',
    ];

    public function setUp()
    {
        $this->mock = $this->getMockForTrait(HasAttributesTrait::class);
        $this->mock->setAttribute($this->array);
    }

    public function testSetAttribute()
    {
        $this->assertEquals($this->mock, $this->mock->setAttribute($this->array));
        return $this->mock;
    }

    public function testGetAttributes()
    {
        $this->assertEquals($this->array, $this->mock->getAttributes());
    }

    public function testGetAttribute()
    {
        $this->assertEquals(123, $this->mock->getAttribute('test'));
    }

    public function testGetAttributeDefault()
    {
        $this->assertEquals(456, $this->mock->getAttribute('foo', 456));
    }

    public function testExistsAttribute()
    {
        $this->assertTrue($this->mock->existsAttribute('test'));
    }

    public function testNotExistsAttribute()
    {
        $this->assertFalse($this->mock->existsAttribute('foo'));
    }

    public function testHasAttribute()
    {
        $this->assertTrue($this->mock->hasAttribute(['empty', 'test']));
    }

    public function testNotHasAttribute()
    {
        $this->assertFalse($this->mock->hasAttribute(['empty', 'test', 'foo']));
    }

    public function testToJson()
    {
        $this->assertJsonStringEqualsJsonString(
            json_encode($this->array),
            $this->mock->toJson()
        );
    }
}
