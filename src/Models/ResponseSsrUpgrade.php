<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ResponseSsrUpgrade extends BaseModel
{
    public string $channel;
    public $counts;
    public string $device_type;
    public $id;
    public string $status;
    public string $strategy;
    public array $versions;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}