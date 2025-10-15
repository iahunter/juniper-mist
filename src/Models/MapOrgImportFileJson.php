<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class MapOrgImportFileJson extends BaseModel
{
    public bool $import_all_floorplans;
    public bool $import_height;
    public bool $import_orientation;
    public $site_id;
    public $vendor_name;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}