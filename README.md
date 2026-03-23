# maispace/elements — TYPO3 Content Elements

[![CI](https://github.com/mai-space-de/typo3-extension-elements/actions/workflows/ci.yml/badge.svg)](https://github.com/mai-space-de/typo3-extension-elements/actions/workflows/ci.yml)
[![PHP](https://img.shields.io/badge/PHP-8.2%2B-blue)](https://www.php.net/)
[![TYPO3](https://img.shields.io/badge/TYPO3-13.4%20LTS-orange)](https://typo3.org/)
[![License: GPL v2](https://img.shields.io/badge/License-GPL%20v2-blue.svg)](https://www.gnu.org/licenses/old-licenses/gpl-2.0.html)

A TYPO3 extension providing custom content elements for structured page building.

## Features

- Custom content element types for TYPO3 CMS
- Fluid templates for text, media, and layout elements
- TypoScript configuration via TYPO3 Site Sets
- Compatible with TYPO3 13.4 LTS

## Requirements

- PHP 8.2 or later
- TYPO3 CMS 13.4 LTS
- [friendsoftypo3/visual-editor](https://github.com/FriendsOfTYPO3/visual-editor)

## Installation

```bash
composer require maispace/mai-elements
```

Activate the extension in the TYPO3 Extension Manager, then include the TypoScript:

```typoscript
@import 'EXT:mai_elements/Configuration/TypoScript/setup.typoscript'
```

Or use the TYPO3 Site Set `Elements` in your site configuration.

## Development

Install dependencies:

```bash
composer install
```

Run all linters:

```bash
composer lint:check
```

Fix auto-fixable issues:

```bash
composer lint:fix
```

Run unit tests:

```bash
composer test:unit
```

Run PHPStan static analysis:

```bash
composer check:phpstan
```

Run TypoScript lint:

```bash
composer check:typoscript
```

## License

This extension is published under the [GNU General Public License v2.0](https://www.gnu.org/licenses/old-licenses/gpl-2.0.html) or later.
