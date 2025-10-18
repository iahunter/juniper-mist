<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model AssetFilter
 */
class AssetFilter extends BaseModel
{
    /** @var string */
    public string $ap_mac;
    /** @var integer */
    public int $beam;
    /** @var mixed */
    public $created_time;
    /** @var boolean */
    public bool $disabled;
    /** @var string */
    public string $eddystone_uid_namespace;
    /** @var string */
    public string $eddystone_url;
    /** @var boolean */
    public bool $for_site;
    /** @var integer */
    public int $ibeacon_major;
    /** @var string */
    public string $ibeacon_uuid;
    /** @var mixed */
    public $id;
    /** @var integer */
    public int $mfg_company_id;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $org_id;
    /** @var integer */
    public int $rssi;
    /** @var string */
    public string $service_uuid;
    /** @var mixed */
    public $site_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}