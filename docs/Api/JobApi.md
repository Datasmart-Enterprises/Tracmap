# Tracmap\JobApi

All URIs are relative to *https://test-api.tracmap.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountsAccountIdJobsGdxJobIdGet**](JobApi.md#accountsAccountIdJobsGdxJobIdGet) | **GET** /accounts/{account_id}/jobs_gdx/{job_id} | Detailed information about a particular job returned in GDX format.
[**accountsAccountIdJobsGet**](JobApi.md#accountsAccountIdJobsGet) | **GET** /accounts/{account_id}/jobs | Information about all available jobs, optionally filtered, ordered by last modification date (desc).
[**accountsAccountIdJobsJobIdAssignPost**](JobApi.md#accountsAccountIdJobsJobIdAssignPost) | **POST** /accounts/{account_id}/jobs/{job_id}/assign | Assign a job to one or more devices.
[**accountsAccountIdJobsJobIdDelete**](JobApi.md#accountsAccountIdJobsJobIdDelete) | **DELETE** /accounts/{account_id}/jobs/{job_id} | Delete a particular job.
[**accountsAccountIdJobsJobIdDiagnosticPost**](JobApi.md#accountsAccountIdJobsJobIdDiagnosticPost) | **POST** /accounts/{account_id}/jobs/{job_id}/diagnostic | Send diagnostics about a job.
[**accountsAccountIdJobsJobIdGeometryNonworkedDetailedGet**](JobApi.md#accountsAccountIdJobsJobIdGeometryNonworkedDetailedGet) | **GET** /accounts/{account_id}/jobs/{job_id}/geometry/nonworked/detailed | Get a job&#39;s non-worked geometry as placement lines including rates, altitudes, and timestamps.
[**accountsAccountIdJobsJobIdGeometryRequestedGet**](JobApi.md#accountsAccountIdJobsJobIdGeometryRequestedGet) | **GET** /accounts/{account_id}/jobs/{job_id}/geometry/requested | Get a job&#39;s requested (planned) geometry as a set of polygons and centre lines if available.
[**accountsAccountIdJobsJobIdGeometryWorkedDetailedGet**](JobApi.md#accountsAccountIdJobsJobIdGeometryWorkedDetailedGet) | **GET** /accounts/{account_id}/jobs/{job_id}/geometry/worked/detailed | Get a job&#39;s worked geometry as placement lines including rates, altitudes, and timestamps.
[**accountsAccountIdJobsJobIdGeometryWorkedGet**](JobApi.md#accountsAccountIdJobsJobIdGeometryWorkedGet) | **GET** /accounts/{account_id}/jobs/{job_id}/geometry/worked | Get a job&#39;s worked geometry as series of placement polygons.
[**accountsAccountIdJobsJobIdGet**](JobApi.md#accountsAccountIdJobsJobIdGet) | **GET** /accounts/{account_id}/jobs/{job_id} | Retrieve information about a specific job.
[**accountsAccountIdJobsJobIdPatch**](JobApi.md#accountsAccountIdJobsJobIdPatch) | **PATCH** /accounts/{account_id}/jobs/{job_id} | Modify an existing job.
[**accountsAccountIdJobsJobIdReportOptions**](JobApi.md#accountsAccountIdJobsJobIdReportOptions) | **OPTIONS** /accounts/{account_id}/jobs/{job_id}/report | Returns information about whether reports can be requested for the given job.
[**accountsAccountIdJobsJobIdReportPost**](JobApi.md#accountsAccountIdJobsJobIdReportPost) | **POST** /accounts/{account_id}/jobs/{job_id}/report | Request a contractor report be sent to a specified email address.
[**accountsAccountIdJobsJobIdVehicleSummaryDaysGet**](JobApi.md#accountsAccountIdJobsJobIdVehicleSummaryDaysGet) | **GET** /accounts/{account_id}/jobs/{job_id}/vehicle/summary/days | Get a job&#39;s usage summary data by vehicle.
[**accountsAccountIdJobsJobIdVehicleSummaryGet**](JobApi.md#accountsAccountIdJobsJobIdVehicleSummaryGet) | **GET** /accounts/{account_id}/jobs/{job_id}/vehicle/summary | Get a job&#39;s usage summary data by vehicle.
[**accountsAccountIdJobsJobIdYieldGet**](JobApi.md#accountsAccountIdJobsJobIdYieldGet) | **GET** /accounts/{account_id}/jobs/{job_id}/yield | Get a job&#39;s geospatial yield data.
[**accountsAccountIdJobsPost**](JobApi.md#accountsAccountIdJobsPost) | **POST** /accounts/{account_id}/jobs | Create a new job.
[**directJobPost**](JobApi.md#directJobPost) | **POST** /direct/job | Create a new job.


# **accountsAccountIdJobsGdxJobIdGet**
> string accountsAccountIdJobsGdxJobIdGet($accountId, $jobId, $rateCleaned)

Detailed information about a particular job returned in GDX format.

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

$apiInstance = new Tracmap\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The id of the account.
$jobId = 56; // int | The id of the job.
$rateCleaned = false; // bool | Should outliers in the rate data be removed automatically? ***Note:*** TracMap can alter the default behaviour on a per integration level if required.

try {
    $result = $apiInstance->accountsAccountIdJobsGdxJobIdGet($accountId, $jobId, $rateCleaned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->accountsAccountIdJobsGdxJobIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The id of the account. |
 **jobId** | **int**| The id of the job. |
 **rateCleaned** | **bool**| Should outliers in the rate data be removed automatically? ***Note:*** TracMap can alter the default behaviour on a per integration level if required. | [optional] [default to false]

### Return type

**string**

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsAccountIdJobsGet**
> \Tracmap\Model\JobListRead accountsAccountIdJobsGet($accountId, $status, $fromDate, $toDate, $modifiedSince, $jobStartDateFrom, $jobStartDateTo, $jobEndDateFrom, $jobEndDateTo, $product)

Information about all available jobs, optionally filtered, ordered by last modification date (desc).

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

$apiInstance = new Tracmap\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The id of the account.
$status = "status_example"; // string | Only list jobs that have this status (Valid status includes placed, accepted, assigned, returned and complete).
$fromDate = 56; // int | Jobs created after this epoch date. Default value: 90 days before current server time.
$toDate = 56; // int | Jobs created before this epoch date. Default value: current server time.
$modifiedSince = 56; // int | Jobs modified after this epoch date.
$jobStartDateFrom = 56; // int | Jobs started after this epoch date.
$jobStartDateTo = 56; // int | Jobs started before this epoch date.
$jobEndDateFrom = 56; // int | Jobs finished after this epoch date.
$jobEndDateTo = 56; // int | Jobs finished before this epoch date.
$product = true; // bool | Value indicating whether the jobs should be filtered to those that have recorded product applied.

try {
    $result = $apiInstance->accountsAccountIdJobsGet($accountId, $status, $fromDate, $toDate, $modifiedSince, $jobStartDateFrom, $jobStartDateTo, $jobEndDateFrom, $jobEndDateTo, $product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->accountsAccountIdJobsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The id of the account. |
 **status** | **string**| Only list jobs that have this status (Valid status includes placed, accepted, assigned, returned and complete). | [optional]
 **fromDate** | **int**| Jobs created after this epoch date. Default value: 90 days before current server time. | [optional]
 **toDate** | **int**| Jobs created before this epoch date. Default value: current server time. | [optional]
 **modifiedSince** | **int**| Jobs modified after this epoch date. | [optional]
 **jobStartDateFrom** | **int**| Jobs started after this epoch date. | [optional]
 **jobStartDateTo** | **int**| Jobs started before this epoch date. | [optional]
 **jobEndDateFrom** | **int**| Jobs finished after this epoch date. | [optional]
 **jobEndDateTo** | **int**| Jobs finished before this epoch date. | [optional]
 **product** | **bool**| Value indicating whether the jobs should be filtered to those that have recorded product applied. | [optional]

### Return type

[**\Tracmap\Model\JobListRead**](../Model/JobListRead.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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

$apiInstance = new Tracmap\Api\JobApi(
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
    echo 'Exception when calling JobApi->accountsAccountIdJobsJobIdAssignPost: ', $e->getMessage(), PHP_EOL;
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

# **accountsAccountIdJobsJobIdDelete**
> accountsAccountIdJobsJobIdDelete($accountId, $jobId)

Delete a particular job.

Deleting a job removes it from the contractor's job list. Jobs can only be deleted while they are in the 'placed' status; once the contractor assigns a job to a display unit, the job can no longer be deleted. The partner system or user may wish to separately notify the contractor that they have deleted a job.

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

$apiInstance = new Tracmap\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The id of the account.
$jobId = 56; // int | The id of the job.

try {
    $apiInstance->accountsAccountIdJobsJobIdDelete($accountId, $jobId);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->accountsAccountIdJobsJobIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **accountsAccountIdJobsJobIdDiagnosticPost**
> accountsAccountIdJobsJobIdDiagnosticPost($accountId, $jobId, $content)

Send diagnostics about a job.

API consumers can use this endpoint to notify contractors of any failures to import proof of placement data to their system. The descriptive `body` is be displayed to the contractor in TracMap Online.

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

$apiInstance = new Tracmap\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The id of the account.
$jobId = 56; // int | The id of the job.
$content = new \Tracmap\Model\Content1(); // \Tracmap\Model\Content1 | Diagnostic information about the job. A typical diagnostic payload will include a `body` field that describes the issue to the contractor.

try {
    $apiInstance->accountsAccountIdJobsJobIdDiagnosticPost($accountId, $jobId, $content);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->accountsAccountIdJobsJobIdDiagnosticPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The id of the account. |
 **jobId** | **int**| The id of the job. |
 **content** | [**\Tracmap\Model\Content1**](../Model/Content1.md)| Diagnostic information about the job. A typical diagnostic payload will include a &#x60;body&#x60; field that describes the issue to the contractor. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsAccountIdJobsJobIdGeometryNonworkedDetailedGet**
> \Tracmap\Model\GeoJSONFeatureList accountsAccountIdJobsJobIdGeometryNonworkedDetailedGet($accountId, $jobId)

Get a job's non-worked geometry as placement lines including rates, altitudes, and timestamps.

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

$apiInstance = new Tracmap\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The id of the account.
$jobId = 56; // int | The id of the job.

try {
    $result = $apiInstance->accountsAccountIdJobsJobIdGeometryNonworkedDetailedGet($accountId, $jobId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->accountsAccountIdJobsJobIdGeometryNonworkedDetailedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The id of the account. |
 **jobId** | **int**| The id of the job. |

### Return type

[**\Tracmap\Model\GeoJSONFeatureList**](../Model/GeoJSONFeatureList.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsAccountIdJobsJobIdGeometryRequestedGet**
> \Tracmap\Model\GeoJSONFeatureList accountsAccountIdJobsJobIdGeometryRequestedGet($accountId, $jobId)

Get a job's requested (planned) geometry as a set of polygons and centre lines if available.

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

$apiInstance = new Tracmap\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The id of the account.
$jobId = 56; // int | The id of the job.

try {
    $result = $apiInstance->accountsAccountIdJobsJobIdGeometryRequestedGet($accountId, $jobId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->accountsAccountIdJobsJobIdGeometryRequestedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The id of the account. |
 **jobId** | **int**| The id of the job. |

### Return type

[**\Tracmap\Model\GeoJSONFeatureList**](../Model/GeoJSONFeatureList.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsAccountIdJobsJobIdGeometryWorkedDetailedGet**
> \Tracmap\Model\GeoJSONFeatureList accountsAccountIdJobsJobIdGeometryWorkedDetailedGet($accountId, $jobId, $rateCleaned)

Get a job's worked geometry as placement lines including rates, altitudes, and timestamps.

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

$apiInstance = new Tracmap\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The id of the account.
$jobId = 56; // int | The id of the job.
$rateCleaned = false; // bool | Should outliers in the rate data be removed automatically? ***Note:*** TracMap can alter the default behaviour on a per integration level if required.

try {
    $result = $apiInstance->accountsAccountIdJobsJobIdGeometryWorkedDetailedGet($accountId, $jobId, $rateCleaned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->accountsAccountIdJobsJobIdGeometryWorkedDetailedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The id of the account. |
 **jobId** | **int**| The id of the job. |
 **rateCleaned** | **bool**| Should outliers in the rate data be removed automatically? ***Note:*** TracMap can alter the default behaviour on a per integration level if required. | [optional] [default to false]

### Return type

[**\Tracmap\Model\GeoJSONFeatureList**](../Model/GeoJSONFeatureList.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsAccountIdJobsJobIdGeometryWorkedGet**
> \Tracmap\Model\GeoJSONFeatureList accountsAccountIdJobsJobIdGeometryWorkedGet($accountId, $jobId)

Get a job's worked geometry as series of placement polygons.

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

$apiInstance = new Tracmap\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The id of the account.
$jobId = 56; // int | The id of the job.

try {
    $result = $apiInstance->accountsAccountIdJobsJobIdGeometryWorkedGet($accountId, $jobId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->accountsAccountIdJobsJobIdGeometryWorkedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The id of the account. |
 **jobId** | **int**| The id of the job. |

### Return type

[**\Tracmap\Model\GeoJSONFeatureList**](../Model/GeoJSONFeatureList.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsAccountIdJobsJobIdGet**
> \Tracmap\Model\JobRead accountsAccountIdJobsJobIdGet($accountId, $jobId)

Retrieve information about a specific job.

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

$apiInstance = new Tracmap\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The id of the account.
$jobId = 56; // int | The id of the job.

try {
    $result = $apiInstance->accountsAccountIdJobsJobIdGet($accountId, $jobId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->accountsAccountIdJobsJobIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The id of the account. |
 **jobId** | **int**| The id of the job. |

### Return type

[**\Tracmap\Model\JobRead**](../Model/JobRead.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsAccountIdJobsJobIdPatch**
> \Tracmap\Model\JobRead accountsAccountIdJobsJobIdPatch($accountId, $jobId, $job)

Modify an existing job.

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

$apiInstance = new Tracmap\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The id of the account.
$jobId = 56; // int | The id of the job.
$job = new \Tracmap\Model\JobBase(); // \Tracmap\Model\JobBase | New detailed description of notes to attach to job.

try {
    $result = $apiInstance->accountsAccountIdJobsJobIdPatch($accountId, $jobId, $job);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->accountsAccountIdJobsJobIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The id of the account. |
 **jobId** | **int**| The id of the job. |
 **job** | [**\Tracmap\Model\JobBase**](../Model/JobBase.md)| New detailed description of notes to attach to job. |

### Return type

[**\Tracmap\Model\JobRead**](../Model/JobRead.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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

$apiInstance = new Tracmap\Api\JobApi(
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
    echo 'Exception when calling JobApi->accountsAccountIdJobsJobIdReportOptions: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Tracmap\Api\JobApi(
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
    echo 'Exception when calling JobApi->accountsAccountIdJobsJobIdReportPost: ', $e->getMessage(), PHP_EOL;
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

# **accountsAccountIdJobsJobIdVehicleSummaryDaysGet**
> object accountsAccountIdJobsJobIdVehicleSummaryDaysGet($accountId, $jobId)

Get a job's usage summary data by vehicle.

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

$apiInstance = new Tracmap\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The id of the account.
$jobId = 56; // int | The id of the job.

try {
    $result = $apiInstance->accountsAccountIdJobsJobIdVehicleSummaryDaysGet($accountId, $jobId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->accountsAccountIdJobsJobIdVehicleSummaryDaysGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The id of the account. |
 **jobId** | **int**| The id of the job. |

### Return type

**object**

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsAccountIdJobsJobIdVehicleSummaryGet**
> \Tracmap\Model\JobVehicleSummaryRead accountsAccountIdJobsJobIdVehicleSummaryGet($accountId, $jobId)

Get a job's usage summary data by vehicle.

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

$apiInstance = new Tracmap\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The id of the account.
$jobId = 56; // int | The id of the job.

try {
    $result = $apiInstance->accountsAccountIdJobsJobIdVehicleSummaryGet($accountId, $jobId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->accountsAccountIdJobsJobIdVehicleSummaryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The id of the account. |
 **jobId** | **int**| The id of the job. |

### Return type

[**\Tracmap\Model\JobVehicleSummaryRead**](../Model/JobVehicleSummaryRead.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsAccountIdJobsJobIdYieldGet**
> \Tracmap\Model\YieldRead accountsAccountIdJobsJobIdYieldGet($accountId, $jobId)

Get a job's geospatial yield data.

The `data` property of the response is a CSV-formatted table containing timestamp, coordinates, and reported load cell weights.

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

$apiInstance = new Tracmap\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The id of the account.
$jobId = 56; // int | The id of the job.

try {
    $result = $apiInstance->accountsAccountIdJobsJobIdYieldGet($accountId, $jobId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->accountsAccountIdJobsJobIdYieldGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The id of the account. |
 **jobId** | **int**| The id of the job. |

### Return type

[**\Tracmap\Model\YieldRead**](../Model/YieldRead.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountsAccountIdJobsPost**
> \Tracmap\Model\JobRead accountsAccountIdJobsPost($accountId, $job)

Create a new job.

Product rates and units:  * Products registered with the contractor can be specified by either `product_id` or `barcode`. * Known products are applied with the `rate` values specified in this **order**, and the mass and area units stored against the corresponding **product**. * If an ordered product is *not* registered with the contractor, then the `rate` and `unit` for each product is added to the **order notes**. * Each `feature` can also specify a `rate`. This value is attached to the polygon in the order and displayed in the web app and on the headunit.

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

$apiInstance = new Tracmap\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountId = 56; // int | The id of the account.
$job = new \Tracmap\Model\JobWrite(); // \Tracmap\Model\JobWrite | Job to be created.

try {
    $result = $apiInstance->accountsAccountIdJobsPost($accountId, $job);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->accountsAccountIdJobsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **int**| The id of the account. |
 **job** | [**\Tracmap\Model\JobWrite**](../Model/JobWrite.md)| Job to be created. |

### Return type

[**\Tracmap\Model\JobRead**](../Model/JobRead.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **directJobPost**
> \Tracmap\Model\JobDirectRead directJobPost($job)

Create a new job.

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

$apiInstance = new Tracmap\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job = new \Tracmap\Model\JobWrite(); // \Tracmap\Model\JobWrite | Job to be created.

try {
    $result = $apiInstance->directJobPost($job);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->directJobPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job** | [**\Tracmap\Model\JobWrite**](../Model/JobWrite.md)| Job to be created. |

### Return type

[**\Tracmap\Model\JobDirectRead**](../Model/JobDirectRead.md)

### Authorization

[api_key](../../README.md#api_key), [device_api_key](../../README.md#device_api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

