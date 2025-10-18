<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MxedgeEvent
 */
class MxedgeEvent extends BaseModel
{
    /** @var string */
    public string $component;
    /** @var string */
    public string $mxcluster_id;
    /** @var string */
    public string $mxedge_id;
    /** @var mixed */
    public $org_id;
    /** @var string */
    public string $service;
    /** @var mixed */
    public $timestamp;
    /** @var string */
    public string $type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}