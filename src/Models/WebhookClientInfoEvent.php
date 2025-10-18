<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WebhookClientInfoEvent
 */
class WebhookClientInfoEvent extends BaseModel
{
    /** @var string */
    public string $hostname;
    /** @var string */
    public string $ip;
    /** @var string */
    public string $mac;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $timestamp;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}