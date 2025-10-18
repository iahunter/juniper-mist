<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseSearchVarItem
 */
class ResponseSearchVarItem extends BaseModel
{
    /** @var mixed */
    public $created_time;
    /** @var mixed */
    public $modified_time;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $src;
    /** @var string */
    public string $var;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}