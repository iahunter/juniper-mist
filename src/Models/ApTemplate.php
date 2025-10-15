<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ApTemplate extends BaseModel
{
    public $ap_matching;
    public $created_time;
    public bool $for_site;
    public $id;
    public $modified_time;
    public $org_id;
    public $site_id;
    public $wifi;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}