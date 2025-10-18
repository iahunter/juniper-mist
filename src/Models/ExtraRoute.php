<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ExtraRoute
 */
class ExtraRoute extends BaseModel
{
    /** @var boolean */
    public bool $discard;
    /** @var integer */
    public int $metric;
    /** @var object */
    public $next_qualified;
    /** @var boolean */
    public bool $no_resolve;
    /** @var integer */
    public int $preference;
    /** @var string */
    public string $via;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}