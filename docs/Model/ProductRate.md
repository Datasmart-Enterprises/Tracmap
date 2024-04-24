# ProductRate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**productId** | **int** |  | [optional] 
**barcode** | **string** |  | [optional] 
**productName** | **string** | An arbitrary product name that will be put to the order&#39;s notes. If no valid product_id and barcode is provided, this field will be used. This field should only be used for the /direct/job endpoint when the product_id is unknown. The product name can not contain the colon (:) character. | [optional] 
**applicationRate** | [**\Tracmap\Model\ApplicationRateWrite**](ApplicationRateWrite.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


