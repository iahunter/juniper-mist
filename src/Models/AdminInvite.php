<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model AdminInvite
 */
class AdminInvite extends BaseModel
{
    /** @var boolean */
    public bool $account_only;
    /** @var boolean */
    public bool $allow_mist;
    /** @var string */
    public string $city;
    /** @var string */
    public string $country;
    /** @var string */
    public string $email;
    /** @var string */
    public string $first_name;
    /** @var string */
    public string $invite_code;
    /** @var string */
    public string $last_name;
    /** @var string */
    public string $org_name;
    /** @var string */
    public string $password;
    /** @var string */
    public string $recaptcha;
    /** @var mixed */
    public $recaptcha_flavor;
    /** @var string */
    public string $referer_invite_token;
    /** @var string */
    public string $return_to;
    /** @var string */
    public string $state;
    /** @var string */
    public string $street_address;
    /** @var string */
    public string $street_address 2;
    /** @var string */
    public string $zipcode;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}