<?php
namespace AuthressSdk;

use \AuthressSdk\Login\LoginClient;

/**
 * AuthressClient Class Doc Comment

 * @category Class
 * @package  AuthressSdk
 * @author   Authress Developers
 * @link     https://authress.io/app/#/api
 */
class AuthressClient
{
    private static $defaultAuthressClient;
    
    /**
      * The loginClient for Authress.
      *
      * @var \AuthressSdk\Login\LoginClient
      */
    public $login;

    /**
      * The Authress applicationId for this app - see https://authress.io/app/#/manage?focus=applications
      *
      * @var string
      */
    public $applicationId;

    /**
     * Associate array to store API key
     *
     * @var string
     */
    protected $apiKey = '';

    /**
     * Access token for OAuth
     *
     * @var string
     */
    protected $accessToken = '';

    /**
     * Username for HTTP basic authentication
     *
     * @var string
     */
    protected $username = '';

    /**
     * Password for HTTP basic authentication
     *
     * @var string
     */
    protected $password = '';

    /**
     * The host
     *
     * @var string
     */
    protected $host = '/';

    /**
     * User agent of the HTTP request
     *
     * @var string
     */
    protected $userAgent = 'PHP AuthressSDK';

    /**
     * Debug switch (default set to false)
     *
     * @var bool
     */
    protected $debug = false;

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $debugFile = 'php://output';

    /**
     * Constructor
     * @param string $baseUrl - The host domain for authress (matches your Authress account custom domain https://authress.io/app/#/setup?focus=domain)
     * @param ?string $applicationId - The host domain for authress (matches your Authress account custom domain https://authress.io/app/#/setup?focus=domain)
     */
    public function __construct(string $baseUrl, ?string $applicationId = null)
    {
        $this->host = $baseUrl;
        $this->login = isset($applicationId) ? new LoginClient($baseUrl, $applicationId) : null;
    }

    /**
     * Sets API key
     *
     * @param string $key              API key or token
     *
     * @return $this
     */
    public function setApiKey($key)
    {
        $this->apiKey = $key;
        return $this;
    }

    /**
     * Sets the access token for OAuth
     *
     * @param string $accessToken Token for OAuth
     *
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     * Gets the access token for OAuth
     *
     * @return string Access token for OAuth
     */
    public function getAccessToken()
    {
        if ($this->apiKey) {
            return $this->apiKey;
        }
        return $this->accessToken;
    }

    /**
     * Gets the host
     *
     * @return string Host
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Gets the user agent of the api client
     *
     * @return string user agent
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Gets the debug flag
     *
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Gets the debug file
     *
     * @return string
     */
    public function getDebugFile()
    {
        return $this->debugFile;
    }

    /**
     * Gets the default configuration instance
     *
     * @return AuthressClient
     */
    public static function getDefaultAuthressClient()
    {
        return self::$defaultAuthressClient;
    }

    /**
     * Gets the essential information for debugging
     *
     * @return string The report for debugging
     */
    public static function toDebugReport()
    {
        $report  = 'PHP SDK (AuthressSdk) Debug Report:' . PHP_EOL;
        $report .= '    OS: ' . php_uname() . PHP_EOL;
        $report .= '    PHP Version: ' . PHP_VERSION . PHP_EOL;
        $report .= '    OpenAPI Spec Version: v1' . PHP_EOL;

        return $report;
    }
}
