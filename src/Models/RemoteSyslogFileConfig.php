<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RemoteSyslogFileConfig
 */
class RemoteSyslogFileConfig extends BaseModel
{
    /** @var mixed */
    public $archive;
    /** @var mixed */
    public $contents;
    /** @var boolean */
    public bool $enable_tls;
    /** @var boolean */
    public bool $explicit_priority;
    /** @var string */
    public string $file;
    /** @var string */
    public string $match;
    /** @var boolean */
    public bool $structured_data;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}