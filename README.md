# NPPES NPI Registry API
This API allows you to easily look up providers using the NPI Registry API (https://npiregistry.cms.hhs.gov/registry/help-api).

## Installation

### via composer:

```sh
composer require adesigns/nppes-api
```

## Basic Usage

### 1. Search for providers by any number of parameters.  Will return an ApiResponse object with all providers.

To search the registry by a non-unique parameter (IE number), pass an array of parameters to the search() method.
Available parameters can be seen in the NPPES Demo @ https://npiregistry.cms.hhs.gov/api/demo

```php
$client = new NPPESApi();

$results = $client->search(array('last_name' => "Smith"));

var_dump($results);
```

### 1. Search for a single provider by NPI Number.  Will return a single Provider object.

```php
$client = new NPPESApi();

/** @var Provider **/
$provider = $client->searchByNumber(1234567890);

var_dump($provider);
```