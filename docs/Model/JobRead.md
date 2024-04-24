# JobRead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account** | [**\Tracmap\Model\AccountRead**](AccountRead.md) |  | [optional] 
**notes** | **string** | Additional detailed information about the job | [optional] 
**workedUrl** | **string** | URL that can be used to retrieve information about the completed job. | [optional] 
**requestedUrl** | **string** | URL that can be used to retrieve information about the job as it was requested. | [optional] 
**productRates** | [**\Tracmap\Model\ProductRateListRead**](ProductRateListRead.md) |  | [optional] 
**appliedProduct** | **float** | Total *measured* amount of product, in kg or L, used in this job. This value is derived from rate measurement hardware. The applied product value may not represent the full amount of product spread in cases where the hardware is not fitted or not turned on for all or some of the job. | [optional] 
**areaNominal** | **object** | Area, in ha or ac, that was treated in this job. The value is calculated by mapping the job geometry and boom widths. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


