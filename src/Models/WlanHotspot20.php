<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WlanHotspot20
 */
class WlanHotspot20 extends BaseModel
{
    /** @var mixed */
    public $domain_name;
    /** @var boolean */
    public bool $enabled;
    /** @var mixed */
    public $nai_realms;
    /** @var mixed */
    public $operators;
    /** @var mixed */
    public $rcoi;
    /** @var string */
    public string $venue_name;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}