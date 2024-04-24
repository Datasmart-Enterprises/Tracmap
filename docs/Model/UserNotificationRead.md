# UserNotificationRead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal identifier that uniquely identifies the push notification. | [optional] 
**intent** | **string** | Event that triggered the notification, e.g. &#x60;order_new&#x60;, &#x60;order_complete&#x60;, &#x60;tracking_entry&#x60;, &#x60;tracking_exit&#x60;. | [optional] 
**accountId** | **int** | The customer&#39;s account ID in which the event occurred. | [optional] 
**title** | **string** | Title or short description of notification. | [optional] 
**body** | **string** | Main content of notification. | [optional] 
**orderId** | **int** | For notifications pertaining to an order, the ID of the order. | [optional] 
**creationDate** | **float** | The date, in epoch seconds, when the notification was generated. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


