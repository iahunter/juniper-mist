<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MapJibestream
 */
class MapJibestream extends BaseModel
{
    /** @var string */
    public string $client_id;
    /** @var string */
    public string $client_secret;
    /** @var integer */
    public int $customer_id;
    /** @var string */
    public string $endpoint_url;
    /** @var string */
    public string $map_id;
    /** @var integer */
    public int $mmpp;
    /** @var number */
    public float $ppm;
    /** @var mixed */
    public $vendor_name;
    /** @var integer */
    public int $venue_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}