<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MapSitesurveyPathItems
 */
class MapSitesurveyPathItems extends BaseModel
{
    /** @var string */
    public string $coordinate;
    /** @var mixed */
    public $id;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $nodes;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}