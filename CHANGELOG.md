# Changelog

All notable changes to this project are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/).

## [Unreleased]

## [1.1.0] - 2026-11-22

### Changed
- Require PHP 8.2 or later (was `^7.3 || ^8.0`) and `ramsey/uuid` ^4.7 (was `^3.9 || ^4.1`). Composer keeps resolving 1.0.0 on older PHP.
- Test on PHP 8.2 to 8.6 with the shared ray-di workflows.

## [1.0.0] - 2021-02-20

### Added
- Support `ramsey/uuid` 4.
- Bind `DateTimeInterface`.

## [0.2.0] - 2019-06-24

### Added
- Fake module.
- ISO 8601 `DateTime` format support.

## [0.1.0] - 2018-08-09
- First release.

[Unreleased]: https://github.com/ray-di/Ray.IdentityValueModule/compare/1.1.0...HEAD
[1.1.0]: https://github.com/ray-di/Ray.IdentityValueModule/compare/1.0.0...1.1.0
[1.0.0]: https://github.com/ray-di/Ray.IdentityValueModule/compare/0.2.0...1.0.0
[0.2.0]: https://github.com/ray-di/Ray.IdentityValueModule/compare/0.1.0...0.2.0
[0.1.0]: https://github.com/ray-di/Ray.IdentityValueModule/releases/tag/0.1.0
