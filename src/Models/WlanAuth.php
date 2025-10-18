<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WlanAuth
 */
class WlanAuth extends BaseModel
{
    /** @var integer */
    public int $anticlog_threshold;
    /** @var boolean */
    public bool $eap_reauth;
    /** @var boolean */
    public bool $enable_mac_auth;
    /** @var integer */
    public int $key_idx;
    /** @var mixed */
    public $keys;
    /** @var boolean */
    public bool $multi_psk_only;
    /** @var mixed */
    public $owe;
    /** @var mixed */
    public $pairwise;
    /** @var boolean */
    public bool $private_wlan;
    /** @var string */
    public string $psk;
    /** @var mixed */
    public $type;
    /** @var boolean */
    public bool $wep_as_secondary_auth;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}