<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ConstInsightMetricsProperty extends BaseModel
{
    public $ctype;
    public string $description;
    public $example;
    public $intervals;
    public $keys;
    public $params;
    public $report_duration;
    public $report_scopes;
    public $scopes;
    public bool $sle_baselined;
    public $sle_classifiers;
    public string $type;
    public string $unit;
    public $values;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}