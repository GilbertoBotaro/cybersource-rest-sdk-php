<?php
/**
 * ShipTo
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;
/**
 * ShipTo Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     CyberSource
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ShipTo implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'first_name' => 'string',
        'last_name' => 'string',
        'street1' => 'string',
        'street2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'postal_code' => 'string',
        'country' => 'string',
        'phone_number' => 'string',
        'shipping_method' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'street1' => 'street1',
        'street2' => 'street2',
        'city' => 'city',
        'state' => 'state',
        'postal_code' => 'postalCode',
        'country' => 'country',
        'phone_number' => 'phoneNumber',
        'shipping_method' => 'shippingMethod'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'street1' => 'setStreet1',
        'street2' => 'setStreet2',
        'city' => 'setCity',
        'state' => 'setState',
        'postal_code' => 'setPostalCode',
        'country' => 'setCountry',
        'phone_number' => 'setPhoneNumber',
        'shipping_method' => 'setShippingMethod'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'street1' => 'getStreet1',
        'street2' => 'getStreet2',
        'city' => 'getCity',
        'state' => 'getState',
        'postal_code' => 'getPostalCode',
        'country' => 'getCountry',
        'phone_number' => 'getPhoneNumber',
        'shipping_method' => 'getShippingMethod'
    );
  
    
    /**
      * $first_name First name
      * @var string
      */
    protected $first_name;
    
    /**
      * $last_name Last name
      * @var string
      */
    protected $last_name;
    
    /**
      * $street1 Street address
      * @var string
      */
    protected $street1;
    
    /**
      * $street2 Street address 2
      * @var string
      */
    protected $street2;
    
    /**
      * $city City
      * @var string
      */
    protected $city;
    
    /**
      * $state State
      * @var string
      */
    protected $state;
    
    /**
      * $postal_code Postal code
      * @var string
      */
    protected $postal_code;
    
    /**
      * $country Country
      * @var string
      */
    protected $country;
    
    /**
      * $phone_number Phone Number
      * @var string
      */
    protected $phone_number;
    
    /**
      * $shipping_method Shipping method for the product
      * @var string
      */
    protected $shipping_method;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->first_name = $data["first_name"];
            $this->last_name = $data["last_name"];
            $this->street1 = $data["street1"];
            $this->street2 = $data["street2"];
            $this->city = $data["city"];
            $this->state = $data["state"];
            $this->postal_code = $data["postal_code"];
            $this->country = $data["country"];
            $this->phone_number = $data["phone_number"];
            $this->shipping_method = $data["shipping_method"];
        }
    }
    
    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }
  
    /**
     * Sets first_name
     * @param string $first_name First name
     * @return $this
     */
    public function setFirstName($first_name)
    {
        
        $this->first_name = $first_name;
        return $this;
    }
    
    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }
  
    /**
     * Sets last_name
     * @param string $last_name Last name
     * @return $this
     */
    public function setLastName($last_name)
    {
        
        $this->last_name = $last_name;
        return $this;
    }
    
    /**
     * Gets street1
     * @return string
     */
    public function getStreet1()
    {
        return $this->street1;
    }
  
    /**
     * Sets street1
     * @param string $street1 Street address
     * @return $this
     */
    public function setStreet1($street1)
    {
        
        $this->street1 = $street1;
        return $this;
    }
    
    /**
     * Gets street2
     * @return string
     */
    public function getStreet2()
    {
        return $this->street2;
    }
  
    /**
     * Sets street2
     * @param string $street2 Street address 2
     * @return $this
     */
    public function setStreet2($street2)
    {
        
        $this->street2 = $street2;
        return $this;
    }
    
    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }
  
    /**
     * Sets city
     * @param string $city City
     * @return $this
     */
    public function setCity($city)
    {
        
        $this->city = $city;
        return $this;
    }
    
    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
  
    /**
     * Sets state
     * @param string $state State
     * @return $this
     */
    public function setState($state)
    {
        
        $this->state = $state;
        return $this;
    }
    
    /**
     * Gets postal_code
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }
  
    /**
     * Sets postal_code
     * @param string $postal_code Postal code
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        
        $this->postal_code = $postal_code;
        return $this;
    }
    
    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
  
    /**
     * Sets country
     * @param string $country Country
     * @return $this
     */
    public function setCountry($country)
    {
        
        $this->country = $country;
        return $this;
    }
    
    /**
     * Gets phone_number
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }
  
    /**
     * Sets phone_number
     * @param string $phone_number Phone Number
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        
        $this->phone_number = $phone_number;
        return $this;
    }
    
    /**
     * Gets shipping_method
     * @return string
     */
    public function getShippingMethod()
    {
        return $this->shipping_method;
    }
  
    /**
     * Sets shipping_method
     * @param string $shipping_method Shipping method for the product
     * @return $this
     */
    public function setShippingMethod($shipping_method)
    {
        
        $this->shipping_method = $shipping_method;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}