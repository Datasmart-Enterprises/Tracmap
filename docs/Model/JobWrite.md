# JobWrite

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**geometry** | [**\Tracmap\Model\GeoJSONFeatureList**](GeoJSONFeatureList.md) |  | [optional] 
**productRates** | [**\Tracmap\Model\ProductRateList**](ProductRateList.md) |  | [optional] 
**customerId** | **int** |  | [optional] 
**contractorId** | **int** |  | [optional] 
**customerName** | **string** |  | [optional] 
**originSupplier** | **string** |  | [optional] 
**originReference** | **string** |  | [optional] 
**orderSubtypeId** | **int** | Identifier of activity (order subtype) to use. The available activities can be retrieved via the &#x60;subtypes&#x60; call. If a spray order with &#x60;water_rate&#x60; but without &#x60;order_subtype_id&#x60; is submitted, a Spray type activity will be created for the order. | [optional] 
**dueDate** | **string** | A proposed order start date (contractors should start the order after this timestamp). Timezone info is optional. | [optional] 
**dueDate2** | **string** | A proposed order end date (contractors should finish the order before this timestamp). Timezone info is optional. | [optional] 
**waterRate** | **float** | If provided, the rate of water, in L/ha (or gal/ac), to be applied. If this value is provided, then the job is submitted as a spray job. | [optional] 
**tankSize** | **float** | In a spray job, the size of the tank used. The value is optional. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


