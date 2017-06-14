<?php


namespace Sco\Attributes;


use Illuminate\Support\Arr;

trait HasOriginalAndAttributesTrait
{
    use HasAttributesTrait;

    protected $original = [];

    /**
     * Get the class's original attribute values.
     *
     * @param  string|null $key
     * @param  mixed       $default
     *
     * @return mixed|array
     */
    public function getOriginal($key = null, $default = null)
    {
        return Arr::get($this->original, $key, $default);
    }

    /**
     * Set the original attributes with the current.
     *
     * @param array $original
     *
     * @return $this
     */
    public function setOriginal(array $original)
    {
        $this->original = $original;

        return $this;
    }
}
