# Postdirekt Addressfactory API SDK

The Postdirekt Addressfactory API SDK package offers an interface to the
ADDRESSFACTORY DIRECT web service which allows to correct and enrich address datasets.

## Requirements

### System Requirements

- PHP 8.1+ with SOAP extension

### Package Requirements

- `psr/log`: PSR-3 logger interfaces

### Development Package Requirements

- `phpstan/phpstan`: Static analysis tool
- `phpunit/phpunit`: Testing framework
- `squizlabs/php_codesniffer`: Static analysis tool
- `rector/rector`: Refactoring tool
- `fig/log-test`: Test utilities for `psr/log`

## Installation

```bash
composer require deutschepost/sdk-api-addressfactory
```

## Uninstallation

```bash
composer remove deutschepost/sdk-api-addressfactory
```

## Testing

```bash
composer run test
```

## Features

The Postdirekt Addressfactory API SDK supports the following features:

- Get address record by flat address data
- Get address record(s) by complex address data

### Get Record By Address

Verify a single address record by passing name and street address.

#### Public API

The library's components suitable for consumption comprise of

- service:
  - service factory
  - address verification service
- data transfer objects:
  - response record with corrections and status codes indicating issues with the input data

#### Usage

```php
$logger = new \Psr\Log\NullLogger();
$configName = 'default';

$serviceFactory = new \PostDirekt\Sdk\AddressfactoryDirect\Service\ServiceFactory();
$service = $serviceFactory->createAddressVerificationService('user', 'pass', $logger);

$record = $service->getRecordByAddress('53114', 'Bonn', 'Sträßchenweg', '10', 'Mustermann', 'Hans', null, $configName);

echo $record->getAddress()->getPostalCode(); // "53113"
echo $record->getAddress()->getStreetName(); // "Sträßchensweg"
echo $record->getStatusCodes(); // ['BAC100103', 'FNC400501', 'PDC030105', '…']
```

### Get Records By Complex Address

Verify address records by passing in a complex request objects.

#### Public API

The library's components suitable for consumption comprise of

- service:
  - service factory
  - address verification service
  - data transfer object builder
- data transfer objects:
  - response record with corrections and status codes indicating issues with the input data

#### Usage

```php
$logger = new \Psr\Log\NullLogger();
$configName = 'default';

$serviceFactory = new \PostDirekt\Sdk\AddressfactoryDirect\Service\ServiceFactory();
$service = $serviceFactory->createAddressVerificationService('user', 'pass', $logger);

$requestBuilder = new \PostDirekt\Sdk\AddressfactoryDirect\RequestBuilder\RequestBuilder();
$requestBuilder->setMetadata($recordId = 1);
$requestBuilder->setAddress('Deutschland', '53114', 'Bonn', 'Sträßchenweg', '10');
$request = $requestBuilder->create();

$records = $service->getRecords([$request], null, $configName);
foreach ($records as $record) {
    echo $record->getRecordId(); // 1
    echo $record->getAddress()->getPostalCode(); // "53113"
    echo $record->getAddress()->getStreetName(); // "Sträßchensweg"
    echo $record->getStatusCodes(); // ['BAC100103', 'FNC400501', 'PDC030105', '…']
}
```
