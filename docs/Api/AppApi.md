# Tracmap\AppApi

All URIs are relative to *https://test-api.tracmap.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountsAccountIdJobsJobIdReportOptions**](AppApi.md#accountsAccountIdJobsJobIdReportOptions) | **OPTIONS** /accounts/{account_id}/jobs/{job_id}/report | Returns information about whether reports can be requested for the given job.
[**accountsAccountIdJobsJobIdReportPost**](AppApi.md#accountsAccountIdJobsJobIdReportPost) | **POST** /accounts/{account_id}/jobs/{job_id}/report | Request a contractor report be sent to a specified email address.
[**accountsAccountIdMapsMapIdMarkersGeoFeatureIdDelete**](AppApi.md#accountsAccountIdMapsMapIdMarkersGeoFeatureIdDelete) | **DELETE** /accounts/{account_id}/maps/{map_id}/markers/{geo_feature_id} | Delete a marker from the map.
[**accountsAccountIdMapsMapIdMarkersGeoFeatureIdPatch**](AppApi.md#accountsAccountIdMapsMapIdMarkersGeoFeatureIdPatch) | **PATCH** /accounts/{account_id}/maps/{map_id}/markers/{geo_feature_id} | Update details of a marker.
[**accountsAccountIdMapsMapIdMarkersPost**](AppApi.md#accountsAccountIdMapsMapIdMarkersPost) | **POST** /accounts/{account_id}/maps/{map_id}/markers | Create a new marker in the given map. The response body contains the identifier of the created feature.
[**accountsByUserGet**](AppApi.md#accountsByUserGet) | **GET** /accounts_by_user | List accounts available to the user.
[**mobileUserAccessUserPhonePost**](AppApi.md#mobileUserAccessUserPhonePost) | **POST** /mobile_user_access/{user_phone} | Retrieve mobile app access token.
[**mobileUserNotificationsGet**](AppApi.md#mobileUserNotificationsGet) | **GET** /mobile_user_notifications | Retrieve notifications previously issued for this user.
[**mobileUserNotificationsNotificationTokenDelete**](AppApi.md#mobileUserNotificationsNotificationTokenDelete) | **DELETE** /mobile_user_notifications/{notification_token} | Delete a push notification token.
[**mobileUserNotificationsNotificationTokenPost**](AppApi.md#mobileUserNotificationsNotificationTokenPost) | **POST** /mobile_user_notifications/{notification_token} | Register or refresh a push notification token.


# **accountsAccountIdJobsJobIdReportOptions**
> accountsAccountIdJobsJobIdReportOptions($accountId, $jobId)

Returns information about whether reports can be requested for the given job.

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

$apiInstance = new Tracmap\Api\AppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The id of the account.
$jobId = 56; // int | The id of the job.

try {
    $apiInstance->accountsAccountIdJobsJobIdReportOptions($accountId, $jobId);
} catch (Exception $e) {
    echo 'Exception when calling AppApi->accountsAccountIdJobsJobIdReportOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The id of the account. |
 **jobId** | **int**| The id of the job. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsAccountIdJobsJobIdReportPost**
> accountsAccountIdJobsJobIdReportPost($accountId, $jobId, $content)

Request a contractor report be sent to a specified email address.

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

$apiInstance = new Tracmap\Api\AppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The id of the account.
$jobId = 56; // int | The id of the job.
$content = new \Tracmap\Model\Content(); // \Tracmap\Model\Content | Information about where the generated report should be sent.

try {
    $apiInstance->accountsAccountIdJobsJobIdReportPost($accountId, $jobId, $content);
} catch (Exception $e) {
    echo 'Exception when calling AppApi->accountsAccountIdJobsJobIdReportPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The id of the account. |
 **jobId** | **int**| The id of the job. |
 **content** | [**\Tracmap\Model\Content**](../Model/Content.md)| Information about where the generated report should be sent. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsAccountIdMapsMapIdMarkersGeoFeatureIdDelete**
> accountsAccountIdMapsMapIdMarkersGeoFeatureIdDelete($accountId, $mapId, $geoFeatureId)

Delete a marker from the map.

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

$apiInstance = new Tracmap\Api\AppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | Identifier of account with access to the map and marker.
$mapId = 56; // int | Identifier of map containing the marker.
$geoFeatureId = 56; // int | Identifier of marker to be deleted.

try {
    $apiInstance->accountsAccountIdMapsMapIdMarkersGeoFeatureIdDelete($accountId, $mapId, $geoFeatureId);
} catch (Exception $e) {
    echo 'Exception when calling AppApi->accountsAccountIdMapsMapIdMarkersGeoFeatureIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| Identifier of account with access to the map and marker. |
 **mapId** | **int**| Identifier of map containing the marker. |
 **geoFeatureId** | **int**| Identifier of marker to be deleted. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsAccountIdMapsMapIdMarkersGeoFeatureIdPatch**
> int accountsAccountIdMapsMapIdMarkersGeoFeatureIdPatch($accountId, $mapId, $geoFeatureId, $marker)

Update details of a marker.

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

$apiInstance = new Tracmap\Api\AppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | Identifier of account with access to the map and marker.
$mapId = 56; // int | Identifier of map containing the marker.
$geoFeatureId = 56; // int | Identifier of marker to be deleted.
$marker = new \Tracmap\Model\MarkerPatch(); // \Tracmap\Model\MarkerPatch | 

try {
    $result = $apiInstance->accountsAccountIdMapsMapIdMarkersGeoFeatureIdPatch($accountId, $mapId, $geoFeatureId, $marker);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppApi->accountsAccountIdMapsMapIdMarkersGeoFeatureIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| Identifier of account with access to the map and marker. |
 **mapId** | **int**| Identifier of map containing the marker. |
 **geoFeatureId** | **int**| Identifier of marker to be deleted. |
 **marker** | [**\Tracmap\Model\MarkerPatch**](../Model/MarkerPatch.md)|  |

### Return type

**int**

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsAccountIdMapsMapIdMarkersPost**
> int accountsAccountIdMapsMapIdMarkersPost($accountId, $mapId, $marker)

Create a new marker in the given map. The response body contains the identifier of the created feature.

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

$apiInstance = new Tracmap\Api\AppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | Identifier of account with access to the map and marker.
$mapId = 56; // int | Identifier of map where the  marker is to be created.
$marker = new \Tracmap\Model\MarkerWrite(); // \Tracmap\Model\MarkerWrite | 

try {
    $result = $apiInstance->accountsAccountIdMapsMapIdMarkersPost($accountId, $mapId, $marker);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppApi->accountsAccountIdMapsMapIdMarkersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| Identifier of account with access to the map and marker. |
 **mapId** | **int**| Identifier of map where the  marker is to be created. |
 **marker** | [**\Tracmap\Model\MarkerWrite**](../Model/MarkerWrite.md)|  |

### Return type

**int**

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsByUserGet**
> \Tracmap\Model\AccountReadFull[] accountsByUserGet()

List accounts available to the user.

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

$apiInstance = new Tracmap\Api\AppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->accountsByUserGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppApi->accountsByUserGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Tracmap\Model\AccountReadFull[]**](../Model/AccountReadFull.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mobileUserAccessUserPhonePost**
> \Tracmap\Model\MobileUserAccessRead mobileUserAccessUserPhonePost($userPhone)

Retrieve mobile app access token.



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

$apiInstance = new Tracmap\Api\AppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userPhone = "userPhone_example"; // string | User mobile phone where to send authentication token. Must be the fully qualified phone number including international country code.

try {
    $result = $apiInstance->mobileUserAccessUserPhonePost($userPhone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppApi->mobileUserAccessUserPhonePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userPhone** | **string**| User mobile phone where to send authentication token. Must be the fully qualified phone number including international country code. |

### Return type

[**\Tracmap\Model\MobileUserAccessRead**](../Model/MobileUserAccessRead.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mobileUserNotificationsGet**
> \Tracmap\Model\UserNotificationRead[] mobileUserNotificationsGet($accessToken)

Retrieve notifications previously issued for this user.

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

$apiInstance = new Tracmap\Api\AppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accessToken = "accessToken_example"; // string | The encoded user account access token.

try {
    $result = $apiInstance->mobileUserNotificationsGet($accessToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppApi->mobileUserNotificationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessToken** | **string**| The encoded user account access token. |

### Return type

[**\Tracmap\Model\UserNotificationRead[]**](../Model/UserNotificationRead.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mobileUserNotificationsNotificationTokenDelete**
> mobileUserNotificationsNotificationTokenDelete($notificationToken, $accessToken)

Delete a push notification token.

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

$apiInstance = new Tracmap\Api\AppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notificationToken = "notificationToken_example"; // string | The push notification token to use. The token will be used with the registered push notification service (Exponent).
$accessToken = "accessToken_example"; // string | The encoded user account access token originally retrieved from /register_mobile_app.

try {
    $apiInstance->mobileUserNotificationsNotificationTokenDelete($notificationToken, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling AppApi->mobileUserNotificationsNotificationTokenDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notificationToken** | **string**| The push notification token to use. The token will be used with the registered push notification service (Exponent). |
 **accessToken** | **string**| The encoded user account access token originally retrieved from /register_mobile_app. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mobileUserNotificationsNotificationTokenPost**
> mobileUserNotificationsNotificationTokenPost($notificationToken, $accessToken)

Register or refresh a push notification token.

This method should be called when a new device is configured to receive push notifications.

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

$apiInstance = new Tracmap\Api\AppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notificationToken = "notificationToken_example"; // string | The push notification token to use. The token will be used with the registered push notification service (Exponent).
$accessToken = "accessToken_example"; // string | The encoded user account access token originally retrieved from /register_mobile_app.

try {
    $apiInstance->mobileUserNotificationsNotificationTokenPost($notificationToken, $accessToken);
} catch (Exception $e) {
    echo 'Exception when calling AppApi->mobileUserNotificationsNotificationTokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notificationToken** | **string**| The push notification token to use. The token will be used with the registered push notification service (Exponent). |
 **accessToken** | **string**| The encoded user account access token originally retrieved from /register_mobile_app. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

