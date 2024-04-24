# Tracmap\MapApi

All URIs are relative to *https://test-api.tracmap.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountsAccountIdMapsGet**](MapApi.md#accountsAccountIdMapsGet) | **GET** /accounts/{account_id}/maps | List of all available maps.
[**accountsAccountIdMapsMapIdDelete**](MapApi.md#accountsAccountIdMapsMapIdDelete) | **DELETE** /accounts/{account_id}/maps/{map_id} | Delete a particular map.
[**accountsAccountIdMapsMapIdGeometryGet**](MapApi.md#accountsAccountIdMapsMapIdGeometryGet) | **GET** /accounts/{account_id}/maps/{map_id}/geometry | Get a map&#39;s geometry information.
[**accountsAccountIdMapsMapIdGet**](MapApi.md#accountsAccountIdMapsMapIdGet) | **GET** /accounts/{account_id}/maps/{map_id} | Detailed information about a particular map.
[**accountsAccountIdMapsMapIdMarkersGeoFeatureIdDelete**](MapApi.md#accountsAccountIdMapsMapIdMarkersGeoFeatureIdDelete) | **DELETE** /accounts/{account_id}/maps/{map_id}/markers/{geo_feature_id} | Delete a marker from the map.
[**accountsAccountIdMapsMapIdMarkersGeoFeatureIdPatch**](MapApi.md#accountsAccountIdMapsMapIdMarkersGeoFeatureIdPatch) | **PATCH** /accounts/{account_id}/maps/{map_id}/markers/{geo_feature_id} | Update details of a marker.
[**accountsAccountIdMapsMapIdMarkersPost**](MapApi.md#accountsAccountIdMapsMapIdMarkersPost) | **POST** /accounts/{account_id}/maps/{map_id}/markers | Create a new marker in the given map. The response body contains the identifier of the created feature.
[**accountsAccountIdMapsMapIdPatch**](MapApi.md#accountsAccountIdMapsMapIdPatch) | **PATCH** /accounts/{account_id}/maps/{map_id} | Update an existing map.
[**accountsAccountIdMapsPost**](MapApi.md#accountsAccountIdMapsPost) | **POST** /accounts/{account_id}/maps | Create a new map.


# **accountsAccountIdMapsGet**
> \Tracmap\Model\MapListRead accountsAccountIdMapsGet($accountId)

List of all available maps.

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

$apiInstance = new Tracmap\Api\MapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The id of the account.

try {
    $result = $apiInstance->accountsAccountIdMapsGet($accountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MapApi->accountsAccountIdMapsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The id of the account. |

### Return type

[**\Tracmap\Model\MapListRead**](../Model/MapListRead.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsAccountIdMapsMapIdDelete**
> accountsAccountIdMapsMapIdDelete($accountId, $mapId)

Delete a particular map.

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

$apiInstance = new Tracmap\Api\MapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The id of the account.
$mapId = 56; // int | The id of the map.

try {
    $apiInstance->accountsAccountIdMapsMapIdDelete($accountId, $mapId);
} catch (Exception $e) {
    echo 'Exception when calling MapApi->accountsAccountIdMapsMapIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The id of the account. |
 **mapId** | **int**| The id of the map. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsAccountIdMapsMapIdGeometryGet**
> \Tracmap\Model\GeoJSONFeatureList accountsAccountIdMapsMapIdGeometryGet($accountId, $mapId)

Get a map's geometry information.

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

$apiInstance = new Tracmap\Api\MapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The id of the account.
$mapId = 56; // int | The id of the map.

try {
    $result = $apiInstance->accountsAccountIdMapsMapIdGeometryGet($accountId, $mapId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MapApi->accountsAccountIdMapsMapIdGeometryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The id of the account. |
 **mapId** | **int**| The id of the map. |

### Return type

[**\Tracmap\Model\GeoJSONFeatureList**](../Model/GeoJSONFeatureList.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsAccountIdMapsMapIdGet**
> \Tracmap\Model\MapRead accountsAccountIdMapsMapIdGet($accountId, $mapId)

Detailed information about a particular map.

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

$apiInstance = new Tracmap\Api\MapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The id of the account.
$mapId = 56; // int | The id of the map.

try {
    $result = $apiInstance->accountsAccountIdMapsMapIdGet($accountId, $mapId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MapApi->accountsAccountIdMapsMapIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The id of the account. |
 **mapId** | **int**| The id of the map. |

### Return type

[**\Tracmap\Model\MapRead**](../Model/MapRead.md)

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

$apiInstance = new Tracmap\Api\MapApi(
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
    echo 'Exception when calling MapApi->accountsAccountIdMapsMapIdMarkersGeoFeatureIdDelete: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Tracmap\Api\MapApi(
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
    echo 'Exception when calling MapApi->accountsAccountIdMapsMapIdMarkersGeoFeatureIdPatch: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Tracmap\Api\MapApi(
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
    echo 'Exception when calling MapApi->accountsAccountIdMapsMapIdMarkersPost: ', $e->getMessage(), PHP_EOL;
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

# **accountsAccountIdMapsMapIdPatch**
> \Tracmap\Model\MapRead accountsAccountIdMapsMapIdPatch($accountId, $mapId, $map)

Update an existing map.

The existing map will be recreated using the new geometry. Any existing features are deleted; only features submitted in the request body are retained. In order to update the map, it must be owned by the requesting account. Only standard maps can be modified.

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

$apiInstance = new Tracmap\Api\MapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The id of the account.
$mapId = 56; // int | The id of the map.
$map = new \Tracmap\Model\Map(); // \Tracmap\Model\Map | The new map geometry.

try {
    $result = $apiInstance->accountsAccountIdMapsMapIdPatch($accountId, $mapId, $map);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MapApi->accountsAccountIdMapsMapIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The id of the account. |
 **mapId** | **int**| The id of the map. |
 **map** | [**\Tracmap\Model\Map**](../Model/Map.md)| The new map geometry. |

### Return type

[**\Tracmap\Model\MapRead**](../Model/MapRead.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsAccountIdMapsPost**
> \Tracmap\Model\MapRead accountsAccountIdMapsPost($accountId, $map)

Create a new map.

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

$apiInstance = new Tracmap\Api\MapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The id of the account.
$map = new \Tracmap\Model\Map(); // \Tracmap\Model\Map | Map data, including geometry.

try {
    $result = $apiInstance->accountsAccountIdMapsPost($accountId, $map);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MapApi->accountsAccountIdMapsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The id of the account. |
 **map** | [**\Tracmap\Model\Map**](../Model/Map.md)| Map data, including geometry. |

### Return type

[**\Tracmap\Model\MapRead**](../Model/MapRead.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

