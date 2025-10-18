<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ServicePolicyEwfRule
 */
class ServicePolicyEwfRule extends BaseModel
{
    /** @var boolean */
    public bool $alert_only;
    /** @var string */
    public string $block_message;
    /** @var boolean */
    public bool $enabled;
    /** @var mixed */
    public $profile;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}