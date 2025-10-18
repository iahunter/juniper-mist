<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponsePcapAp
 */
class ResponsePcapAp extends BaseModel
{
    /** @var integer */
    public int $band;
    /** @var integer */
    public int $bandwidth;
    /** @var integer */
    public int $channel;
    /** @var string */
    public string $tcpdump_expression;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}