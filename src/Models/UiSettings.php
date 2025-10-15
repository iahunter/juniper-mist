<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class UiSettings extends BaseModel
{
    public $created_time;
    public string $defaultScopeId;
    public string $defaultScopeType;
    public $defaultTimeRange;
    public string $description;
    public bool $for_site;
    public $id;
    public bool $isCustomDataboard;
    public bool $isScopeLinked;
    public bool $isTimeRangeLinked;
    public $modified_time;
    public string $name;
    public $org_id;
    public string $purpose;
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