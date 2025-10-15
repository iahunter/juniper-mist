<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class LicenseSub extends BaseModel
{
    public $created_time;
    public int $end_time;
    public $id;
    public $modified_time;
    public string $order_id;
    public $org_id;
    public int $quantity;
    public int $remaining_quantity;
    public int $start_time;
    public string $subscription_id;
    public $type;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}