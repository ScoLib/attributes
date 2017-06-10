# attributes

[![StyleCI][ico-styleci]][link-styleci]
[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]


## Install

Via Composer

``` bash
$ composer require scolib/attributes
```

## Usage

``` php
use Sco\Attributes\HasAttributesTrait;

class Demo
{
    use HasAttributesTrait;
｝
```

### Method

```php
/**
 * Get the specified log value.
 *
 * @param null|string $key
 * @param mixed       $default
 *
 * @return mixed
 */
public function getAttribute($key = null, $default = null)

/**
 * Set a given log value.
 *
 * @param array|string $key
 * @param mixed        $value
 *
 * @return bool
 */
public function setAttribute($key, $value = null)

/**
 * @param  string|int $key
 *
 * @return bool
 */
public function existsAttribute($key)

/**
 * @param  string|array $keys
 *
 * @return bool
 */
public function hasAttribute($keys)
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email slice1213@gmail.com instead of using the issue tracker.

## Credits

- [klgd][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-styleci]: https://styleci.io/repos/93938609/shield?branch=master
[ico-version]: https://img.shields.io/packagist/v/ScoLib/attributes.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/ScoLib/attributes/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/ScoLib/attributes.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/ScoLib/attributes.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/ScoLib/attributes.svg?style=flat-square

[link-styleci]: https://styleci.io/repos/93938609
[link-packagist]: https://packagist.org/packages/ScoLib/attributes
[link-travis]: https://travis-ci.org/ScoLib/attributes
[link-scrutinizer]: https://scrutinizer-ci.com/g/ScoLib/attributes/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/ScoLib/attributes
[link-downloads]: https://packagist.org/packages/ScoLib/attributes
[link-author]: https://github.com/klgd
[link-contributors]: ../../contributors
