<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ResponseMspInventoryDevice extends BaseModel
{
    public bool $for_site;
    public string $mac;
    public string $model;
    public $org_id;
    public string $serial;
    public $site_id;
    public string $type;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}