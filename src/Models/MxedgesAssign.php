<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MxedgesAssign
 */
class MxedgesAssign extends BaseModel
{
    /** @var mixed */
    public $mxedge_ids;
    /** @var string */
    public string $site_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}