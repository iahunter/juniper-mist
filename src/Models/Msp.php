<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Msp extends BaseModel
{
    public bool $allow_mist;
    public $created_time;
    public $id;
    public string $logo_url;
    public $modified_time;
    public string $name;
    public $tier;
    public string $url;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}