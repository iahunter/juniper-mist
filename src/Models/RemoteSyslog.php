<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RemoteSyslog
 */
class RemoteSyslog extends BaseModel
{
    /** @var mixed */
    public $archive;
    /** @var mixed */
    public $cacerts;
    /** @var mixed */
    public $console;
    /** @var boolean */
    public bool $enabled;
    /** @var mixed */
    public $files;
    /** @var string */
    public string $network;
    /** @var boolean */
    public bool $send_to_all_servers;
    /** @var mixed */
    public $servers;
    /** @var mixed */
    public $time_format;
    /** @var mixed */
    public $users;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}