<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ResponseSsrUpgradeStatus extends BaseModel
{
    public string $channel;
    public string $device_type;
    public $id;
    public string $status;
    public $targets;
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