# Tracmap\ProductApi

All URIs are relative to *https://test-api.tracmap.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountsAccountIdProductsGet**](ProductApi.md#accountsAccountIdProductsGet) | **GET** /accounts/{account_id}/products | Information about all available products, optionally filtered.
[**accountsAccountIdProductsPost**](ProductApi.md#accountsAccountIdProductsPost) | **POST** /accounts/{account_id}/products | Create a new custom product.
[**accountsAccountIdProductsProductIdDelete**](ProductApi.md#accountsAccountIdProductsProductIdDelete) | **DELETE** /accounts/{account_id}/products/{product_id} | Delete a particular product.
[**accountsAccountIdProductsProductIdGet**](ProductApi.md#accountsAccountIdProductsProductIdGet) | **GET** /accounts/{account_id}/products/{product_id} | Detailed information about a particular product.
[**directProductGet**](ProductApi.md#directProductGet) | **GET** /direct/product | Information about all available products, optionally filtered. Only used in conjuction with /direct/job.


# **accountsAccountIdProductsGet**
> \Tracmap\Model\ProductListRead accountsAccountIdProductsGet($accountId, $name, $vendor, $sku)

Information about all available products, optionally filtered.

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

$apiInstance = new Tracmap\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The id of the account.
$name = "name_example"; // string | Return only products whose name contains this string.
$vendor = "vendor_example"; // string | Return only products who are from a vendor/supplier
$sku = "sku_example"; // string | Return only products whose have this unique identifier, sku or product code

try {
    $result = $apiInstance->accountsAccountIdProductsGet($accountId, $name, $vendor, $sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->accountsAccountIdProductsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The id of the account. |
 **name** | **string**| Return only products whose name contains this string. | [optional]
 **vendor** | **string**| Return only products who are from a vendor/supplier | [optional]
 **sku** | **string**| Return only products whose have this unique identifier, sku or product code | [optional]

### Return type

[**\Tracmap\Model\ProductListRead**](../Model/ProductListRead.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsAccountIdProductsPost**
> \Tracmap\Model\ProductListRead accountsAccountIdProductsPost($accountId, $product)

Create a new custom product.

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

$apiInstance = new Tracmap\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The id of the account.
$product = new \Tracmap\Model\Product(); // \Tracmap\Model\Product | 

try {
    $result = $apiInstance->accountsAccountIdProductsPost($accountId, $product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->accountsAccountIdProductsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The id of the account. |
 **product** | [**\Tracmap\Model\Product**](../Model/Product.md)|  |

### Return type

[**\Tracmap\Model\ProductListRead**](../Model/ProductListRead.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsAccountIdProductsProductIdDelete**
> accountsAccountIdProductsProductIdDelete($accountId, $productId)

Delete a particular product.

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

$apiInstance = new Tracmap\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The id of the account.
$productId = 56; // int | The id of the product.

try {
    $apiInstance->accountsAccountIdProductsProductIdDelete($accountId, $productId);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->accountsAccountIdProductsProductIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The id of the account. |
 **productId** | **int**| The id of the product. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsAccountIdProductsProductIdGet**
> \Tracmap\Model\ProductRead accountsAccountIdProductsProductIdGet($accountId, $productId)

Detailed information about a particular product.

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

$apiInstance = new Tracmap\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The id of the account.
$productId = 56; // int | The id of the product.

try {
    $result = $apiInstance->accountsAccountIdProductsProductIdGet($accountId, $productId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->accountsAccountIdProductsProductIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The id of the account. |
 **productId** | **int**| The id of the product. |

### Return type

[**\Tracmap\Model\ProductRead**](../Model/ProductRead.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **directProductGet**
> \Tracmap\Model\ProductListRead directProductGet($accountId, $name, $vendor, $sku)

Information about all available products, optionally filtered. Only used in conjuction with /direct/job.

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

$apiInstance = new Tracmap\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = "accountId_example"; // string | Return only products for this account.
$name = "name_example"; // string | Return only products whose name contains this string.
$vendor = "vendor_example"; // string | Return only products who are from a vendor/supplier
$sku = "sku_example"; // string | Return only products whose have this unique identifier, sku or product code

try {
    $result = $apiInstance->directProductGet($accountId, $name, $vendor, $sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->directProductGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**| Return only products for this account. | [optional]
 **name** | **string**| Return only products whose name contains this string. | [optional]
 **vendor** | **string**| Return only products who are from a vendor/supplier | [optional]
 **sku** | **string**| Return only products whose have this unique identifier, sku or product code | [optional]

### Return type

[**\Tracmap\Model\ProductListRead**](../Model/ProductListRead.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

