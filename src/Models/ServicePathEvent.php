<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ServicePathEvent
 */
class ServicePathEvent extends BaseModel
{
    /** @var string */
    public string $mac;
    /** @var string */
    public string $model;
    /** @var mixed */
    public $org_id;
    /** @var string */
    public string $policy;
    /** @var string */
    public string $port_id;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $text;
    /** @var mixed */
    public $timestamp;
    /** @var string */
    public string $type;
    /** @var string */
    public string $version;
    /** @var string */
    public string $vpn_name;
    /** @var string */
    public string $vpn_path;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}