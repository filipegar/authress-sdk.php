<?php
/**
 * ClaimResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  AuthressClient
 * @author   Authress Developers
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Authress
 *
 * <p> <h2>Introduction</h2> <p>Welcome to the Authress Authorization API.</p> <br> <p>The Authress REST API provides the operations and resources necessary to create records, assign permissions, and verify any user in your platform.</p> <p><ul>   <li>Create records to assign users roles and resources to grant access.</li>   <li>Check user access control by calling the authorization API at the right time.</li>   <li>Create service clients to securely access services in your platform.</li> </ul></p> <br> <p>For more in-depth scenarios check out the <a href=\"https://authress.io/knowledge-base\" target=\"_blank\">Authress knowledge base</a>.</p> </p>  <br> <p> <h2>Authorization</h2> <p>Authorization for Authress is handled one of two different ways. Both mechanisms use oauth2 <i>Bearer</i> tokens.</p> <br> <h4>Identity Provider JWT</h4> <p>Hook up your preferred identity provider directly to Authress. Authress will verify JWTs sourced from that identify provider and allow direct integration with these APIs. Any OIDC JWT provider works, Google, Auth0, Okta, etc... With this mechanism your web app can make direct calls to the permissions API on behalf of your users. <br> <a href=\"https://authress.io/app/#/manage?focus=identity\">Link identity provider</a> </p>  <br> <h4>Authress Clients</h4> <p>Regardless of using direct identity provider integration, with the API you can create Authress clients which can call any of the methods on the API. Your users won't be able to directly make API calls, all web app integrations must go through a service which stores the Authress private key. <br> <a href=\"https://authress.io/app/#/manage?focus=clients\">Create Authress service client</a> </p>  <br> <h2>Usage</h2> <h4>Billable APIs</h4> <p>Most of the api available is completely free. Use it to populate your roles and configure your account. You'll only be charged for the ones marked as Billable.</p> <p><ul>   <li><i class=\"far fa-fw fa-money-bill-alt text-primary\"></i> <span class=\"text-primary\">Billable</span> - <small>These APIs count as calls for your account and will be charged.</small></li>   <li><i class=\"fas fa-fw fa-angle-double-right text-secondary\"></i> <span class=\"text-secondary\">Free</span> - <small>These are totally free.</small></li>   <li><i class=\"fas fa-fw fa-balance-scale text-secondary\"></i> <span class=\"text-secondary\">Condition</span> - <small>Are conditionally free, see api methods for details.</small></li> </ul></p>  <br> <h4>API Access</h4> <p>Access to the following APIs is based on Authress permissions, not the application permissions assigned in Authress to the application services. Each resource is tagged with the required permission <span class=\"badge badge-outline-secondary\">Action: Resource</span></p>
 *
 * OpenAPI spec version: v1
 * Contact: support@authress.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace AuthressClient\Model;

use \ArrayAccess;
use \AuthressClient\ObjectSerializer;

/**
 * ClaimResponse Class Doc Comment
 *
 * @category Class
 * @package  AuthressClient
 * @author   Authress Developers
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ClaimResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ClaimResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
            ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
            ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
            ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
            ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
            ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
