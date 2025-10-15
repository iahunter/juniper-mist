<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class AdminInvite extends BaseModel
{
    public bool $account_only;
    public bool $allow_mist;
    public string $city;
    public string $country;
    public string $email;
    public string $first_name;
    public string $invite_code;
    public string $last_name;
    public string $org_name;
    public string $password;
    public string $recaptcha;
    public $recaptcha_flavor;
    public string $referer_invite_token;
    public string $return_to;
    public string $state;
    public string $street_address;
    public string $street_address 2;
    public string $zipcode;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}