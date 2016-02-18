<?php
class CaptureCollectionTest extends PHPUnit_Framework_TestCase
{
    protected $serializer;

    protected function setUp() {
        $this->serializer = new CyberSource\ObjectSerializer();
    }

    public function testDeserialize() {
        $response = file_get_contents('./test/models/CaptureCollection.json');
        $obj = $this->serializer->deserialize(json_decode($response), '\CyberSource\Model\CaptureCollection');
        $this->assertEquals(true, is_object($obj));
        foreach (\CyberSource\Model\CaptureCollection::$getters as $getter) {
            $this->assertTrue($obj->$getter() != null);
        }
    }
}
