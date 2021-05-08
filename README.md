# Gr4vy SDK for PHP

Gr4vy provides any of your payment integrations through one unified API. For more details, visit [gr4vy.com](https://gr4vy.com).

## Installation

To install Gr4vy via [Composer](https://getcomposer.org/), add the following to your `composer.json`:

```sh
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/gr4vy/gr4vy-php.git"
    }
  ],
  "require": {
    "gr4vy/gr4vy-php": "*@dev"
  }
}
```

Then run `composer install`

## Getting Started

To make your first API call, you will need to [request](https://gr4vy.com) a Gr4vy instance to be set up. Please contact our sales team for a demo.

Once you have been set up with a Gr4vy account you will need to head over to the **Integrations** panel and generate a private key. We recommend storing this key in a secure location but in this code sample we simply read the file from disk.

```php
<?php
require __DIR__ . '/../vendor/autoload.php';

$privateKeyLocation = __DIR__ . "/private_key.pem";

$config = new Gr4vy\Gr4vyConfig("YOUR_GR4VY_ID", $privateKeyLocation);
$apiInstance = new Gr4vy\Api\BuyersApi(new GuzzleHttp\Client(),$config->getConfig());

try {
    $result = $apiInstance->listBuyers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuyersApi->listBuyers: ', $e->getMessage(), PHP_EOL;
}
```

## Gr4vy Embed 

To create a token for Gr4vy Embed, call the `config->getEmbedToken()` function
with the amount, currency, and optional buyer information for Gr4vy Embed.

```php
echo $config->getEmbedToken(
  array(
    "amount"=> 200, 
    "currency" => "USD", 
    "buyer_id"=> "d757c76a-cbd7-4b56-95a3-40125b51b29c"
  )
);
```

You can now pass this token to your frontend where it can be used to
authenticate Gr4vy Embed.

The `buyerId` and `buyerExternalIdentifier` fields can be used to allow the
token to pull in previously stored payment methods for a user. A buyer needs to
be created before it can be used in this way.

```php
$config = new Gr4vy\Gr4vyConfig("YOUR_GR4VY_ID", $privateKeyLocation);
$apiInstance = new Gr4vy\Api\BuyersApi(new GuzzleHttp\Client(),$config->getConfig());

$buyer_request = array("external_identifier"=>"412231123","display_name"=>"Tester T.");
$buyer = $apiInstance->addBuyer($buyer_request);

$embed = array("amount"=> 200, "currency" => "USD", "buyer_id"=> $buyer->getId());
$embedToken = $config->getEmbedToken($embed);
```

## Initialization

The client can be initialized with the Gr4vy ID (`gr4vyId`) and the private key.

```php
$config = new Gr4vy\Gr4vyConfig("acme", $privateKeyLocation);
```

Alternatively, you can set the `host` of the server to use directly.

```php
$config = new Gr4vy\Gr4vyConfig("acme", $privateKeyLocation);
$config->setHost("https://api.acme.gr4vy.app");
```

Your API key can be created in your admin panel on the **Integrations** tab.


## Making API calls

This library conveniently maps every API path to a seperate function. For example, `GET /buyers?limit=100` would be:

```php
$result = $apiInstance->listBuyers(100);
```

To create or update a resource an `array` should be sent with the request data.

```php
$buyer_request = array("external_identifier"=>"412231123","display_name"=>"Tester T.");
$buyer = $apiInstance->addBuyer($buyer_request);
```

Similarly, to update a buyer you will need to pass in the `BuyerUpdateRequest`.

```php 
$buyer_update = array("external_identifier"=>"testUpdateBuyer");
$result = $apiInstance->updateBuyer($result->getId(), $buyer_update);
```

## Generate API bearer token

The SDK can be used to create API access tokens for use with other request
libraries.

```php TODO
import { JWTScope } from "@gr4vy/node"

const bearerToken = client.getBearerToken(
  [JWTScope.BuyersRead, JWTScope.BuyersWrite],
  "1h"
)
```

The first parameter is a list of recognised scopes for the Gr4vy API. The second
parameter is the expiration time for the token as defined by the
[`vercel/ms`](https://github.com/vercel/ms) library.

The resulting token can be used as a bearer token in the header of the HTTP
request made to the API.

```ini
Authorization: Bearer <bearerToken>
```

## Response & Promises

Every API call returns a `Promise` that either resolves or rejects.

Every resolved API call returns an object containing a `body`
attribute with the parsed JSON body and a `response` object representing the
HTTP response object which includes the raw headers and status code.

For a failed API call, it returns a similar object is returned with the `body`
of the error.

```js
client.getBuyer(buyer.id)
  .then(result => {
    console.dir(result.body) // the parsed JSON
    console.dir(result.response.statusCode) // the status code of the response
  })
  .catch(error => {
    console.dir(error.response.body) // the parsed JSON of the error
    console.dir(error.response.statusCode) // the status code of the error
  })
```

## Logging & Debugging

The SDK makes it easy possible to the requests and responses to the console.

```js
const client = new Client({
  gr4vyId: 'demo',
  privateKey: key,
  debug: true
});
```

This will output the request parameters and response to the console as follows.

```sh
Gr4vy - Request - .getBuyer: 41291df0-4a5d-42d9-a977-dbc8ef6463c4
Gr4vy - Response - .getBuyer - 200): Buyer {
  type: 'buyer',
  id: '41291df0-4a5d-42d9-a977-dbc8ef6463c4',
  external_identifier: null,
  display_name: 'Test',
  created_at: 2021-02-23T16:23:22.794Z,
  updated_at: 2021-02-23T16:23:22.794Z
}
```

## Development

### Tests

To run the tests, use:

```bash
composer install
./vendor/bin/phpunit test/ 
```

### Adding new APIs

To add new APIs, run the following command to update the models and APIs based
on the API spec.

```
./openapi-generator-generate.sh
```

Next, update `sdk/client.ts` to bind any new APIs or remove any APIs that are no
longer available.

```js
const poa = new PaymentOptionsApi(this.baseUrl);
this.listPaymentOptions = this.wrap(poa.listPaymentOptions.bind(poa));
this.apis.push(poa);
```

### Publishing - TODO - https://knasmueller.net/how-to-publish-your-php-code-as-a-composer-package

Publishing of this project is done automatically using the `yarn release`
command which creates a new version, publishes it to a tag, and then triggers a
GitHub Action to release the new package to NPM.

## License

This library is released under the [MIT License](LICENSE).

[npm]: https://www.npmjs.com/package/@gr4vy/node
