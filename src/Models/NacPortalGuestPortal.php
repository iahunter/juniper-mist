<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class NacPortalGuestPortal extends BaseModel
{
    public $auth;
    public int $expire;
    public string $external_portal_url;
    public bool $force_reconnect;
    public bool $forward;
    public string $forward_url;
    public $portal_allowed_hostnames;
    public $portal_allowed_subnets;
    public $portal_denied_hostnames;
    public bool $privacy;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}