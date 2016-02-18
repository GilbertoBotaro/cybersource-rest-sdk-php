<?php
class ShipToTest extends PHPUnit_Framework_TestCase
{
    protected $serializer;

    protected function setUp() {
        $this->serializer = new CyberSource\ObjectSerializer();
    }

    public function testDeserialize() {
        $response = file_get_contents('./test/models/ShipTo.json');
        $obj = $this->serializer->deserialize(json_decode($response), '\CyberSource\Model\ShipTo');
        $this->assertEquals(true, is_object($obj));
        foreach (\CyberSource\Model\ShipTo::$getters as $getter) {
            $this->assertTrue($obj->$getter() != null);
        }
    }
}
