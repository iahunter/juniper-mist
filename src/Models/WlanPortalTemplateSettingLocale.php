<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WlanPortalTemplateSettingLocale extends BaseModel
{
    public string $authButtonAmazon;
    public string $authButtonAzure;
    public string $authButtonEmail;
    public string $authButtonFacebook;
    public string $authButtonGoogle;
    public string $authButtonMicrosoft;
    public string $authButtonPassphrase;
    public string $authButtonSms;
    public string $authButtonSponsor;
    public string $authLabel;
    public string $backLink;
    public string $companyError;
    public string $companyLabel;
    public string $emailAccessDomainError;
    public string $emailCancel;
    public string $emailCodeCancel;
    public string $emailCodeError;
    public string $emailCodeFieldLabel;
    public string $emailCodeMessage;
    public string $emailCodeSubmit;
    public string $emailCodeTitle;
    public string $emailError;
    public string $emailFieldLabel;
    public string $emailLabel;
    public string $emailMessage;
    public string $emailSubmit;
    public string $emailTitle;
    public string $field1Error;
    public string $field1Label;
    public string $field2Error;
    public string $field2Label;
    public string $field3Error;
    public string $field3Label;
    public string $field4Error;
    public string $field4Label;
    public string $marketingPolicyLink;
    public bool $marketingPolicyOptIn;
    public string $marketingPolicyOptInLabel;
    public string $marketingPolicyOptInText;
    public string $message;
    public string $nameError;
    public string $nameLabel;
    public string $optoutLabel;
    public string $pageTitle;
    public string $passphraseCancel;
    public string $passphraseError;
    public string $passphraseLabel;
    public string $passphraseMessage;
    public string $passphraseSubmit;
    public string $passphraseTitle;
    public string $privacyPolicyAcceptLabel;
    public string $privacyPolicyError;
    public string $privacyPolicyLink;
    public string $privacyPolicyText;
    public string $requiredFieldLabel;
    public string $signInLabel;
    public string $smsCarrierDefault;
    public string $smsCarrierError;
    public string $smsCarrierFieldLabel;
    public string $smsCodeCancel;
    public string $smsCodeError;
    public string $smsCodeFieldLabel;
    public string $smsCodeMessage;
    public string $smsCodeSubmit;
    public string $smsCodeTitle;
    public string $smsCountryFieldLabel;
    public string $smsCountryFormat;
    public string $smsHaveAccessCode;
    public string $smsMessageFormat;
    public string $smsNumberCancel;
    public string $smsNumberError;
    public string $smsNumberFieldLabel;
    public string $smsNumberFormat;
    public string $smsNumberMessage;
    public string $smsNumberSubmit;
    public string $smsNumberTitle;
    public string $smsUsernameFormat;
    public string $sponsorBackLink;
    public string $sponsorCancel;
    public string $sponsorEmail;
    public string $sponsorEmailError;
    public string $sponsorInfoApproved;
    public string $sponsorInfoDenied;
    public string $sponsorInfoPending;
    public string $sponsorName;
    public string $sponsorNameError;
    public string $sponsorNotePending;
    public string $sponsorRequestAccess;
    public string $sponsorStatusApproved;
    public string $sponsorStatusDenied;
    public string $sponsorStatusPending;
    public string $sponsorSubmit;
    public string $sponsorsError;
    public string $sponsorsFieldLabel;
    public string $tosAcceptLabel;
    public string $tosError;
    public string $tosLink;
    public string $tosText;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}