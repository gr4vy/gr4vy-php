# ResponseData

The 3DS data sent to the payment service for this transaction. This will only be populated if external 3DS data was passed in directly as part of the transaction API call, or if our 3DS server returned a status code of `Y` or `A`. In case of a failure to authenticate (status `N`, `R`, or `U`) this field will not be populated. To see full details about the 3DS calls please use our transaction events API.


## Supported Types

### `Gr4vy\ThreeDSecureDataV1`

```php
/**
* @var ThreeDSecureDataV1
*/
Gr4vy\ThreeDSecureDataV1 $value = /* values here */
```

### `Gr4vy\ThreeDSecureV2`

```php
/**
* @var ThreeDSecureV2
*/
Gr4vy\ThreeDSecureV2 $value = /* values here */
```

