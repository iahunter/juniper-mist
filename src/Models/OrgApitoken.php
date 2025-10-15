<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class OrgApitoken extends BaseModel
{
    public string $created_by;
    public $created_time;
    public $id;
    public string $key;
    public float $last_used;
    public string $name;
    public $org_id;
    public $privileges;
    public $src_ips;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}