<?php

namespace SimonHamp\StatamicHeroicons;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $tags = [
        Tag::class,
    ];
}
