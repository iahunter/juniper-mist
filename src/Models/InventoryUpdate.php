<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class InventoryUpdate extends BaseModel
{
    public bool $disable_auto_config;
    public $macs;
    public bool $managed;
    public bool $no_reassign;
    public $op;
    public $serials;
    public string $site_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}