<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgCrlImportFile
 */
class OrgCrlImportFile extends BaseModel
{
    /** @var string */
    public string $file;
    /** @var string */
    public string $json;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}