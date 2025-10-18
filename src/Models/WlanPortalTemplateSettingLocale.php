<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WlanPortalTemplateSettingLocale
 */
class WlanPortalTemplateSettingLocale extends BaseModel
{
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
    /** @var string */
    public string $companyError;
    /** @var string */
    public string $companyLabel;
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
    /** @var string */
    public string $field1Error;
    /** @var string */
    public string $field1Label;
    /** @var string */
    public string $field2Error;
    /** @var string */
    public string $field2Label;
    /** @var string */
    public string $field3Error;
    /** @var string */
    public string $field3Label;
    /** @var string */
    public string $field4Error;
    /** @var string */
    public string $field4Label;
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
    /** @var string */
    public string $nameError;
    /** @var string */
    public string $nameLabel;
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
    /** @var string */
    public string $privacyPolicyAcceptLabel;
    /** @var string */
    public string $privacyPolicyError;
    /** @var string */
    public string $privacyPolicyLink;
    /** @var string */
    public string $privacyPolicyText;
    /** @var string */
    public string $requiredFieldLabel;
    /** @var string */
    public string $signInLabel;
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
    /** @var string */
    public string $sponsorBackLink;
    /** @var string */
    public string $sponsorCancel;
    /** @var string */
    public string $sponsorEmail;
    /** @var string */
    public string $sponsorEmailError;
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
    /** @var string */
    public string $tosAcceptLabel;
    /** @var string */
    public string $tosError;
    /** @var string */
    public string $tosLink;
    /** @var string */
    public string $tosText;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}