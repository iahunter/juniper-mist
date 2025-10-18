<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UtilsSendSupportLogs
 */
class UtilsSendSupportLogs extends BaseModel
{
    /** @var mixed */
    public $info;
    /** @var string */
    public string $node;
    /** @var integer */
    public int $num_messages_files;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}