<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Vbeacon extends BaseModel
{
    public $created_time;
    public bool $for_site;
    public $id;
    public int $major;
    public string $map_id;
    public string $message;
    public int $minor;
    public $modified_time;
    public string $name;
    public $org_id;
    public int $power;
    public $power_mode;
    public $site_id;
    public string $url;
    public string $uuid;
    public string $wayfinding_nodename;
    public float $x;
    public float $y;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}