<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model NacRule
 */
class NacRule extends BaseModel
{
    /** @var mixed */
    public $action;
    /** @var mixed */
    public $apply_tags;
    /** @var mixed */
    public $created_time;
    /** @var boolean */
    public bool $enabled;
    /** @var mixed */
    public $guest_auth_state;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $matching;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $not_matching;
    /** @var integer */
    public int $order;
    /** @var mixed */
    public $org_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}