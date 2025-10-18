<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MarvisClient
 */
class MarvisClient extends BaseModel
{
    /** @var boolean */
    public bool $disabled;
    /** @var mixed */
    public $id;
    /** @var string */
    public string $name;
    /** @var string */
    public string $provision_url;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}