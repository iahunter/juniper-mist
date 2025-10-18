<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model CallTroubleshoot
 */
class CallTroubleshoot extends BaseModel
{
    /** @var string */
    public string $mac;
    /** @var string */
    public string $meeting_id;
    /** @var mixed */
    public $results;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}