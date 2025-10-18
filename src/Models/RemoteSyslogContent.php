<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RemoteSyslogContent
 */
class RemoteSyslogContent extends BaseModel
{
    /** @var mixed */
    public $facility;
    /** @var mixed */
    public $severity;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}