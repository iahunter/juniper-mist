<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Alarms
 */
class Alarms extends BaseModel
{
    /** @var mixed */
    public $alarm_ids;
    /** @var string */
    public string $note;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}