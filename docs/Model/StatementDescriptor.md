# # StatementDescriptor

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Reflects your doing business as (DBA) name.  Other validations: 1. Contains only Latin characters. 2. Contain at least one letter 3. Does not contain any of the special characters &#x60;&lt; &gt; \\ &#39; \&quot; *&#x60; 4. Supports:   1. Lowercase: &#x60;a-z&#x60;   2. Uppercase: &#x60;A-Z&#x60;   3. Numbers: &#x60;0-9&#x60;   4. Spaces: &#x60; &#x60;   5. Special characters: &#x60;. , _ - ? + /&#x60; | [optional]
**description** | **string** | A short description about the purchase.  Other validations: 1. Contains only Latin characters. 2. Contain at least one letter 3. Does not contain any of the special characters &#x60;&lt; &gt; \\ &#39; \&quot; *&#x60; 4. Supports:   1. Lowercase: &#x60;a-z&#x60;   2. Uppercase: &#x60;A-Z&#x60;   3. Numbers: &#x60;0-9&#x60;   4. Spaces: &#x60; &#x60;   5. Special characters: &#x60;. , _ - ? + /&#x60; | [optional]
**city** | **string** | City from which the charge originated. | [optional]
**phone_number** | **string** | The value in the phone number field of a customer&#39;s statement. The phone number to use for this request. This expect the number in the [E164 number standard](https://www.twilio.com/docs/glossary/what-e164). | [optional]
**url** | **string** | The value in the URL/web address field of a customer&#39;s statement. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
