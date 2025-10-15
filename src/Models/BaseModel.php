<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

abstract class BaseModel
{
    public static function fromArray(array $data): static
    {
        $obj = new static();
        foreach ($data as $k => $v) {
            if (property_exists($obj, $k)) {
                $obj->$k = $v;
            }
        }
        return $obj;
    }

    public function toArray(): array
    {
        $out = [];
        foreach ((array)$this as $k => $v) {
            $out[$k] = $v;
        }
        return $out;
    }
}
