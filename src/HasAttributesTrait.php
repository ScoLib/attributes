<?php

namespace Sco\Attributes;

use Illuminate\Support\Arr;

trait HasAttributesTrait
{
    protected $attributes = [];

    /**
     * Set a given log value.
     *
     * @param array|string $key
     * @param mixed        $value
     *
     * @return bool
     */
    public function setAttribute($key, $value = null)
    {
        $keys = is_array($key) ? $key : [$key => $value];

        foreach ($keys as $key => $value) {
            Arr::set($this->attributes, $key, $value);
        }
        return true;
    }

    /**
     * Get the specified log value.
     *
     * @param null|string $key
     * @param mixed       $default
     *
     * @return mixed
     */
    public function getAttribute($key = null, $default = null)
    {
        return Arr::get($this->attributes, $key, $default);
    }
}
