# Tracmap\DeviceApi

All URIs are relative to *https://test-api.tracmap.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountsAccountIdJobsJobIdAssignPost**](DeviceApi.md#accountsAccountIdJobsJobIdAssignPost) | **POST** /accounts/{account_id}/jobs/{job_id}/assign | Assign a job to one or more devices.
[**deviceGet**](DeviceApi.md#deviceGet) | **GET** /device | Returns a &#39;root&#39; document for a headunit as the starting point to navigate the REST graph.
[**devicesDeviceIdJobsGet**](DeviceApi.md#devicesDeviceIdJobsGet) | **GET** /devices/{device_id}/jobs | Returns a list of Job Summary resources with basic job information.
[**devicesDeviceIdPositionsPost**](DeviceApi.md#devicesDeviceIdPositionsPost) | **POST** /devices/{device_id}/positions | Post a collection of sequential positions of a device or vehicle.


# **accountsAccountIdJobsJobIdAssignPost**
> \Tracmap\Model\DeviceShortListRead accountsAccountIdJobsJobIdAssignPost($accountId, $jobId, $ownershipId)

Assign a job to one or more devices.

Assigns an existing job to one or more devices owned by the contractor. You can create a new job with POST **_/accounts/{account_id}/jobs**.  When assigning jobs, use the *ownership_id* corresponding to the device(s), rather than the *device_id*.  Passing an invalid *ownership_id*, or one that refers to a device not owned by the account, does not cause an error response; please check the response body to verify the job was assigned to the expected device(s).

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

$apiInstance = new Tracmap\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The numeric identifier of the account that includes the job and target devices to be assigned.
$jobId = 56; // int | The numeric identifier of the job to be assigned. This is returned by POST **_/accounts/{account_id}/jobs** when creating a new job, or by GET **_/accounts/{account_id}/jobs** for existing jobs.
$ownershipId = new \Tracmap\Model\DeviceShortListRead(); // \Tracmap\Model\DeviceShortListRead | List of *ownership_id* of the device(s) to which the job will be assigned. These are returned by GET from **_/accounts/{account_id}/devices**, or from the _Ownership ID_ column in the Display _Units table_ in the Tracmap Online Admin area.

try {
    $result = $apiInstance->accountsAccountIdJobsJobIdAssignPost($accountId, $jobId, $ownershipId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->accountsAccountIdJobsJobIdAssignPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The numeric identifier of the account that includes the job and target devices to be assigned. |
 **jobId** | **int**| The numeric identifier of the job to be assigned. This is returned by POST **_/accounts/{account_id}/jobs** when creating a new job, or by GET **_/accounts/{account_id}/jobs** for existing jobs. |
 **ownershipId** | [**\Tracmap\Model\DeviceShortListRead**](../Model/DeviceShortListRead.md)| List of *ownership_id* of the device(s) to which the job will be assigned. These are returned by GET from **_/accounts/{account_id}/devices**, or from the _Ownership ID_ column in the Display _Units table_ in the Tracmap Online Admin area. |

### Return type

[**\Tracmap\Model\DeviceShortListRead**](../Model/DeviceShortListRead.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deviceGet**
> \Tracmap\Model\DeviceRootDocument deviceGet()

Returns a 'root' document for a headunit as the starting point to navigate the REST graph.

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

$apiInstance = new Tracmap\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deviceGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->deviceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Tracmap\Model\DeviceRootDocument**](../Model/DeviceRootDocument.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicesDeviceIdJobsGet**
> \Tracmap\Model\JobListRead devicesDeviceIdJobsGet($deviceId)

Returns a list of Job Summary resources with basic job information.

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

$apiInstance = new Tracmap\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deviceId = "deviceId_example"; // string | The name of the device.

try {
    $result = $apiInstance->devicesDeviceIdJobsGet($deviceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->devicesDeviceIdJobsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deviceId** | **string**| The name of the device. |

### Return type

[**\Tracmap\Model\JobListRead**](../Model/JobListRead.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicesDeviceIdPositionsPost**
> devicesDeviceIdPositionsPost($deviceId, $positions)

Post a collection of sequential positions of a device or vehicle.

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

$apiInstance = new Tracmap\Api\DeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deviceId = "deviceId_example"; // string | The name of the device.
$positions = new \Tracmap\Model\DevicePositions(); // \Tracmap\Model\DevicePositions | Position array.

try {
    $apiInstance->devicesDeviceIdPositionsPost($deviceId, $positions);
} catch (Exception $e) {
    echo 'Exception when calling DeviceApi->devicesDeviceIdPositionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deviceId** | **string**| The name of the device. |
 **positions** | [**\Tracmap\Model\DevicePositions**](../Model/DevicePositions.md)| Position array. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

