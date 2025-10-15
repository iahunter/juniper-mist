<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ResponseAutoOrientation extends BaseModel
{
    public $devices;
    public int $estimated_runtime;
    public string $reason;
    public bool $started;
    public bool $valid;
    public bool $wifi_interrupting;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}