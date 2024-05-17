> [!WARNING]
> **This package is no longer maintained. Please use [`stefangalescu/statamic-heroicons`](https://github.com/stefangalescu/statamic-heroicons) instead.**

# Statamic Heroicons
A package to easily make use of [Heroicons](https://github.com/refactoringui/heroicons)
in your Antlers views.

You can see all of the icons at [heroicons.com](https://heroicons.com).
Heroicons are made by Steve Schoger and Adam Wathan, Tailwind Labs.

## Requirements
- PHP 7.4+
- Statamic 3+

## Installation

```bash
$ composer require simonhamp/statamic-heroicons
```

## Usage

```
{{ heroicons:solid:annotation }}

{{ heroicons:outline:arrow-narrow-right }}

{{ heroicons:solid:exclamation class="text-yellow-500" }}

{{ heroicons :type="variable_type" :icon="variable_icon" }}
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [LICENSE](LICENSE.md) for more details.
