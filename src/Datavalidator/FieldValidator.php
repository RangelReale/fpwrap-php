<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: github.com/RangelReale/fproto-wrap-validator-stddata/datavalidator.proto

namespace Datavalidator;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>datavalidator.FieldValidator</code>
 */
class FieldValidator extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool ascii = 1;</code>
     */
    private $ascii = false;
    /**
     * Generated from protobuf field <code>bool alpha = 2;</code>
     */
    private $alpha = false;
    /**
     * Generated from protobuf field <code>bool alphanumeric = 3;</code>
     */
    private $alphanumeric = false;
    /**
     * Generated from protobuf field <code>bool base64 = 4;</code>
     */
    private $base64 = false;
    /**
     * Generated from protobuf field <code>bool cidr = 5;</code>
     */
    private $cidr = false;
    /**
     * Generated from protobuf field <code>bool creditcard = 6;</code>
     */
    private $creditcard = false;
    /**
     * Generated from protobuf field <code>bool dnsname = 7;</code>
     */
    private $dnsname = false;
    /**
     * Generated from protobuf field <code>bool datauri = 8;</code>
     */
    private $datauri = false;
    /**
     * Generated from protobuf field <code>bool dialstring = 9;</code>
     */
    private $dialstring = false;
    /**
     * Generated from protobuf field <code>bool email = 10;</code>
     */
    private $email = false;
    /**
     * Generated from protobuf field <code>bool hexadecimal = 11;</code>
     */
    private $hexadecimal = false;
    /**
     * Generated from protobuf field <code>bool hexcolor = 12;</code>
     */
    private $hexcolor = false;
    /**
     * Generated from protobuf field <code>bool host = 13;</code>
     */
    private $host = false;
    /**
     * Generated from protobuf field <code>bool ip = 14;</code>
     */
    private $ip = false;
    /**
     * Generated from protobuf field <code>bool ipv4 = 15;</code>
     */
    private $ipv4 = false;
    /**
     * Generated from protobuf field <code>bool ipv6 = 16;</code>
     */
    private $ipv6 = false;
    /**
     * Generated from protobuf field <code>bool isbn10 = 17;</code>
     */
    private $isbn10 = false;
    /**
     * Generated from protobuf field <code>bool isbn13 = 18;</code>
     */
    private $isbn13 = false;
    /**
     * Generated from protobuf field <code>bool iso3166alpha2 = 19;</code>
     */
    private $iso3166alpha2 = false;
    /**
     * Generated from protobuf field <code>bool iso3166alpha3 = 20;</code>
     */
    private $iso3166alpha3 = false;
    /**
     * Generated from protobuf field <code>bool iso693alpha2 = 21;</code>
     */
    private $iso693alpha2 = false;
    /**
     * Generated from protobuf field <code>bool iso693alpha3b = 22;</code>
     */
    private $iso693alpha3b = false;
    /**
     * Generated from protobuf field <code>bool iso4217 = 23;</code>
     */
    private $iso4217 = false;
    /**
     * Generated from protobuf field <code>bool json = 24;</code>
     */
    private $json = false;
    /**
     * Generated from protobuf field <code>bool latitude = 25;</code>
     */
    private $latitude = false;
    /**
     * Generated from protobuf field <code>bool longitude = 26;</code>
     */
    private $longitude = false;
    /**
     * Generated from protobuf field <code>bool lowercase = 27;</code>
     */
    private $lowercase = false;
    /**
     * Generated from protobuf field <code>bool mac = 28;</code>
     */
    private $mac = false;
    /**
     * Generated from protobuf field <code>bool mongoid = 29;</code>
     */
    private $mongoid = false;
    /**
     * Generated from protobuf field <code>bool multibyte = 30;</code>
     */
    private $multibyte = false;
    /**
     * Generated from protobuf field <code>bool null = 31;</code>
     */
    private $null = false;
    /**
     * Generated from protobuf field <code>bool numeric = 32;</code>
     */
    private $numeric = false;
    /**
     * Generated from protobuf field <code>bool port = 33;</code>
     */
    private $port = false;
    /**
     * Generated from protobuf field <code>bool printableascii = 34;</code>
     */
    private $printableascii = false;
    /**
     * Generated from protobuf field <code>bool rfc3339 = 35;</code>
     */
    private $rfc3339 = false;
    /**
     * Generated from protobuf field <code>bool rfc3339withoutzone = 36;</code>
     */
    private $rfc3339withoutzone = false;
    /**
     * Generated from protobuf field <code>bool rgbcolor = 37;</code>
     */
    private $rgbcolor = false;
    /**
     * Generated from protobuf field <code>bool requesturi = 38;</code>
     */
    private $requesturi = false;
    /**
     * Generated from protobuf field <code>bool requesturl = 39;</code>
     */
    private $requesturl = false;
    /**
     * Generated from protobuf field <code>bool ssn = 40;</code>
     */
    private $ssn = false;
    /**
     * Generated from protobuf field <code>bool semver = 41;</code>
     */
    private $semver = false;
    /**
     * Generated from protobuf field <code>bool url = 42;</code>
     */
    private $url = false;
    /**
     * Generated from protobuf field <code>bool utfdugit = 43;</code>
     */
    private $utfdugit = false;
    /**
     * Generated from protobuf field <code>bool utfletter = 44;</code>
     */
    private $utfletter = false;
    /**
     * Generated from protobuf field <code>bool utfletternumeric = 45;</code>
     */
    private $utfletternumeric = false;
    /**
     * Generated from protobuf field <code>bool utfnumeric = 46;</code>
     */
    private $utfnumeric = false;
    /**
     * Generated from protobuf field <code>bool uuid = 47;</code>
     */
    private $uuid = false;
    /**
     * Generated from protobuf field <code>bool uuidv3 = 48;</code>
     */
    private $uuidv3 = false;
    /**
     * Generated from protobuf field <code>bool uuidv4 = 49;</code>
     */
    private $uuidv4 = false;
    /**
     * Generated from protobuf field <code>bool uuidv5 = 50;</code>
     */
    private $uuidv5 = false;
    /**
     * Generated from protobuf field <code>bool uppercase = 51;</code>
     */
    private $uppercase = false;
    /**
     * Generated from protobuf field <code>bool variablewidth = 52;</code>
     */
    private $variablewidth = false;

    public function __construct() {
        \GPBMetadata\GithubCom\RangelReale\FprotoWrapValidatorStddata\Datavalidator::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>bool ascii = 1;</code>
     * @return bool
     */
    public function getAscii()
    {
        return $this->ascii;
    }

    /**
     * Generated from protobuf field <code>bool ascii = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setAscii($var)
    {
        GPBUtil::checkBool($var);
        $this->ascii = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool alpha = 2;</code>
     * @return bool
     */
    public function getAlpha()
    {
        return $this->alpha;
    }

    /**
     * Generated from protobuf field <code>bool alpha = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setAlpha($var)
    {
        GPBUtil::checkBool($var);
        $this->alpha = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool alphanumeric = 3;</code>
     * @return bool
     */
    public function getAlphanumeric()
    {
        return $this->alphanumeric;
    }

    /**
     * Generated from protobuf field <code>bool alphanumeric = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setAlphanumeric($var)
    {
        GPBUtil::checkBool($var);
        $this->alphanumeric = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool base64 = 4;</code>
     * @return bool
     */
    public function getBase64()
    {
        return $this->base64;
    }

    /**
     * Generated from protobuf field <code>bool base64 = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setBase64($var)
    {
        GPBUtil::checkBool($var);
        $this->base64 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool cidr = 5;</code>
     * @return bool
     */
    public function getCidr()
    {
        return $this->cidr;
    }

    /**
     * Generated from protobuf field <code>bool cidr = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setCidr($var)
    {
        GPBUtil::checkBool($var);
        $this->cidr = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool creditcard = 6;</code>
     * @return bool
     */
    public function getCreditcard()
    {
        return $this->creditcard;
    }

    /**
     * Generated from protobuf field <code>bool creditcard = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setCreditcard($var)
    {
        GPBUtil::checkBool($var);
        $this->creditcard = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool dnsname = 7;</code>
     * @return bool
     */
    public function getDnsname()
    {
        return $this->dnsname;
    }

    /**
     * Generated from protobuf field <code>bool dnsname = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setDnsname($var)
    {
        GPBUtil::checkBool($var);
        $this->dnsname = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool datauri = 8;</code>
     * @return bool
     */
    public function getDatauri()
    {
        return $this->datauri;
    }

    /**
     * Generated from protobuf field <code>bool datauri = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setDatauri($var)
    {
        GPBUtil::checkBool($var);
        $this->datauri = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool dialstring = 9;</code>
     * @return bool
     */
    public function getDialstring()
    {
        return $this->dialstring;
    }

    /**
     * Generated from protobuf field <code>bool dialstring = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setDialstring($var)
    {
        GPBUtil::checkBool($var);
        $this->dialstring = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool email = 10;</code>
     * @return bool
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Generated from protobuf field <code>bool email = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkBool($var);
        $this->email = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool hexadecimal = 11;</code>
     * @return bool
     */
    public function getHexadecimal()
    {
        return $this->hexadecimal;
    }

    /**
     * Generated from protobuf field <code>bool hexadecimal = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setHexadecimal($var)
    {
        GPBUtil::checkBool($var);
        $this->hexadecimal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool hexcolor = 12;</code>
     * @return bool
     */
    public function getHexcolor()
    {
        return $this->hexcolor;
    }

    /**
     * Generated from protobuf field <code>bool hexcolor = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setHexcolor($var)
    {
        GPBUtil::checkBool($var);
        $this->hexcolor = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool host = 13;</code>
     * @return bool
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Generated from protobuf field <code>bool host = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setHost($var)
    {
        GPBUtil::checkBool($var);
        $this->host = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool ip = 14;</code>
     * @return bool
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Generated from protobuf field <code>bool ip = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setIp($var)
    {
        GPBUtil::checkBool($var);
        $this->ip = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool ipv4 = 15;</code>
     * @return bool
     */
    public function getIpv4()
    {
        return $this->ipv4;
    }

    /**
     * Generated from protobuf field <code>bool ipv4 = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setIpv4($var)
    {
        GPBUtil::checkBool($var);
        $this->ipv4 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool ipv6 = 16;</code>
     * @return bool
     */
    public function getIpv6()
    {
        return $this->ipv6;
    }

    /**
     * Generated from protobuf field <code>bool ipv6 = 16;</code>
     * @param bool $var
     * @return $this
     */
    public function setIpv6($var)
    {
        GPBUtil::checkBool($var);
        $this->ipv6 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool isbn10 = 17;</code>
     * @return bool
     */
    public function getIsbn10()
    {
        return $this->isbn10;
    }

    /**
     * Generated from protobuf field <code>bool isbn10 = 17;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsbn10($var)
    {
        GPBUtil::checkBool($var);
        $this->isbn10 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool isbn13 = 18;</code>
     * @return bool
     */
    public function getIsbn13()
    {
        return $this->isbn13;
    }

    /**
     * Generated from protobuf field <code>bool isbn13 = 18;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsbn13($var)
    {
        GPBUtil::checkBool($var);
        $this->isbn13 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool iso3166alpha2 = 19;</code>
     * @return bool
     */
    public function getIso3166Alpha2()
    {
        return $this->iso3166alpha2;
    }

    /**
     * Generated from protobuf field <code>bool iso3166alpha2 = 19;</code>
     * @param bool $var
     * @return $this
     */
    public function setIso3166Alpha2($var)
    {
        GPBUtil::checkBool($var);
        $this->iso3166alpha2 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool iso3166alpha3 = 20;</code>
     * @return bool
     */
    public function getIso3166Alpha3()
    {
        return $this->iso3166alpha3;
    }

    /**
     * Generated from protobuf field <code>bool iso3166alpha3 = 20;</code>
     * @param bool $var
     * @return $this
     */
    public function setIso3166Alpha3($var)
    {
        GPBUtil::checkBool($var);
        $this->iso3166alpha3 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool iso693alpha2 = 21;</code>
     * @return bool
     */
    public function getIso693Alpha2()
    {
        return $this->iso693alpha2;
    }

    /**
     * Generated from protobuf field <code>bool iso693alpha2 = 21;</code>
     * @param bool $var
     * @return $this
     */
    public function setIso693Alpha2($var)
    {
        GPBUtil::checkBool($var);
        $this->iso693alpha2 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool iso693alpha3b = 22;</code>
     * @return bool
     */
    public function getIso693Alpha3B()
    {
        return $this->iso693alpha3b;
    }

    /**
     * Generated from protobuf field <code>bool iso693alpha3b = 22;</code>
     * @param bool $var
     * @return $this
     */
    public function setIso693Alpha3B($var)
    {
        GPBUtil::checkBool($var);
        $this->iso693alpha3b = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool iso4217 = 23;</code>
     * @return bool
     */
    public function getIso4217()
    {
        return $this->iso4217;
    }

    /**
     * Generated from protobuf field <code>bool iso4217 = 23;</code>
     * @param bool $var
     * @return $this
     */
    public function setIso4217($var)
    {
        GPBUtil::checkBool($var);
        $this->iso4217 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool json = 24;</code>
     * @return bool
     */
    public function getJson()
    {
        return $this->json;
    }

    /**
     * Generated from protobuf field <code>bool json = 24;</code>
     * @param bool $var
     * @return $this
     */
    public function setJson($var)
    {
        GPBUtil::checkBool($var);
        $this->json = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool latitude = 25;</code>
     * @return bool
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Generated from protobuf field <code>bool latitude = 25;</code>
     * @param bool $var
     * @return $this
     */
    public function setLatitude($var)
    {
        GPBUtil::checkBool($var);
        $this->latitude = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool longitude = 26;</code>
     * @return bool
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Generated from protobuf field <code>bool longitude = 26;</code>
     * @param bool $var
     * @return $this
     */
    public function setLongitude($var)
    {
        GPBUtil::checkBool($var);
        $this->longitude = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool lowercase = 27;</code>
     * @return bool
     */
    public function getLowercase()
    {
        return $this->lowercase;
    }

    /**
     * Generated from protobuf field <code>bool lowercase = 27;</code>
     * @param bool $var
     * @return $this
     */
    public function setLowercase($var)
    {
        GPBUtil::checkBool($var);
        $this->lowercase = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool mac = 28;</code>
     * @return bool
     */
    public function getMac()
    {
        return $this->mac;
    }

    /**
     * Generated from protobuf field <code>bool mac = 28;</code>
     * @param bool $var
     * @return $this
     */
    public function setMac($var)
    {
        GPBUtil::checkBool($var);
        $this->mac = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool mongoid = 29;</code>
     * @return bool
     */
    public function getMongoid()
    {
        return $this->mongoid;
    }

    /**
     * Generated from protobuf field <code>bool mongoid = 29;</code>
     * @param bool $var
     * @return $this
     */
    public function setMongoid($var)
    {
        GPBUtil::checkBool($var);
        $this->mongoid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool multibyte = 30;</code>
     * @return bool
     */
    public function getMultibyte()
    {
        return $this->multibyte;
    }

    /**
     * Generated from protobuf field <code>bool multibyte = 30;</code>
     * @param bool $var
     * @return $this
     */
    public function setMultibyte($var)
    {
        GPBUtil::checkBool($var);
        $this->multibyte = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool null = 31;</code>
     * @return bool
     */
    public function getNull()
    {
        return $this->null;
    }

    /**
     * Generated from protobuf field <code>bool null = 31;</code>
     * @param bool $var
     * @return $this
     */
    public function setNull($var)
    {
        GPBUtil::checkBool($var);
        $this->null = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool numeric = 32;</code>
     * @return bool
     */
    public function getNumeric()
    {
        return $this->numeric;
    }

    /**
     * Generated from protobuf field <code>bool numeric = 32;</code>
     * @param bool $var
     * @return $this
     */
    public function setNumeric($var)
    {
        GPBUtil::checkBool($var);
        $this->numeric = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool port = 33;</code>
     * @return bool
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Generated from protobuf field <code>bool port = 33;</code>
     * @param bool $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkBool($var);
        $this->port = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool printableascii = 34;</code>
     * @return bool
     */
    public function getPrintableascii()
    {
        return $this->printableascii;
    }

    /**
     * Generated from protobuf field <code>bool printableascii = 34;</code>
     * @param bool $var
     * @return $this
     */
    public function setPrintableascii($var)
    {
        GPBUtil::checkBool($var);
        $this->printableascii = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool rfc3339 = 35;</code>
     * @return bool
     */
    public function getRfc3339()
    {
        return $this->rfc3339;
    }

    /**
     * Generated from protobuf field <code>bool rfc3339 = 35;</code>
     * @param bool $var
     * @return $this
     */
    public function setRfc3339($var)
    {
        GPBUtil::checkBool($var);
        $this->rfc3339 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool rfc3339withoutzone = 36;</code>
     * @return bool
     */
    public function getRfc3339Withoutzone()
    {
        return $this->rfc3339withoutzone;
    }

    /**
     * Generated from protobuf field <code>bool rfc3339withoutzone = 36;</code>
     * @param bool $var
     * @return $this
     */
    public function setRfc3339Withoutzone($var)
    {
        GPBUtil::checkBool($var);
        $this->rfc3339withoutzone = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool rgbcolor = 37;</code>
     * @return bool
     */
    public function getRgbcolor()
    {
        return $this->rgbcolor;
    }

    /**
     * Generated from protobuf field <code>bool rgbcolor = 37;</code>
     * @param bool $var
     * @return $this
     */
    public function setRgbcolor($var)
    {
        GPBUtil::checkBool($var);
        $this->rgbcolor = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool requesturi = 38;</code>
     * @return bool
     */
    public function getRequesturi()
    {
        return $this->requesturi;
    }

    /**
     * Generated from protobuf field <code>bool requesturi = 38;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequesturi($var)
    {
        GPBUtil::checkBool($var);
        $this->requesturi = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool requesturl = 39;</code>
     * @return bool
     */
    public function getRequesturl()
    {
        return $this->requesturl;
    }

    /**
     * Generated from protobuf field <code>bool requesturl = 39;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequesturl($var)
    {
        GPBUtil::checkBool($var);
        $this->requesturl = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool ssn = 40;</code>
     * @return bool
     */
    public function getSsn()
    {
        return $this->ssn;
    }

    /**
     * Generated from protobuf field <code>bool ssn = 40;</code>
     * @param bool $var
     * @return $this
     */
    public function setSsn($var)
    {
        GPBUtil::checkBool($var);
        $this->ssn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool semver = 41;</code>
     * @return bool
     */
    public function getSemver()
    {
        return $this->semver;
    }

    /**
     * Generated from protobuf field <code>bool semver = 41;</code>
     * @param bool $var
     * @return $this
     */
    public function setSemver($var)
    {
        GPBUtil::checkBool($var);
        $this->semver = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool url = 42;</code>
     * @return bool
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Generated from protobuf field <code>bool url = 42;</code>
     * @param bool $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkBool($var);
        $this->url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool utfdugit = 43;</code>
     * @return bool
     */
    public function getUtfdugit()
    {
        return $this->utfdugit;
    }

    /**
     * Generated from protobuf field <code>bool utfdugit = 43;</code>
     * @param bool $var
     * @return $this
     */
    public function setUtfdugit($var)
    {
        GPBUtil::checkBool($var);
        $this->utfdugit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool utfletter = 44;</code>
     * @return bool
     */
    public function getUtfletter()
    {
        return $this->utfletter;
    }

    /**
     * Generated from protobuf field <code>bool utfletter = 44;</code>
     * @param bool $var
     * @return $this
     */
    public function setUtfletter($var)
    {
        GPBUtil::checkBool($var);
        $this->utfletter = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool utfletternumeric = 45;</code>
     * @return bool
     */
    public function getUtfletternumeric()
    {
        return $this->utfletternumeric;
    }

    /**
     * Generated from protobuf field <code>bool utfletternumeric = 45;</code>
     * @param bool $var
     * @return $this
     */
    public function setUtfletternumeric($var)
    {
        GPBUtil::checkBool($var);
        $this->utfletternumeric = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool utfnumeric = 46;</code>
     * @return bool
     */
    public function getUtfnumeric()
    {
        return $this->utfnumeric;
    }

    /**
     * Generated from protobuf field <code>bool utfnumeric = 46;</code>
     * @param bool $var
     * @return $this
     */
    public function setUtfnumeric($var)
    {
        GPBUtil::checkBool($var);
        $this->utfnumeric = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool uuid = 47;</code>
     * @return bool
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Generated from protobuf field <code>bool uuid = 47;</code>
     * @param bool $var
     * @return $this
     */
    public function setUuid($var)
    {
        GPBUtil::checkBool($var);
        $this->uuid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool uuidv3 = 48;</code>
     * @return bool
     */
    public function getUuidv3()
    {
        return $this->uuidv3;
    }

    /**
     * Generated from protobuf field <code>bool uuidv3 = 48;</code>
     * @param bool $var
     * @return $this
     */
    public function setUuidv3($var)
    {
        GPBUtil::checkBool($var);
        $this->uuidv3 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool uuidv4 = 49;</code>
     * @return bool
     */
    public function getUuidv4()
    {
        return $this->uuidv4;
    }

    /**
     * Generated from protobuf field <code>bool uuidv4 = 49;</code>
     * @param bool $var
     * @return $this
     */
    public function setUuidv4($var)
    {
        GPBUtil::checkBool($var);
        $this->uuidv4 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool uuidv5 = 50;</code>
     * @return bool
     */
    public function getUuidv5()
    {
        return $this->uuidv5;
    }

    /**
     * Generated from protobuf field <code>bool uuidv5 = 50;</code>
     * @param bool $var
     * @return $this
     */
    public function setUuidv5($var)
    {
        GPBUtil::checkBool($var);
        $this->uuidv5 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool uppercase = 51;</code>
     * @return bool
     */
    public function getUppercase()
    {
        return $this->uppercase;
    }

    /**
     * Generated from protobuf field <code>bool uppercase = 51;</code>
     * @param bool $var
     * @return $this
     */
    public function setUppercase($var)
    {
        GPBUtil::checkBool($var);
        $this->uppercase = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool variablewidth = 52;</code>
     * @return bool
     */
    public function getVariablewidth()
    {
        return $this->variablewidth;
    }

    /**
     * Generated from protobuf field <code>bool variablewidth = 52;</code>
     * @param bool $var
     * @return $this
     */
    public function setVariablewidth($var)
    {
        GPBUtil::checkBool($var);
        $this->variablewidth = $var;

        return $this;
    }

}
