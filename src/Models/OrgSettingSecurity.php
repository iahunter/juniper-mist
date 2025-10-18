<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgSettingSecurity
 */
class OrgSettingSecurity extends BaseModel
{
    /** @var boolean */
    public bool $disable_local_ssh;
    /** @var string */
    public string $fips_zeroize_password;
    /** @var boolean */
    public bool $limit_ssh_access;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}