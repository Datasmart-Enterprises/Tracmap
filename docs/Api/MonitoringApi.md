# Tracmap\MonitoringApi

All URIs are relative to *https://test-api.tracmap.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**heartbeatGet**](MonitoringApi.md#heartbeatGet) | **GET** /heartbeat | Retrieves API operational state.


# **heartbeatGet**
> heartbeatGet()

Retrieves API operational state.

This endpoint can be used to check whether the API is operational. If the API is unavailable, the request will time out.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tracmap\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->heartbeatGet();
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->heartbeatGet: ', $e->getMessage(), PHP_EOL;
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
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

