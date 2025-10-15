<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Snmpv3Config extends BaseModel
{
    public $notify;
    public $notify_filter;
    public $target_address;
    public $target_parameters;
    public $usm;
    public $vacm;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}