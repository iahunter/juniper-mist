<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ServicePolicySecintel
 */
class ServicePolicySecintel extends BaseModel
{
    /** @var boolean */
    public bool $enabled;
    /** @var mixed */
    public $profile;
    /** @var string */
    public string $secintelprofile_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}