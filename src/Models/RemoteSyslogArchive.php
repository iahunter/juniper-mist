<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RemoteSyslogArchive
 */
class RemoteSyslogArchive extends BaseModel
{
    /** @var mixed */
    public $files;
    /** @var string */
    public string $size;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}