# API SDK PHP

[![Build Status](https://travis-ci.org/Global-Exam/api-sdk-php.svg?branch=master)](https://travis-ci.org/Global-Exam/api-sdk-php)

## Requirements

* PHP >= 5.6
* [cURL](http://php.net/manual/fr/book.curl.php/) library enabled

## Install

### Composer

```
composer require Global-Exam/api-sdk-php:dev-master
```

## Usage

### As a guest

```php
use GlobalExam\Api\Sdk\Api;

$api = new Api();
```

### As a guest who wants a token

```php
use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Authentication\OAuthClient;
use GlobalExam\Api\Sdk\Authentication\PasswordCredentialsGrant;

$oauthClient   = new OAuthClient('clientId', 'clientSecret');
$authenticator = new PasswordCredentialsGrant($oauthClient, 'email@domain.com', 'password', '', ['country' => 'fr', 'ip' => '0.0.0.0']);

$api = new Api($authenticator);

// Keep tokens for future calls
$tokens = $api->login();
```

### As a known user

```php
use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Authentication\AuthorizationCodeGrant;

$tokens = json_decode($tokens->getBody()->getContents(), true);

// Play authenticated calls
$authenticator = new AuthorizationCodeGrant($oauthClient, $tokens, '', ['country' => 'fr', 'ip' => '0.0.0.0']);
$api           = new Api($authenticator);
$api->login();

$response = $api->user()->me(); // ResponseInterface
```

### Deal with token expiration

You may receive a `401 Unauthorized` response from a [Guzzle exception](http://docs.guzzlephp.org/en/latest/quickstart.html?highlight=clientexception#exceptions). 

Try to get another access token based on the current credentials.

```php
try {
    $api->user()->me();
} catch (\GuzzleHttp\Exception\ClientException $e) {
    // Expired token
    if ($e->getResponse()->getStatusCode() === 401) {
        // Ask new credentials based on the current refresh token
        $tokens = $api->user()->oauth()->renewToken();
        $tokens = json_decode($credentials->getBody()->getContents(), true);

        // Set a fresh authenticator
        $api->setAuthenticator(new AuthorizationCodeGrant($oauthClient, $tokens, '', ['country' => 'fr', 'ip' => '0.0.0.0']));

        $response = $api->user()->me();
        $response->getStatusCode(); // 200
    }
}
```

## API Reference

* [`constructor`](#constructor)
* [`setBaseUrl`](#setbaseurl)
* [`setAuthenticator`](#setauthenticator)
* [`login`](#login)
* [`logout`](#logout)
* [`clearCredentials`](#clearcredentials)
* [`isAuthenticated`](#isauthenticated)
* [`send`](#send)

### `constructor`

#### Description

Creates a new `Api` instance.

```php
Api ( AuthenticationInterface $authenticator = null ): Api
```

#### Input

##### authenticator

A valid authenticator.

#### Output

Returns the `Api` instance.

#### Example

```php
$oauthClient   = new OAuthClient('clientId', 'clientSecret');
$authenticator = new PasswordCredentialsGrant($oauthClient, 'email@domain.com', 'password', '', ['country' => 'fr', 'ip' => '0.0.0.0']);

$api = new Api($authenticator);
```

### `setBaseUrl`

#### Description

Sets another base URL.

```php
setBaseUrl ( string $baseUrl ): Api
```

#### Input

##### baseUrl

A valid URL.

#### Output

Returns the `Api` instance.

#### Example

```php
$api = new Api();
$api->setBaseUrl('http://api.global-exam.io');
```

### `setAuthenticator`

#### Description

Set another authenticator.

```php
setAuthenticator ( AuthenticationInterface $authenticator ): Api
```

#### Input

##### authenticator

Any class that implements `AuthenticationInterface`. Prebuilt classes are:

* `PasswordCredentialsGrant`
* `AuthorizationCodeGrant`

#### Output

Returns the `Api` instance.

#### Example

```php
$api = new Api();

$oauthClient   = new OAuthClient('clientId', 'clientSecret');
$authenticator = new PasswordCredentialsGrant($oauthClient, 'email@domain.com', 'password', '', ['country' => 'fr', 'ip' => '0.0.0.0']);

$api->setAuthenticator($authenticator);
```

### `login`

#### Description

Indicates you want to be authenticated.

This will login the user and returns the credentials if you have specified the `OAuthPasswordGrant` authenticator.

```php
login ( ): Api
```

#### Output

Returns the credentials as a `ResponseInterface` if the `OAuthPasswordGrant` authenticator is used.
Otherwise it returns the current `Api` instance.

#### Example

```php
$oauthClient   = new OAuthClient('clientId', 'clientSecret');
$authenticator = new PasswordCredentialsGrant($oauthClient, 'email@domain.com', 'password', '', ['country' => 'fr', 'ip' => '0.0.0.0']);
$api           = new Api($authenticator);

// Keep credentials for future calls
$tokens = $api->login();

// Or

$oauthClient   = new OAuthClient('clientId', 'clientSecret');
$authenticator = new AuthorizationCodeGrant($oauthClient, $tokens, '', ['country' => 'fr', 'ip' => '0.0.0.0']);
$api           = new Api($authenticator);

$api->login();
```

### `logout`

#### Description

Disables the authentication for future calls. This will not logout the current user. See User resource.

```php
logout ( $clearCredentials = false ): Api
```

#### Input

##### clearCredentials

If `true` this will also clear the current authenticator.

#### Output

Returns the `Api` instance.

#### Example

```php
$oauthClient   = new OAuthClient('clientId', 'clientSecret');
$authenticator = new AuthorizationCodeGrant($oauthClient, $tokens, '', ['country' => 'fr', 'ip' => '0.0.0.0']);
$api           = new Api($authenticator);

$api->login();

// Perform actions

$api->logout(true);
```

### `clearCredentials`

#### Description

Clear the current authenticator.

```php
clearCredentials ( ): Api
```

#### Output

Returns the `Api` instance.

#### Example

```php
$oauthClient   = new OAuthClient('clientId', 'clientSecret');
$authenticator = new AuthorizationCodeGrant($oauthClient, $tokens, '', ['country' => 'fr', 'ip' => '0.0.0.0']);
$api           = new Api($authenticator);

$api->login();

// Perform actions

$api->logout();
$api->clearCredentials();
```

### `isAuthenticated`

#### Description

To know either you are authenticated or not.

```php
isAuthenticated ( ): bool
```

#### Output

Returns `true` or `false`.

#### Example

```php
$oauthClient   = new OAuthClient('clientId', 'clientSecret');
$authenticator = new AuthorizationCodeGrant($oauthClient, $tokens, '', ['country' => 'fr', 'ip' => '0.0.0.0']);
$api           = new Api($authenticator);

$api->login();

$api->isAuthenticated(); // true

$api->logout();

$api->isAuthenticated(); // false
```

### `send`

#### Description

Performs an HTTP request to the API.

Most of time, you won't use this method because there are already shortcuts methods to access to a given resource.

```php
send ( string $method, string $uri, array $body = [], array $params = [], array $headers = [] ): ResponseInterface
```

#### Input

##### method

HTTP verb such as `GET`, `POST`, etc.

##### uri

Path to the resource that will be added to the base URL.

##### body

Any array that will be JSON-encoded and attached to the request.

##### params

Any array that will converted to a query string and be added to the URI.

##### headers

Additional headers.

#### Output

Returns a [response](http://docs.guzzlephp.org/en/latest/psr7.html#responses) that implements the PSR-7 `ResponseInterface` interface.

#### Example

```php
$oauthClient   = new OAuthClient('clientId', 'clientSecret');
$authenticator = new AuthorizationCodeGrant($oauthClient, ['access_token' => 'a', 'refresh_token' => 'b', 'expires_in' => 1], '', ['country' => 'fr', 'ip' => '0.0.0.0']);
$api           = new Api($authenticator);
        
$response = $api->send('GET', '/user/me');

// $response->getStatusCode()
// $response->getBody()->getContents()
```

## Resources

Resources allow you to have a quick response instead of building a request by your own.

Browse the [src/Resource](src/Resource) folder to see what is available.

#### Example

```php
$api->user()->me();
$api->user()->auth()->register(array $body);
```

## Tests

On project directory:

* `composer install` to retrieve `phpunit`
* `phpunit` to run tests
