<?php
class VoidRequestTest extends PHPUnit_Framework_TestCase
{
    protected $serializer;

    protected function setUp() {
        $this->serializer = new CyberSource\ObjectSerializer();
    }

    public function testDeserialize() {
        $response = file_get_contents('./test/models/VoidRequest.json');
        $obj = $this->serializer->deserialize(json_decode($response), '\CyberSource\Model\VoidRequest');
        $this->assertEquals(true, is_object($obj));
        foreach (\CyberSource\Model\VoidRequest::$getters as $getter) {
            $this->assertTrue($obj->$getter() != null);
        }
    }
}
