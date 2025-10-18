<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Recover
 */
class Recover extends BaseModel
{
    /** @var string */
    public string $email;
    /** @var string */
    public string $recaptcha;
    /** @var mixed */
    public $recaptcha_flavor;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}