<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseVerifyTokenSuccess
 */
class ResponseVerifyTokenSuccess extends BaseModel
{
    /** @var string */
    public string $detail;
    /** @var boolean */
    public bool $invite_not_applied;
    /** @var integer */
    public int $min_length;
    /** @var string */
    public string $return_to;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}