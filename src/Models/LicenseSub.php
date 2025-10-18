<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model LicenseSub
 */
class LicenseSub extends BaseModel
{
    /** @var mixed */
    public $created_time;
    /** @var integer */
    public int $end_time;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $order_id;
    /** @var mixed */
    public $org_id;
    /** @var integer */
    public int $quantity;
    /** @var integer */
    public int $remaining_quantity;
    /** @var integer */
    public int $start_time;
    /** @var string */
    public string $subscription_id;
    /** @var mixed */
    public $type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}