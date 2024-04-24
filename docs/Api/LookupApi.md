# Tracmap\LookupApi

All URIs are relative to *https://test-api.tracmap.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**lookupContractorGet**](LookupApi.md#lookupContractorGet) | **GET** /lookup/contractor | Find ID of contractor in our system.
[**lookupContractorOptions**](LookupApi.md#lookupContractorOptions) | **OPTIONS** /lookup/contractor | Preflight for lookup APIs


# **lookupContractorGet**
> \Tracmap\Model\ContractorRead lookupContractorGet($id, $name, $email, $phone, $mobile, $address, $town, $multiple)

Find ID of contractor in our system.

This endpoint can be used to find contractors in the TracMap database.  - Providing the id parameter will restrict the dataset to a single contractor with that ID.  - Providing only the multiple parameter will return a list of all active contractors.

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

$apiInstance = new Tracmap\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The known contractor ID, useful to fetching the contractors current state.
$name = "name_example"; // string | Name of contractor.
$email = "email_example"; // string | Email of Contractor.
$phone = "phone_example"; // string | Phone
$mobile = "mobile_example"; // string | Mobile
$address = "address_example"; // string | Address
$town = "town_example"; // string | Town
$multiple = true; // bool | Enable non-exact matching and multiple results

try {
    $result = $apiInstance->lookupContractorGet($id, $name, $email, $phone, $mobile, $address, $town, $multiple);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->lookupContractorGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The known contractor ID, useful to fetching the contractors current state. | [optional]
 **name** | **string**| Name of contractor. | [optional]
 **email** | **string**| Email of Contractor. | [optional]
 **phone** | **string**| Phone | [optional]
 **mobile** | **string**| Mobile | [optional]
 **address** | **string**| Address | [optional]
 **town** | **string**| Town | [optional]
 **multiple** | **bool**| Enable non-exact matching and multiple results | [optional]

### Return type

[**\Tracmap\Model\ContractorRead**](../Model/ContractorRead.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lookupContractorOptions**
> lookupContractorOptions($id, $name, $email, $phone, $mobile, $address, $town, $multiple)

Preflight for lookup APIs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tracmap\Api\LookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The known contractor ID, useful to fetching the contractors current state.
$name = "name_example"; // string | Name of contractor.
$email = "email_example"; // string | Email of Contractor.
$phone = "phone_example"; // string | Phone
$mobile = "mobile_example"; // string | Mobile
$address = "address_example"; // string | Address
$town = "town_example"; // string | Town
$multiple = true; // bool | Enable non-exact matching and multiple results

try {
    $apiInstance->lookupContractorOptions($id, $name, $email, $phone, $mobile, $address, $town, $multiple);
} catch (Exception $e) {
    echo 'Exception when calling LookupApi->lookupContractorOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The known contractor ID, useful to fetching the contractors current state. | [optional]
 **name** | **string**| Name of contractor. | [optional]
 **email** | **string**| Email of Contractor. | [optional]
 **phone** | **string**| Phone | [optional]
 **mobile** | **string**| Mobile | [optional]
 **address** | **string**| Address | [optional]
 **town** | **string**| Town | [optional]
 **multiple** | **bool**| Enable non-exact matching and multiple results | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

