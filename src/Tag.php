<?php

namespace SimonHamp\StatamicHeroicons;

use Statamic\Tags\Tags;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class Tag extends Tags
{
    protected static $handle = 'heroicons';

    public function index()
    {
        return $this->wildcard($this->params->get('type'));
    }

    public function wildcard($tag)
    {
        $icon = $this->params->get('icon');
        $class = $this->params->get('class');

        if (Str::contains($tag, ':')) {
            [$tag, $icon] = explode(':', $tag);
        }

        return $this->output($tag, "{$icon}.svg", compact('class'));
    }

    protected function output($type, $icon, $attributes = [])
    {
        $file = base_path("node_modules/heroicons/dist/{$type}/{$icon}");

        if (! File::exists($file) && ! File::exists($file = realpath(__DIR__ . "/../dist/{$type}/{$icon}"))) {
            return '';
        }

        $contents = File::get($file);

        $attr = '';

        foreach ($attributes as $key => $value) {
            $attr .= " {$key}=\"{$value}\"";
        }

        return preg_replace('/<svg(.*?)>/i', "<svg$1 {$attr}>", $contents);
    }
}
