<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model TestTwilio
 */
class TestTwilio extends BaseModel
{
    /** @var string */
    public string $from;
    /** @var string */
    public string $to;
    /** @var string */
    public string $twilio_auth_token;
    /** @var string */
    public string $twilio_sid;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}