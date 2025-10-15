<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class SsoRoleMsp extends BaseModel
{
    public $created_time;
    public bool $for_site;
    public $id;
    public $modified_time;
    public $msp_id;
    public string $name;
    public $org_id;
    public $privileges;
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