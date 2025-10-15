<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Zone extends BaseModel
{
    public $created_time;
    public bool $for_site;
    public $id;
    public string $map_id;
    public $modified_time;
    public string $name;
    public $org_id;
    public $site_id;
    public $vertices;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}