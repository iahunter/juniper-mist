<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Delivery
 */
class Delivery extends BaseModel
{
    /** @var mixed */
    public $additional_emails;
    /** @var boolean */
    public bool $enabled;
    /** @var boolean */
    public bool $to_org_admins;
    /** @var boolean */
    public bool $to_site_admins;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}