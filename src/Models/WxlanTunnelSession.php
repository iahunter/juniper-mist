<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WxlanTunnelSession extends BaseModel
{
    public string $ap_as_session_id;
    public string $comment;
    public bool $enable_cookie;
    public $ethertype;
    public int $local_session_id;
    public bool $pseudo_802.1ad_enabled;
    public string $remote_id;
    public int $remote_session_id;
    public bool $use_ap_as_session_ids;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}