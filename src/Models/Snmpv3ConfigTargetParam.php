<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Snmpv3ConfigTargetParam extends BaseModel
{
    public $message_processing_model;
    public string $name;
    public string $notify_filter;
    public $security_level;
    public $security_model;
    public string $security_name;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}