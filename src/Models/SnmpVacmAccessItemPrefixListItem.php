<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SnmpVacmAccessItemPrefixListItem extends BaseModel
{
    public string $context_prefix;
    public string $notify_view;
    public string $read_view;
    public $security_level;
    public $security_model;
    public $type;
    public string $write_view;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}