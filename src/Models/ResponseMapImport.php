<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseMapImport
 */
class ResponseMapImport extends BaseModel
{
    /** @var mixed */
    public $aps;
    /** @var mixed */
    public $floorplans;
    /** @var boolean */
    public bool $for_site;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $summary;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}