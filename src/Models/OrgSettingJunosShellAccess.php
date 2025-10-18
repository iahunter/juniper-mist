<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgSettingJunosShellAccess
 */
class OrgSettingJunosShellAccess extends BaseModel
{
    /** @var mixed */
    public $admin;
    /** @var mixed */
    public $helpdesk;
    /** @var mixed */
    public $read;
    /** @var mixed */
    public $write;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}