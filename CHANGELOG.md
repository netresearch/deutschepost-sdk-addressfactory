# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## 2.2.0

### Changed

- Upgraded development dependencies to latest versions
- Modernized codebase with updated coding standards
- Improved type declarations and code quality

### Removed

- Support for `psr/log` v1

## 2.1.0

### Added

- Support for `psr/log` v2 and v3

### Removed

-  Support for PHP 7

## 2.0.1

### Fixed

- Allow ampersand (and other html entities) in API password.

## 2.0.0

### Changed

- English public interface names for non-address types

### Added

- Support PHP 8.0
- Response type support for bulk receiver, postal box and postal office
- Validate Packstation addresses, contributed by [sprankhub](https://github.com/sprankhub) via [PR #2](https://github.com/netresearch/deutschepost-sdk-addressfactory/pull/2).

### Removed

-  PHP support for versions below 7.1.3

## 1.0.0

- Initial release
