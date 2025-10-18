<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MapOrgImportFile
 */
class MapOrgImportFile extends BaseModel
{
    /** @var boolean */
    public bool $auto_deviceprofile_assignment;
    /** @var string */
    public string $csv;
    /** @var string */
    public string $file;
    /** @var mixed */
    public $json;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}