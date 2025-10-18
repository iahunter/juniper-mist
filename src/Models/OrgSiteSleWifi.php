<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgSiteSleWifi
 */
class OrgSiteSleWifi extends BaseModel
{
    /** @var number */
    public float $end;
    /** @var integer */
    public int $interval;
    /** @var integer */
    public int $limit;
    /** @var integer */
    public int $page;
    /** @var mixed */
    public $results;
    /** @var number */
    public float $start;
    /** @var integer */
    public int $total;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}