# Statamic Heroicons
A package to easily make use of [Heroicons](https://github.com/refactoringui/heroicons)
in your Antlers views.

You can see all of the icons at [heroicons.com](https://heroicons.com).
Heroicons are made by Steve Schoger and Adam Wathan, Tailwind Labs.

## Requirements
- PHP 7.4+
- Statamic 3+

## Usage

```
{{ heroicons:solid:annotation }}

{{ heroicons:outline:arrow-narrow-right }}

{{ heroicons:solid:exclamation class="text-yellow-500" }}

{{ heroicons :type="variable_type" :icon="variable_icon" }}
```