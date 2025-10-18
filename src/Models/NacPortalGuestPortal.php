<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model NacPortalGuestPortal
 */
class NacPortalGuestPortal extends BaseModel
{
    /** @var mixed */
    public $auth;
    /** @var integer */
    public int $expire;
    /** @var string */
    public string $external_portal_url;
    /** @var boolean */
    public bool $force_reconnect;
    /** @var boolean */
    public bool $forward;
    /** @var string */
    public string $forward_url;
    /** @var mixed */
    public $portal_allowed_hostnames;
    /** @var mixed */
    public $portal_allowed_subnets;
    /** @var mixed */
    public $portal_denied_hostnames;
    /** @var boolean */
    public bool $privacy;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}