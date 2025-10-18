<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WebhookDeviceUpdownsEvent
 */
class WebhookDeviceUpdownsEvent extends BaseModel
{
    /** @var string */
    public string $ap;
    /** @var string */
    public string $ap_name;
    /** @var boolean */
    public bool $for_site;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $site_name;
    /** @var mixed */
    public $timestamp;
    /** @var string */
    public string $type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}