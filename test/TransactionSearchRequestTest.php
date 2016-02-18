<?php
class TransactionSearchRequestTest extends PHPUnit_Framework_TestCase
{
    protected $serializer;

    protected function setUp() {
        $this->serializer = new CyberSource\ObjectSerializer();
    }

    public function testDeserialize() {
        $response = file_get_contents('./test/models/TransactionSearchRequest.json');
        $obj = $this->serializer->deserialize(json_decode($response), '\CyberSource\Model\TransactionSearchRequest');
        $this->assertEquals(true, is_object($obj));
        foreach (\CyberSource\Model\TransactionSearchRequest::$getters as $getter) {
            $this->assertTrue($obj->$getter() != null);
        }
    }
}
