<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model BgpConfigNeighbors
 */
class BgpConfigNeighbors extends BaseModel
{
    /** @var boolean */
    public bool $disabled;
    /** @var string */
    public string $export_policy;
    /** @var integer */
    public int $hold_time;
    /** @var string */
    public string $import_policy;
    /** @var integer */
    public int $multihop_ttl;
    /** @var mixed */
    public $neighbor_as;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}