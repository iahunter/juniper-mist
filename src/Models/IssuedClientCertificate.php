<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class IssuedClientCertificate extends BaseModel
{
    public string $common_name;
    public $created_time;
    public $device_id;
    public $modified_time;
    public string $serial_number;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}