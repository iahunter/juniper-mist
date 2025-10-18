<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseLocationCoverage
 */
class ResponseLocationCoverage extends BaseModel
{
    /** @var mixed */
    public $beams_means;
    /** @var integer */
    public int $end;
    /** @var number */
    public float $gridsize;
    /** @var mixed */
    public $result_def;
    /** @var mixed */
    public $results;
    /** @var integer */
    public int $start;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}