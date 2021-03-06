<?php
/**
 * TransactionSearchRequest
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
 * TransactionSearchRequest Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     CyberSource
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TransactionSearchRequest implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'query' => 'string',
        'offset' => 'int',
        'limit' => 'int'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'query' => 'query',
        'offset' => 'offset',
        'limit' => 'limit'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'query' => 'setQuery',
        'offset' => 'setOffset',
        'limit' => 'setLimit'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'query' => 'getQuery',
        'offset' => 'getOffset',
        'limit' => 'getLimit'
    );
  
    
    /**
      * $query Query string to search for transactions.
      * @var string
      */
    protected $query;
    
    /**
      * $offset This paging parameter is used to specify the page number.
      * @var int
      */
    protected $offset;
    
    /**
      * $limit This paging parameter is used to specify the page size, i.e. number of records.
      * @var int
      */
    protected $limit;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->query = $data["query"];
            $this->offset = $data["offset"];
            $this->limit = $data["limit"];
        }
    }
    
    /**
     * Gets query
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }
  
    /**
     * Sets query
     * @param string $query Query string to search for transactions.
     * @return $this
     */
    public function setQuery($query)
    {
        
        $this->query = $query;
        return $this;
    }
    
    /**
     * Gets offset
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }
  
    /**
     * Sets offset
     * @param int $offset This paging parameter is used to specify the page number.
     * @return $this
     */
    public function setOffset($offset)
    {
        
        $this->offset = $offset;
        return $this;
    }
    
    /**
     * Gets limit
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }
  
    /**
     * Sets limit
     * @param int $limit This paging parameter is used to specify the page size, i.e. number of records.
     * @return $this
     */
    public function setLimit($limit)
    {
        
        $this->limit = $limit;
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
