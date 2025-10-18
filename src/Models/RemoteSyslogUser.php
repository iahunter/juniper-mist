<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RemoteSyslogUser
 */
class RemoteSyslogUser extends BaseModel
{
    /** @var mixed */
    public $contents;
    /** @var string */
    public string $match;
    /** @var string */
    public string $user;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}