# API SDK PHP

[![Build Status](https://travis-ci.com/Global-Exam/api-sdk-php.svg)](https://travis-ci.com/Global-Exam/api-sdk-ph)

## Requirements

* PHP >= 5.6
* [cURL](http://php.net/manual/fr/book.curl.php/) library enabled

## Install

### Composer

```
composer require Global-Exam/api-sdk-php
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
use GlobalExam\Api\Sdk\Authentication\OAuthPasswordGrant;

$api = new Api(new OAuthPasswordGrant('email@domain.com', 'password', '', ['country' => 'fr', 'ip' => '0.0.0.0']));

// Keep credentials for future calls
$credentials = $api->login();
```

### As a known user

```php
use GlobalExam\Api\Sdk\Api;
use GlobalExam\Api\Sdk\Authentication\OAuthTokenGrant;

$credentials = json_decode($credentials->getBody()->getContents(), true);

// Play authenticated calls
$api = new Api(new OAuthTokenGrant($credentials, '', ['country' => 'fr', 'ip' => '0.0.0.0']));
$api->login();

$response = $api->user()->me(); // ResponseInterface
```

## API Reference

* [`setBaseUrl`](#setbaseurl)
* [`setAuthenticator`](#setauthenticator)
* [`login`](#login)
* [`logout`](#logout)
* [`clearCredentials`](#clearcredentials)
* [`isAuthenticated`](#isauthenticated)
* [`send`](#send)

### `setBaseUrl`

#### Description

Set another base URL.

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

* `OAuthPasswordGrant`
* `OAuthTokenGrant`

#### Output

Returns the `Api` instance.

#### Example

```php
$api = new Api();
$api->setAuthenticator(new OAuthTokenGrant(array $credentials, string $scope, array $meta));
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
$api = new Api(new OAuthPasswordGrant('email@domain.com', 'password', '', ['country' => 'fr', 'ip' => '0.0.0.0']));

// Keep credentials for future calls
$credentials = $api->login();

// Or

$api = new Api(new OAuthTokenGrant($credentials, '', ['country' => 'fr', 'ip' => '0.0.0.0']));
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
$api = new Api(new OAuthTokenGrant($credentials, '', ['country' => 'fr', 'ip' => '0.0.0.0']));
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
$api = new Api(new OAuthTokenGrant($credentials, '', ['country' => 'fr', 'ip' => '0.0.0.0']));
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
$api = new Api(new OAuthTokenGrant($credentials, '', ['country' => 'fr', 'ip' => '0.0.0.0']));
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
$api = new Api(new OAuthTokenGrant($credentials, '', ['country' => 'fr', 'ip' => '0.0.0.0']));
        
$response = $api->send('GET', '/user/me');

// $response->getStatusCode()
// $response->getBody()->getContents()
```

## Resources

Resources allow you to have a quick response instead of building a request by your own.


```php
$api->user()->me();
$api->user()->auth()->register(array $body);
```

Browse the `Resource` folder to see what is available.

* [`Organization`](#organization)
* [`User`](#user)

### User

```php
$api->user()->auth()->register(array $body);
$api->user()->auth()->confirm(string $token);
$api->user()->auth()->forgottenPassword(array $body);
$api->user()->auth()->resetPassword(array $body);

$api->user()->oauth()->getToken();
$api->user()->oauth()->renewToken();

$api->user()->userRole()->getAll();
$api->user()->userRole()->getOne();
$api->user()->userRole()->create();
$api->user()->userRole()->update();
$api->user()->userRole()->delete();

$api->user()->me();
```

## Tests

On project directory:

* `composer install` to retrieve `phpunit`
* `phpunit` to run tests
