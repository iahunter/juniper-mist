<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ConstNacEvent
 */
class ConstNacEvent extends BaseModel
{
    /** @var string */
    public string $ap;
    /** @var string */
    public string $bssid;
    /** @var string */
    public string $cert_cn;
    /** @var integer */
    public int $cert_expiry;
    /** @var string */
    public string $cert_issuer;
    /** @var mixed */
    public $cert_san_upn;
    /** @var string */
    public string $cert_serial;
    /** @var string */
    public string $cert_subject;
    /** @var string */
    public string $eap_type;
    /** @var string */
    public string $nas_vendor;
    /** @var mixed */
    public $org_id;
    /** @var boolean */
    public bool $random_mac;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $ssid;
    /** @var mixed */
    public $timestamp;
    /** @var string */
    public string $type;
    /** @var string */
    public string $username;
    /** @var string */
    public string $wcid;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}