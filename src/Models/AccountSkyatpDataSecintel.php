<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model AccountSkyatpDataSecintel
 */
class AccountSkyatpDataSecintel extends BaseModel
{
    /** @var mixed */
    public $third_party_threat_feeds;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}