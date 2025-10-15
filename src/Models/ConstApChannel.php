<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ConstApChannel extends BaseModel
{
    public bool $band24_40mhz_allowed;
    public $band24_channels;
    public bool $band24_enabled;
    public $band5_channels;
    public bool $band5_enabled;
    public $band6_channels;
    public bool $band6_enabled;
    public bool $certified;
    public int $code;
    public bool $dfs_ok;
    public string $key;
    public string $name;
    public string $uses;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}