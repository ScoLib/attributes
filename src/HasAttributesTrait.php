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

    /**
     * @param  string|int $key
     *
     * @return bool
     */
    public function existsAttribute($key)
    {
        return Arr::exists($this->attributes, $key);
    }

    /**
     * @param  string|array $keys
     *
     * @return bool
     */
    public function hasAttribute($keys)
    {
        return Arr::has($this->attributes, $keys);
    }
}
