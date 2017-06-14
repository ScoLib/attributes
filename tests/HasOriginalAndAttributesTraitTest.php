<?php


namespace Sco\Attributes;

class HasOriginalAndAttributesTraitTest extends \PHPUnit_Framework_TestCase
{
    protected $mock;

    protected $array = [
        'test'  => 123,
        'empty' => '',
    ];

    public function setUp()
    {
        $this->mock = $this->getMockForTrait(HasOriginalAndAttributesTrait::class);
    }

    public function testSetOriginal()
    {
        $this->assertEquals($this->mock, $this->mock->setOriginal($this->array));
        return $this->mock;
    }

    /**
     * @depends testSetOriginal
     *
     * @param $mock
     */
    public function testGetOriginal($mock)
    {
        $this->assertEquals(123, $mock->getOriginal('test'));
    }
}
