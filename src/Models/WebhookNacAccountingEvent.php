<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WebhookNacAccountingEvent
 */
class WebhookNacAccountingEvent extends BaseModel
{
    /** @var string */
    public string $ap;
    /** @var mixed */
    public $auth_type;
    /** @var string */
    public string $bssid;
    /** @var string */
    public string $client_ip;
    /** @var string */
    public string $client_type;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $nas_vendor;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $rx_pkts;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $ssid;
    /** @var mixed */
    public $timestamp;
    /** @var mixed */
    public $tx_pkts;
    /** @var string */
    public string $type;
    /** @var string */
    public string $username;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}