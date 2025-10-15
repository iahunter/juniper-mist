<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SnmpConfig extends BaseModel
{
    public $client_list;
    public string $contact;
    public string $description;
    public bool $enabled;
    public $engine_id;
    public $engine_id_type;
    public string $location;
    public string $name;
    public string $network;
    public $trap_groups;
    public $v2c_config;
    public $v3_config;
    public $views;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}