<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model AccountSkyatpData
 */
class AccountSkyatpData extends BaseModel
{
    /** @var mixed */
    public $secintel;
    /** @var string */
    public string $secintel_allowlist_url;
    /** @var string */
    public string $secintel_blocklist_url;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}