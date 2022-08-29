# Aimes_PageBuilderCodeBlock

!["Supported Magento Version"][magento-badge] !["Latest Release"][release-badge]

* Compatible with _Magento Open Source_ and _Adobe Commerce_ `2.4.x`

## Features

Adds a new PageBuilder content type to display code snippets nicely, using [highlight.js][highlightjs].

<img width="965" alt="image" src="https://user-images.githubusercontent.com/4225347/187295986-84d7dd1f-4946-4c12-81c6-7fc7060eb3b9.png">
<img width="1073" alt="image" src="https://user-images.githubusercontent.com/4225347/187298138-341146d8-f6cf-4b87-899a-03219e88bda5.png">

## Planned Features / Improvements
- Markup rendered on save, instead of generated per page load
- Better `highlight.js` theme support
- Hyva Themes Support

## Requirements

* Magento Open Source or Adobe Commerce version with PageBuilder version `^2.2`
    * May support `2.3.x` but only tested with `2.4.5`

## Installation

Please install this module via Composer. This module is hosted on [Packagist][packagist].

* `composer require aimes/module-page-builder-code-block`
* `bin/magento module:enable Aimes_PageBuilderCodeBlock`
* `bin/magento setup:upgrade`


## Licence
[GPLv3][gpl] © [Rob Aimes][author]

[magento-badge]:https://img.shields.io/badge/magento-2.3.x%20%7C%202.4.x-orange.svg?logo=magento&style=for-the-badge
[release-badge]:https://img.shields.io/github/v/release/robaimes/module-pagebuilder-code-block?sort=semver&style=for-the-badge&color=blue
[highlightjs]:https://highlightjs.org/
[packagist]:https://packagist.org/packages/aimes/module-page-builder-code-block
[gpl]:https://www.gnu.org/licenses/gpl-3.0.en.html
[author]:https://aimes.dev/
