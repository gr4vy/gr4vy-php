# # CardRuleUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Whether this rule is currently in use. Rules can be deactivated to allow for them to be kept around and re-activated at a later date. | [optional]
**environment** | **string** | The environment to use this rule in. This rule will only be used for transactions created in that environment. | [optional] [default to ENVIRONMENT_PRODUCTION]
**position** | **float** | The numeric rank of a rule. Rules with a lower position value are processed first. When a rule is inserted at a position, any rules with the the same value or higher are down a position accordingly. | [optional]
**conditions** | [**\Gr4vy\model\CardRuleCondition[]**](CardRuleCondition.md) | One or more conditions that apply for this rule. Each condition needs to match for this rule to go into effect. | [optional]
**payment_service_ids** | **string[]** | A list of IDs for the payment services to use, in order of priority. The payment services all need to process cards. | [optional]
**unprocessable_fallback_strategy** | **string** | Defines what strategy to use when all of the payment services defined in this rule declined or otherwise were not able to process the card.  * &#x60;use_all_providers&#x60; - Try all payment services enabled for this currency in order of priority, even if they are not listed in this rule. This is the default behaviour for a rule. * &#x60;decline&#x60; - Decline the transaction. | [optional] [default to UNPROCESSABLE_FALLBACK_STRATEGY_USE_ALL_PROVIDERS]
**invalid_rule_fallback_strategy** | **string** | Defines what strategy to use when this rule is not valid. This can happen when the rule has triggered for a certain transaction but none of the listed payment services are eligible to process that transaction currency.  * &#x60;use_all_providers&#x60; - Try all payment services enabled for this currency in order of priority, even if they are not listed in this rule. This is the default behaviour for a rule. * &#x60;skip&#x60; - Skip this rule and instead move on to the next highest priority rule. * &#x60;decline&#x60; - Decline the transaction. | [optional] [default to INVALID_RULE_FALLBACK_STRATEGY_USE_ALL_PROVIDERS]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
