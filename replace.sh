#!/bin/bash  
file="lib/model/Card.php"
var1=' ENVIRONMENT_PRODUCTION;'
rep1=' self::ENVIRONMENT_PRODUCTION;'
sed -i '.bak' "s/$var1/$rep1/g" "$file"
rm "$file".bak

file="lib/model/CardRule.php"
var1=' ENVIRONMENT_PRODUCTION;'
rep1=' self::ENVIRONMENT_PRODUCTION;'
sed -i '.bak' "s/$var1/$rep1/g" "$file"
rm "$file".bak

file="lib/model/Transaction.php"
var1=' ENVIRONMENT_PRODUCTION;'
rep1=' self::ENVIRONMENT_PRODUCTION;'
sed -i '.bak' "s/$var1/$rep1/g" "$file"
rm "$file".bak

file="lib/model/ErrorGeneric.php"
var1=' TYPE_ERROR;'
rep1=' self::TYPE_ERROR;'
sed -i '.bak' "s/$var1/$rep1/g" "$file"
rm "$file".bak

file="lib/model/Card.php"
var1="'buyer' => 'Buyer',"
rep1="'buyer' => '\\\Gr4vy\\\model\\\Buyer',"
sed -i '.bak' "s/$var1/$rep1/g" "$file"
rm "$file".bak

file="lib/model/CardRuleCondition.php"
var1="\\\Gr4vy\\\model\\\Undefined"
rep1="string"
sed -i '.bak' "s/$var1/$rep1/g" "$file"
rm "$file".bak

file="lib/model/CardRule.php"
var1=' UNPROCESSABLE_FALLBACK_STRATEGY_USE_ALL_PROVIDERS;'
rep1=' self::UNPROCESSABLE_FALLBACK_STRATEGY_USE_ALL_PROVIDERS;'
sed -i '.bak' "s/$var1/$rep1/g" "$file"
rm "$file".bak

file="lib/model/CardRule.php"
var1=' INVALID_RULE_FALLBACK_STRATEGY_USE_ALL_PROVIDERS;'
rep1=' self::INVALID_RULE_FALLBACK_STRATEGY_USE_ALL_PROVIDERS;'
sed -i '.bak' "s/$var1/$rep1/g" "$file"
rm "$file".bak

file="lib/model/PaymentService.php"
var1=' CREDENTIALS_MODE_LIVE;'
rep1=' self::CREDENTIALS_MODE_LIVE;'
sed -i '.bak' "s/$var1/$rep1/g" "$file"
rm "$file".bak