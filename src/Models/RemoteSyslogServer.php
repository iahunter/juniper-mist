<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RemoteSyslogServer
 */
class RemoteSyslogServer extends BaseModel
{
    /** @var mixed */
    public $contents;
    /** @var boolean */
    public bool $explicit_priority;
    /** @var mixed */
    public $facility;
    /** @var string */
    public string $host;
    /** @var string */
    public string $match;
    /** @var mixed */
    public $port;
    /** @var mixed */
    public $protocol;
    /** @var string */
    public string $routing_instance;
    /** @var string */
    public string $server_name;
    /** @var mixed */
    public $severity;
    /** @var string */
    public string $source_address;
    /** @var boolean */
    public bool $structured_data;
    /** @var string */
    public string $tag;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}