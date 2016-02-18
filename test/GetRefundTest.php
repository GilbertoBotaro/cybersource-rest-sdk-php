<?php
class GetRefundTest extends PHPUnit_Framework_TestCase
{
    protected $serializer;

    protected function setUp() {
        $this->serializer = new CyberSource\ObjectSerializer();
    }

    public function testDeserialize() {
        $response = file_get_contents('./test/models/GetRefund.json');
        $obj = $this->serializer->deserialize(json_decode($response), '\CyberSource\Model\GetRefund');
        $this->assertEquals(true, is_object($obj));
        foreach (\CyberSource\Model\GetRefund::$getters as $getter) {
            $this->assertTrue($obj->$getter() != null);
        }
    }
}
