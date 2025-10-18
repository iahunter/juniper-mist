<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MapOrgImportFileJson
 */
class MapOrgImportFileJson extends BaseModel
{
    /** @var boolean */
    public bool $import_all_floorplans;
    /** @var boolean */
    public bool $import_height;
    /** @var boolean */
    public bool $import_orientation;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $vendor_name;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}