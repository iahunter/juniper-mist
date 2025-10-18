<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WlanPortalTemplateSetting
 */
class WlanPortalTemplateSetting extends BaseModel
{
    /** @var string */
    public string $accessCodeAlternateEmail;
    /** @var mixed */
    public $alignment;
    /** @var mixed */
    public $ar;
    /** @var string */
    public string $authButtonAmazon;
    /** @var string */
    public string $authButtonAzure;
    /** @var string */
    public string $authButtonEmail;
    /** @var string */
    public string $authButtonFacebook;
    /** @var string */
    public string $authButtonGoogle;
    /** @var string */
    public string $authButtonMicrosoft;
    /** @var string */
    public string $authButtonPassphrase;
    /** @var string */
    public string $authButtonSms;
    /** @var string */
    public string $authButtonSponsor;
    /** @var string */
    public string $authLabel;
    /** @var string */
    public string $backLink;
    /** @var mixed */
    public $ca-ES;
    /** @var string */
    public string $color;
    /** @var string */
    public string $colorDark;
    /** @var string */
    public string $colorLight;
    /** @var boolean */
    public bool $company;
    /** @var string */
    public string $companyError;
    /** @var string */
    public string $companyLabel;
    /** @var mixed */
    public $cs-CZ;
    /** @var mixed */
    public $da-DK;
    /** @var mixed */
    public $de-DE;
    /** @var mixed */
    public $el-GR;
    /** @var boolean */
    public bool $email;
    /** @var string */
    public string $emailAccessDomainError;
    /** @var string */
    public string $emailCancel;
    /** @var string */
    public string $emailCodeCancel;
    /** @var string */
    public string $emailCodeError;
    /** @var string */
    public string $emailCodeFieldLabel;
    /** @var string */
    public string $emailCodeMessage;
    /** @var string */
    public string $emailCodeSubmit;
    /** @var string */
    public string $emailCodeTitle;
    /** @var string */
    public string $emailError;
    /** @var string */
    public string $emailFieldLabel;
    /** @var string */
    public string $emailLabel;
    /** @var string */
    public string $emailMessage;
    /** @var string */
    public string $emailSubmit;
    /** @var string */
    public string $emailTitle;
    /** @var mixed */
    public $en-GB;
    /** @var mixed */
    public $en-US;
    /** @var mixed */
    public $es-ES;
    /** @var mixed */
    public $fi-FI;
    /** @var boolean */
    public bool $field1;
    /** @var string */
    public string $field1Error;
    /** @var string */
    public string $field1Label;
    /** @var boolean */
    public bool $field1Required;
    /** @var boolean */
    public bool $field2;
    /** @var string */
    public string $field2Error;
    /** @var string */
    public string $field2Label;
    /** @var boolean */
    public bool $field2Required;
    /** @var boolean */
    public bool $field3;
    /** @var string */
    public string $field3Error;
    /** @var string */
    public string $field3Label;
    /** @var boolean */
    public bool $field3Required;
    /** @var boolean */
    public bool $field4;
    /** @var string */
    public string $field4Error;
    /** @var string */
    public string $field4Label;
    /** @var boolean */
    public bool $field4Required;
    /** @var mixed */
    public $fr-FR;
    /** @var mixed */
    public $he-IL;
    /** @var mixed */
    public $hi-IN;
    /** @var mixed */
    public $hr-HR;
    /** @var mixed */
    public $hu-HU;
    /** @var mixed */
    public $id-ID;
    /** @var mixed */
    public $it-IT;
    /** @var mixed */
    public $ja-JP;
    /** @var mixed */
    public $ko-KR;
    /** @var string */
    public string $logo;
    /** @var integer */
    public int $logoHeight;
    /** @var integer */
    public int $logoWidth;
    /** @var string */
    public string $marketingPolicyLink;
    /** @var boolean */
    public bool $marketingPolicyOptIn;
    /** @var string */
    public string $marketingPolicyOptInLabel;
    /** @var string */
    public string $marketingPolicyOptInText;
    /** @var string */
    public string $message;
    /** @var mixed */
    public $ms-MY;
    /** @var boolean */
    public bool $multiAuth;
    /** @var boolean */
    public bool $name;
    /** @var string */
    public string $nameError;
    /** @var string */
    public string $nameLabel;
    /** @var mixed */
    public $nb-NO;
    /** @var mixed */
    public $nl-NL;
    /** @var boolean */
    public bool $optOutDefault;
    /** @var boolean */
    public bool $optout;
    /** @var string */
    public string $optoutLabel;
    /** @var string */
    public string $pageTitle;
    /** @var string */
    public string $passphraseCancel;
    /** @var string */
    public string $passphraseError;
    /** @var string */
    public string $passphraseLabel;
    /** @var string */
    public string $passphraseMessage;
    /** @var string */
    public string $passphraseSubmit;
    /** @var string */
    public string $passphraseTitle;
    /** @var mixed */
    public $pl-PL;
    /** @var boolean */
    public bool $poweredBy;
    /** @var boolean */
    public bool $privacy;
    /** @var string */
    public string $privacyPolicyAcceptLabel;
    /** @var string */
    public string $privacyPolicyError;
    /** @var string */
    public string $privacyPolicyLink;
    /** @var string */
    public string $privacyPolicyText;
    /** @var mixed */
    public $pt-BR;
    /** @var mixed */
    public $pt-PT;
    /** @var string */
    public string $requiredFieldLabel;
    /** @var boolean */
    public bool $responsiveLayout;
    /** @var mixed */
    public $ro-RO;
    /** @var mixed */
    public $ru-RU;
    /** @var string */
    public string $signInLabel;
    /** @var mixed */
    public $sk-SK;
    /** @var string */
    public string $smsCarrierDefault;
    /** @var string */
    public string $smsCarrierError;
    /** @var string */
    public string $smsCarrierFieldLabel;
    /** @var string */
    public string $smsCodeCancel;
    /** @var string */
    public string $smsCodeError;
    /** @var string */
    public string $smsCodeFieldLabel;
    /** @var string */
    public string $smsCodeMessage;
    /** @var string */
    public string $smsCodeSubmit;
    /** @var string */
    public string $smsCodeTitle;
    /** @var string */
    public string $smsCountryFieldLabel;
    /** @var string */
    public string $smsCountryFormat;
    /** @var string */
    public string $smsHaveAccessCode;
    /** @var boolean */
    public bool $smsIsTwilio;
    /** @var string */
    public string $smsMessageFormat;
    /** @var string */
    public string $smsNumberCancel;
    /** @var string */
    public string $smsNumberError;
    /** @var string */
    public string $smsNumberFieldLabel;
    /** @var string */
    public string $smsNumberFormat;
    /** @var string */
    public string $smsNumberMessage;
    /** @var string */
    public string $smsNumberSubmit;
    /** @var string */
    public string $smsNumberTitle;
    /** @var string */
    public string $smsUsernameFormat;
    /** @var integer */
    public int $smsValidityDuration;
    /** @var string */
    public string $sponsorBackLink;
    /** @var string */
    public string $sponsorCancel;
    /** @var string */
    public string $sponsorEmail;
    /** @var string */
    public string $sponsorEmailError;
    /** @var string */
    public string $sponsorEmailTemplate;
    /** @var string */
    public string $sponsorInfoApproved;
    /** @var string */
    public string $sponsorInfoDenied;
    /** @var string */
    public string $sponsorInfoPending;
    /** @var string */
    public string $sponsorName;
    /** @var string */
    public string $sponsorNameError;
    /** @var string */
    public string $sponsorNotePending;
    /** @var string */
    public string $sponsorRequestAccess;
    /** @var string */
    public string $sponsorStatusApproved;
    /** @var string */
    public string $sponsorStatusDenied;
    /** @var string */
    public string $sponsorStatusPending;
    /** @var string */
    public string $sponsorSubmit;
    /** @var string */
    public string $sponsorsError;
    /** @var string */
    public string $sponsorsFieldLabel;
    /** @var mixed */
    public $sv-SE;
    /** @var mixed */
    public $th-TH;
    /** @var boolean */
    public bool $tos;
    /** @var string */
    public string $tosAcceptLabel;
    /** @var string */
    public string $tosError;
    /** @var string */
    public string $tosLink;
    /** @var string */
    public string $tosText;
    /** @var mixed */
    public $tr-TR;
    /** @var mixed */
    public $uk-UA;
    /** @var mixed */
    public $vi-VN;
    /** @var mixed */
    public $zh-Hans;
    /** @var mixed */
    public $zh-Hant;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}