<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseSiteSearchItem
 */
class ResponseSiteSearchItem extends BaseModel
{
    /** @var boolean */
    public bool $auto_upgrade_enabled;
    /** @var string */
    public string $auto_upgrade_version;
    /** @var string */
    public string $country_code;
    /** @var boolean */
    public bool $honeypot_enabled;
    /** @var mixed */
    public $id;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $timestamp;
    /** @var string */
    public string $timezone;
    /** @var boolean */
    public bool $vna_enabled;
    /** @var boolean */
    public bool $wifi_enabled;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}