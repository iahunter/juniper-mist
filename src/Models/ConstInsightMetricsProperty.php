<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ConstInsightMetricsProperty
 */
class ConstInsightMetricsProperty extends BaseModel
{
    /** @var mixed */
    public $ctype;
    /** @var string */
    public string $description;
    /** @var mixed */
    public $example;
    /** @var mixed */
    public $intervals;
    /** @var mixed */
    public $keys;
    /** @var mixed */
    public $params;
    /** @var mixed */
    public $report_duration;
    /** @var mixed */
    public $report_scopes;
    /** @var mixed */
    public $scopes;
    /** @var boolean */
    public bool $sle_baselined;
    /** @var mixed */
    public $sle_classifiers;
    /** @var string */
    public string $type;
    /** @var string */
    public string $unit;
    /** @var mixed */
    public $values;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}