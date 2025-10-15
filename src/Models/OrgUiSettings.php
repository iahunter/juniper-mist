<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class OrgUiSettings extends BaseModel
{
    public $created_time;
    public string $description;
    public bool $for_site;
    public $id;
    public bool $isCustomDataboard;
    public $modified_time;
    public string $name;
    public $org_id;
    public $purpose;
    public $site_id;
    public $tiles;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}