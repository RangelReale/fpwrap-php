<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: github.com/RangelReale/fproto-wrap-validator-std/validator.proto

namespace Validator;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Field validator. In the case of repeated or map, there rules apply to EACH item, not to the repeated field itself.
 * For the repeated field itself rules, see RepeatedFieldValidator.
 *
 * Generated from protobuf message <code>validator.FieldValidator</code>
 */
class FieldValidator extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether the field is required.
     *
     * Generated from protobuf field <code>bool required = 1;</code>
     */
    private $required = false;
    /**
     * Uses a Golang RE2-syntax regex to match the field contents.
     *
     * Generated from protobuf field <code>string regex = 2;</code>
     */
    private $regex = '';
    /**
     * Only allow the exact string value.
     *
     * Generated from protobuf field <code>string string_eq = 20;</code>
     */
    private $string_eq = '';
    /**
     * Field value of integer strictly greater than this value.
     *
     * Generated from protobuf field <code>int64 int_gt = 30;</code>
     */
    private $int_gt = 0;
    /**
     * Field value of integer strictly smaller than this value.
     *
     * Generated from protobuf field <code>int64 int_lt = 31;</code>
     */
    private $int_lt = 0;
    /**
     * Field value of integer strictly greater than this value.
     *
     * Generated from protobuf field <code>int64 int_gte = 32;</code>
     */
    private $int_gte = 0;
    /**
     * Field value of integer strictly smaller than this value.
     *
     * Generated from protobuf field <code>int64 int_lte = 33;</code>
     */
    private $int_lte = 0;
    /**
     * Field value of integer exactly this value.
     *
     * Generated from protobuf field <code>int64 int_eq = 34;</code>
     */
    private $int_eq = 0;
    /**
     * In the case of enums, only allow defined values, else ignored.
     *
     * Generated from protobuf field <code>bool int_enum_check = 70;</code>
     */
    private $int_enum_check = false;
    /**
     * Field value of double strictly greater than this value.
     * Note that this value can only take on a valid floating point
     * value. Use together with float_epsilon if you need something more specific.
     *
     * Generated from protobuf field <code>double float_gt = 40;</code>
     */
    private $float_gt = 0.0;
    /**
     * Field value of double strictly smaller than this value.
     * Note that this value can only take on a valid floating point
     * value. Use together with float_epsilon if you need something more specific.
     *
     * Generated from protobuf field <code>double float_lt = 41;</code>
     */
    private $float_lt = 0.0;
    /**
     * Field value of double describing the epsilon within which
     * any comparison should be considered to be true. For example,
     * when using float_gt = 0.35, using a float_epsilon of 0.05
     * would mean that any value above 0.30 is acceptable. It can be
     * thought of as a {float_value_condition} +- {float_epsilon}.
     * If unset, no correction for floating point inaccuracies in
     * comparisons will be attempted.
     *
     * Generated from protobuf field <code>double float_epsilon = 42;</code>
     */
    private $float_epsilon = 0.0;
    /**
     * Floating-point value compared to which the field content should be greater or equal.
     *
     * Generated from protobuf field <code>double float_gte = 43;</code>
     */
    private $float_gte = 0.0;
    /**
     * Floating-point value compared to which the field content should be smaller or equal.
     *
     * Generated from protobuf field <code>double float_lte = 44;</code>
     */
    private $float_lte = 0.0;
    /**
     * Floating-point value compared to which the field content should be equal or whithin the epsilon.
     *
     * Generated from protobuf field <code>double float_eq = 45;</code>
     */
    private $float_eq = 0.0;
    /**
     * Field value of length greater than this value.
     *
     * Generated from protobuf field <code>int64 length_gt = 50;</code>
     */
    private $length_gt = 0;
    /**
     * Field value of length smaller than this value.
     *
     * Generated from protobuf field <code>int64 length_lt = 51;</code>
     */
    private $length_lt = 0;
    /**
     * Field value of length greater than this value.
     *
     * Generated from protobuf field <code>int64 length_gte = 52;</code>
     */
    private $length_gte = 0;
    /**
     * Field value of length smaller than this value.
     *
     * Generated from protobuf field <code>int64 length_lte = 53;</code>
     */
    private $length_lte = 0;
    /**
     * Field value of integer strictly equal this value.
     *
     * Generated from protobuf field <code>int64 length_eq = 54;</code>
     */
    private $length_eq = 0;
    /**
     * Generated from protobuf field <code>bool bool_eq = 60;</code>
     */
    private $bool_eq = false;

    public function __construct() {
        \GPBMetadata\GithubCom\RangelReale\FprotoWrapValidatorStd\Validator::initOnce();
        parent::__construct();
    }

    /**
     * Whether the field is required.
     *
     * Generated from protobuf field <code>bool required = 1;</code>
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Whether the field is required.
     *
     * Generated from protobuf field <code>bool required = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequired($var)
    {
        GPBUtil::checkBool($var);
        $this->required = $var;

        return $this;
    }

    /**
     * Uses a Golang RE2-syntax regex to match the field contents.
     *
     * Generated from protobuf field <code>string regex = 2;</code>
     * @return string
     */
    public function getRegex()
    {
        return $this->regex;
    }

    /**
     * Uses a Golang RE2-syntax regex to match the field contents.
     *
     * Generated from protobuf field <code>string regex = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRegex($var)
    {
        GPBUtil::checkString($var, True);
        $this->regex = $var;

        return $this;
    }

    /**
     * Only allow the exact string value.
     *
     * Generated from protobuf field <code>string string_eq = 20;</code>
     * @return string
     */
    public function getStringEq()
    {
        return $this->string_eq;
    }

    /**
     * Only allow the exact string value.
     *
     * Generated from protobuf field <code>string string_eq = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setStringEq($var)
    {
        GPBUtil::checkString($var, True);
        $this->string_eq = $var;

        return $this;
    }

    /**
     * Field value of integer strictly greater than this value.
     *
     * Generated from protobuf field <code>int64 int_gt = 30;</code>
     * @return int|string
     */
    public function getIntGt()
    {
        return $this->int_gt;
    }

    /**
     * Field value of integer strictly greater than this value.
     *
     * Generated from protobuf field <code>int64 int_gt = 30;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIntGt($var)
    {
        GPBUtil::checkInt64($var);
        $this->int_gt = $var;

        return $this;
    }

    /**
     * Field value of integer strictly smaller than this value.
     *
     * Generated from protobuf field <code>int64 int_lt = 31;</code>
     * @return int|string
     */
    public function getIntLt()
    {
        return $this->int_lt;
    }

    /**
     * Field value of integer strictly smaller than this value.
     *
     * Generated from protobuf field <code>int64 int_lt = 31;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIntLt($var)
    {
        GPBUtil::checkInt64($var);
        $this->int_lt = $var;

        return $this;
    }

    /**
     * Field value of integer strictly greater than this value.
     *
     * Generated from protobuf field <code>int64 int_gte = 32;</code>
     * @return int|string
     */
    public function getIntGte()
    {
        return $this->int_gte;
    }

    /**
     * Field value of integer strictly greater than this value.
     *
     * Generated from protobuf field <code>int64 int_gte = 32;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIntGte($var)
    {
        GPBUtil::checkInt64($var);
        $this->int_gte = $var;

        return $this;
    }

    /**
     * Field value of integer strictly smaller than this value.
     *
     * Generated from protobuf field <code>int64 int_lte = 33;</code>
     * @return int|string
     */
    public function getIntLte()
    {
        return $this->int_lte;
    }

    /**
     * Field value of integer strictly smaller than this value.
     *
     * Generated from protobuf field <code>int64 int_lte = 33;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIntLte($var)
    {
        GPBUtil::checkInt64($var);
        $this->int_lte = $var;

        return $this;
    }

    /**
     * Field value of integer exactly this value.
     *
     * Generated from protobuf field <code>int64 int_eq = 34;</code>
     * @return int|string
     */
    public function getIntEq()
    {
        return $this->int_eq;
    }

    /**
     * Field value of integer exactly this value.
     *
     * Generated from protobuf field <code>int64 int_eq = 34;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIntEq($var)
    {
        GPBUtil::checkInt64($var);
        $this->int_eq = $var;

        return $this;
    }

    /**
     * In the case of enums, only allow defined values, else ignored.
     *
     * Generated from protobuf field <code>bool int_enum_check = 70;</code>
     * @return bool
     */
    public function getIntEnumCheck()
    {
        return $this->int_enum_check;
    }

    /**
     * In the case of enums, only allow defined values, else ignored.
     *
     * Generated from protobuf field <code>bool int_enum_check = 70;</code>
     * @param bool $var
     * @return $this
     */
    public function setIntEnumCheck($var)
    {
        GPBUtil::checkBool($var);
        $this->int_enum_check = $var;

        return $this;
    }

    /**
     * Field value of double strictly greater than this value.
     * Note that this value can only take on a valid floating point
     * value. Use together with float_epsilon if you need something more specific.
     *
     * Generated from protobuf field <code>double float_gt = 40;</code>
     * @return float
     */
    public function getFloatGt()
    {
        return $this->float_gt;
    }

    /**
     * Field value of double strictly greater than this value.
     * Note that this value can only take on a valid floating point
     * value. Use together with float_epsilon if you need something more specific.
     *
     * Generated from protobuf field <code>double float_gt = 40;</code>
     * @param float $var
     * @return $this
     */
    public function setFloatGt($var)
    {
        GPBUtil::checkDouble($var);
        $this->float_gt = $var;

        return $this;
    }

    /**
     * Field value of double strictly smaller than this value.
     * Note that this value can only take on a valid floating point
     * value. Use together with float_epsilon if you need something more specific.
     *
     * Generated from protobuf field <code>double float_lt = 41;</code>
     * @return float
     */
    public function getFloatLt()
    {
        return $this->float_lt;
    }

    /**
     * Field value of double strictly smaller than this value.
     * Note that this value can only take on a valid floating point
     * value. Use together with float_epsilon if you need something more specific.
     *
     * Generated from protobuf field <code>double float_lt = 41;</code>
     * @param float $var
     * @return $this
     */
    public function setFloatLt($var)
    {
        GPBUtil::checkDouble($var);
        $this->float_lt = $var;

        return $this;
    }

    /**
     * Field value of double describing the epsilon within which
     * any comparison should be considered to be true. For example,
     * when using float_gt = 0.35, using a float_epsilon of 0.05
     * would mean that any value above 0.30 is acceptable. It can be
     * thought of as a {float_value_condition} +- {float_epsilon}.
     * If unset, no correction for floating point inaccuracies in
     * comparisons will be attempted.
     *
     * Generated from protobuf field <code>double float_epsilon = 42;</code>
     * @return float
     */
    public function getFloatEpsilon()
    {
        return $this->float_epsilon;
    }

    /**
     * Field value of double describing the epsilon within which
     * any comparison should be considered to be true. For example,
     * when using float_gt = 0.35, using a float_epsilon of 0.05
     * would mean that any value above 0.30 is acceptable. It can be
     * thought of as a {float_value_condition} +- {float_epsilon}.
     * If unset, no correction for floating point inaccuracies in
     * comparisons will be attempted.
     *
     * Generated from protobuf field <code>double float_epsilon = 42;</code>
     * @param float $var
     * @return $this
     */
    public function setFloatEpsilon($var)
    {
        GPBUtil::checkDouble($var);
        $this->float_epsilon = $var;

        return $this;
    }

    /**
     * Floating-point value compared to which the field content should be greater or equal.
     *
     * Generated from protobuf field <code>double float_gte = 43;</code>
     * @return float
     */
    public function getFloatGte()
    {
        return $this->float_gte;
    }

    /**
     * Floating-point value compared to which the field content should be greater or equal.
     *
     * Generated from protobuf field <code>double float_gte = 43;</code>
     * @param float $var
     * @return $this
     */
    public function setFloatGte($var)
    {
        GPBUtil::checkDouble($var);
        $this->float_gte = $var;

        return $this;
    }

    /**
     * Floating-point value compared to which the field content should be smaller or equal.
     *
     * Generated from protobuf field <code>double float_lte = 44;</code>
     * @return float
     */
    public function getFloatLte()
    {
        return $this->float_lte;
    }

    /**
     * Floating-point value compared to which the field content should be smaller or equal.
     *
     * Generated from protobuf field <code>double float_lte = 44;</code>
     * @param float $var
     * @return $this
     */
    public function setFloatLte($var)
    {
        GPBUtil::checkDouble($var);
        $this->float_lte = $var;

        return $this;
    }

    /**
     * Floating-point value compared to which the field content should be equal or whithin the epsilon.
     *
     * Generated from protobuf field <code>double float_eq = 45;</code>
     * @return float
     */
    public function getFloatEq()
    {
        return $this->float_eq;
    }

    /**
     * Floating-point value compared to which the field content should be equal or whithin the epsilon.
     *
     * Generated from protobuf field <code>double float_eq = 45;</code>
     * @param float $var
     * @return $this
     */
    public function setFloatEq($var)
    {
        GPBUtil::checkDouble($var);
        $this->float_eq = $var;

        return $this;
    }

    /**
     * Field value of length greater than this value.
     *
     * Generated from protobuf field <code>int64 length_gt = 50;</code>
     * @return int|string
     */
    public function getLengthGt()
    {
        return $this->length_gt;
    }

    /**
     * Field value of length greater than this value.
     *
     * Generated from protobuf field <code>int64 length_gt = 50;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLengthGt($var)
    {
        GPBUtil::checkInt64($var);
        $this->length_gt = $var;

        return $this;
    }

    /**
     * Field value of length smaller than this value.
     *
     * Generated from protobuf field <code>int64 length_lt = 51;</code>
     * @return int|string
     */
    public function getLengthLt()
    {
        return $this->length_lt;
    }

    /**
     * Field value of length smaller than this value.
     *
     * Generated from protobuf field <code>int64 length_lt = 51;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLengthLt($var)
    {
        GPBUtil::checkInt64($var);
        $this->length_lt = $var;

        return $this;
    }

    /**
     * Field value of length greater than this value.
     *
     * Generated from protobuf field <code>int64 length_gte = 52;</code>
     * @return int|string
     */
    public function getLengthGte()
    {
        return $this->length_gte;
    }

    /**
     * Field value of length greater than this value.
     *
     * Generated from protobuf field <code>int64 length_gte = 52;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLengthGte($var)
    {
        GPBUtil::checkInt64($var);
        $this->length_gte = $var;

        return $this;
    }

    /**
     * Field value of length smaller than this value.
     *
     * Generated from protobuf field <code>int64 length_lte = 53;</code>
     * @return int|string
     */
    public function getLengthLte()
    {
        return $this->length_lte;
    }

    /**
     * Field value of length smaller than this value.
     *
     * Generated from protobuf field <code>int64 length_lte = 53;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLengthLte($var)
    {
        GPBUtil::checkInt64($var);
        $this->length_lte = $var;

        return $this;
    }

    /**
     * Field value of integer strictly equal this value.
     *
     * Generated from protobuf field <code>int64 length_eq = 54;</code>
     * @return int|string
     */
    public function getLengthEq()
    {
        return $this->length_eq;
    }

    /**
     * Field value of integer strictly equal this value.
     *
     * Generated from protobuf field <code>int64 length_eq = 54;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLengthEq($var)
    {
        GPBUtil::checkInt64($var);
        $this->length_eq = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool bool_eq = 60;</code>
     * @return bool
     */
    public function getBoolEq()
    {
        return $this->bool_eq;
    }

    /**
     * Generated from protobuf field <code>bool bool_eq = 60;</code>
     * @param bool $var
     * @return $this
     */
    public function setBoolEq($var)
    {
        GPBUtil::checkBool($var);
        $this->bool_eq = $var;

        return $this;
    }

}

