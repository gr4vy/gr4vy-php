#!/bin/bash
var1=' ENVIRONMENT_PRODUCTION;'
rep1=' self::ENVIRONMENT_PRODUCTION;'
sed -i '' "s/$var1/$rep1/g" lib/model/*.php

var1=' TYPE_ERROR;'
rep1=' self::TYPE_ERROR;'
sed -i '' "s/$var1/$rep1/g" lib/model/*.php

var1="'buyer' => 'Buyer',"
rep1="'buyer' => '\\\Gr4vy\\\model\\\Buyer',"
sed -i '' "s/$var1/$rep1/g" lib/model/*.php

var1="'buyer' => 'BuyerSnapshot',"
rep1="'buyer' => '\\\Gr4vy\\\model\\\BuyerSnapshot',"
sed -i '' "s/$var1/$rep1/g" lib/model/*.php

var1="'billing_details' => 'BillingDetails',"
rep1="'billing_details' => '\\\Gr4vy\\\model\\\BillingDetails',"
sed -i '' "s/$var1/$rep1/g" lib/model/*.php

var1="'address' => 'Address',"
rep1="'address' => '\\\Gr4vy\\\model\\\Address',"
sed -i '' "s/$var1/$rep1/g" lib/model/*.php

var1="'payment_method' => 'PaymentMethodSnapshot',"
rep1="'payment_method' => '\\\Gr4vy\\\model\\\PaymentMethodSnapshot',"
sed -i '' "s/$var1/$rep1/g" lib/model/*.php

var1="'payment_service' => 'PaymentServiceSnapshot',"
rep1="'payment_service' => '\\\Gr4vy\\\model\\\PaymentServiceSnapshot',"
sed -i '' "s/$var1/$rep1/g" lib/model/*.php

var1="\\\Gr4vy\\\model\\\Undefined"
rep1="string"
sed -i '' "s/$var1/$rep1/g" lib/model/*.php

var1=' UNPROCESSABLE_FALLBACK_STRATEGY_USE_ALL_PROVIDERS;'
rep1=' self::UNPROCESSABLE_FALLBACK_STRATEGY_USE_ALL_PROVIDERS;'
sed -i '' "s/$var1/$rep1/g" lib/model/*.php

var1=' INVALID_RULE_FALLBACK_STRATEGY_USE_ALL_PROVIDERS;'
rep1=' self::INVALID_RULE_FALLBACK_STRATEGY_USE_ALL_PROVIDERS;'
sed -i '' "s/$var1/$rep1/g" lib/model/*.php

var1=' CREDENTIALS_MODE_LIVE;'
rep1=' self::CREDENTIALS_MODE_LIVE;'
sed -i '' "s/$var1/$rep1/g" lib/model/*.php

# var1="const METHOD_GOCARDLESS = 'gocardless';"
# rep1=''
# sed -i '' "1,/$var1/s/$var1/$rep1/g" lib/model/PaymentMethod.php
