<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MxclusterNacClientIp
 */
class MxclusterNacClientIp extends BaseModel
{
    /** @var boolean */
    public bool $require_message_authenticator;
    /** @var string */
    public string $secret;
    /** @var string */
    public string $site_id;
    /** @var mixed */
    public $vendor;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}