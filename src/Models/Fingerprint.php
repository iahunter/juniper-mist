<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Fingerprint
 */
class Fingerprint extends BaseModel
{
    /** @var string */
    public string $family;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $mfg;
    /** @var string */
    public string $model;
    /** @var mixed */
    public $org_id;
    /** @var string */
    public string $os;
    /** @var string */
    public string $os_type;
    /** @var boolean */
    public bool $random_mac;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $timestamp;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}