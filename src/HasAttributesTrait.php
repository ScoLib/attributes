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
     * @return $this
     */
    public function setAttribute($key, $value = null)
    {
        $keys = is_array($key) ? $key : [$key => $value];

        foreach ($keys as $key => $value) {
            Arr::set($this->attributes, $key, $value);
        }
        return $this;
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
     * Get all of the current attributes on the class.
     *
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Determine if the given key exists in the attributes.
     *
     * @param  string|int $key
     *
     * @return bool
     */
    public function existsAttribute($key)
    {
        return Arr::exists($this->attributes, $key);
    }

    /**
     * Check if an key or keys exist in the attributes using "dot" notation.
     *
     * @param  string|array $keys
     *
     * @return bool
     */
    public function hasAttribute($keys)
    {
        return Arr::has($this->attributes, $keys);
    }

    /**
     * Convert the Object instance to an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->getAttributes();
    }

    /**
     * Convert the object into something JSON serializable.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * Convert the Object instance to JSON.
     *
     * @param  int  $options
     * @return string
     */
    public function toJson($options = 0)
    {
        return json_encode($this->jsonSerialize(), $options);
    }
}
