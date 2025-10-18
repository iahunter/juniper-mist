<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponsePskPortalLogsSearchItem
 */
class ResponsePskPortalLogsSearchItem extends BaseModel
{
    /** @var mixed */
    public $id;
    /** @var string */
    public string $message;
    /** @var string */
    public string $name_id;
    /** @var mixed */
    public $org_id;
    /** @var string */
    public string $psk_id;
    /** @var string */
    public string $psk_name;
    /** @var string */
    public string $pskportal_id;
    /** @var mixed */
    public $timestamp;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}