<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model IdpConfig
 */
class IdpConfig extends BaseModel
{
    /** @var boolean */
    public bool $alert_only;
    /** @var boolean */
    public bool $enabled;
    /** @var string */
    public string $idpprofile_id;
    /** @var string */
    public string $profile;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}