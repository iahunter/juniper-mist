<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WxlanTunnelSession
 */
class WxlanTunnelSession extends BaseModel
{
    /** @var string */
    public string $ap_as_session_id;
    /** @var string */
    public string $comment;
    /** @var boolean */
    public bool $enable_cookie;
    /** @var mixed */
    public $ethertype;
    /** @var integer */
    public int $local_session_id;
    /** @var boolean */
    public bool $pseudo_802.1ad_enabled;
    /** @var string */
    public string $remote_id;
    /** @var integer */
    public int $remote_session_id;
    /** @var boolean */
    public bool $use_ap_as_session_ids;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}