<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ConstAlarmDefinition
 */
class ConstAlarmDefinition extends BaseModel
{
    /** @var string */
    public string $display;
    /** @var object */
    public $example;
    /** @var mixed */
    public $fields;
    /** @var string */
    public string $group;
    /** @var string */
    public string $key;
    /** @var string */
    public string $marvis_suggestion_category;
    /** @var string */
    public string $severity;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}