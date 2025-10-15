<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class NetworkInternetAccess extends BaseModel
{
    public bool $create_simple_service_policy;
    public $destination_nat;
    public bool $enabled;
    public bool $restricted;
    public $static_nat;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}