<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Sdkinvite extends BaseModel
{
    public $created_time;
    public bool $enabled;
    public int $expire_time;
    public $id;
    public $modified_time;
    public string $name;
    public $org_id;
    public int $quota;
    public bool $quota_limited;
    public $site_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}