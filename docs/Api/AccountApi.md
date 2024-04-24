# Tracmap\AccountApi

All URIs are relative to *https://test-api.tracmap.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountsAccountIdGet**](AccountApi.md#accountsAccountIdGet) | **GET** /accounts/{account_id} | Base document for a particular account.
[**accountsByForeignIdForeignIdGet**](AccountApi.md#accountsByForeignIdForeignIdGet) | **GET** /accounts/by_foreign_id/{foreign_id} | List of all accounts linked by your &#39;foreign&#39; account id or key.
[**accountsGet**](AccountApi.md#accountsGet) | **GET** /accounts | List of all accounts linked to your partner account.
[**accountsOptions**](AccountApi.md#accountsOptions) | **OPTIONS** /accounts | Preflight for accounts APIs
[**accountsPost**](AccountApi.md#accountsPost) | **POST** /accounts | Create a customer or farmer account under a parent account.


# **accountsAccountIdGet**
> \Tracmap\Model\AccountReadFull accountsAccountIdGet($accountId)

Base document for a particular account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Tracmap\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tracmap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');
// Configure API key authorization: device_api_key
$config = Tracmap\Configuration::getDefaultConfiguration()->setApiKey('hash', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tracmap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('hash', 'Bearer');

$apiInstance = new Tracmap\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The id of the account.

try {
    $result = $apiInstance->accountsAccountIdGet($accountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountsAccountIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The id of the account. |

### Return type

[**\Tracmap\Model\AccountReadFull**](../Model/AccountReadFull.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsByForeignIdForeignIdGet**
> \Tracmap\Model\AccountReadFull[] accountsByForeignIdForeignIdGet($foreignId)

List of all accounts linked by your 'foreign' account id or key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Tracmap\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tracmap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');
// Configure API key authorization: device_api_key
$config = Tracmap\Configuration::getDefaultConfiguration()->setApiKey('hash', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tracmap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('hash', 'Bearer');

$apiInstance = new Tracmap\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$foreignId = "foreignId_example"; // string | Your id or key of the account.

try {
    $result = $apiInstance->accountsByForeignIdForeignIdGet($foreignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountsByForeignIdForeignIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **foreignId** | **string**| Your id or key of the account. |

### Return type

[**\Tracmap\Model\AccountReadFull[]**](../Model/AccountReadFull.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsGet**
> \Tracmap\Model\AccountReadFull[] accountsGet($name)

List of all accounts linked to your partner account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Tracmap\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tracmap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');
// Configure API key authorization: device_api_key
$config = Tracmap\Configuration::getDefaultConfiguration()->setApiKey('hash', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tracmap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('hash', 'Bearer');

$apiInstance = new Tracmap\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Optional URL-encoded name for filtering the returned accounts. The match can be full or partial and is is case-insensitive.

try {
    $result = $apiInstance->accountsGet($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Optional URL-encoded name for filtering the returned accounts. The match can be full or partial and is is case-insensitive. | [optional]

### Return type

[**\Tracmap\Model\AccountReadFull[]**](../Model/AccountReadFull.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsOptions**
> accountsOptions()

Preflight for accounts APIs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tracmap\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->accountsOptions();
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountsOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsPost**
> \Tracmap\Model\AccountReadFull accountsPost($account)

Create a customer or farmer account under a parent account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Tracmap\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tracmap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');
// Configure API key authorization: device_api_key
$config = Tracmap\Configuration::getDefaultConfiguration()->setApiKey('hash', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tracmap\Configuration::getDefaultConfiguration()->setApiKeyPrefix('hash', 'Bearer');

$apiInstance = new Tracmap\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account = new \Tracmap\Model\AccountWrite(); // \Tracmap\Model\AccountWrite | Name of account to be created.

try {
    $result = $apiInstance->accountsPost($account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | [**\Tracmap\Model\AccountWrite**](../Model/AccountWrite.md)| Name of account to be created. |

### Return type

[**\Tracmap\Model\AccountReadFull**](../Model/AccountReadFull.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

