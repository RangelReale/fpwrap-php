<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: github.com/RangelReale/fproto-wrap-std/uuid.proto

namespace Fproto_wrap;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>fproto_wrap.NullUUID</code>
 */
class NullUUID extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string value = 1;</code>
     */
    private $value = '';
    /**
     * Generated from protobuf field <code>bool valid = 2;</code>
     */
    private $valid = false;

    public function __construct() {
        \GPBMetadata\GithubCom\RangelReale\FprotoWrapStd\Uuid::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string value = 1;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>string value = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool valid = 2;</code>
     * @return bool
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * Generated from protobuf field <code>bool valid = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setValid($var)
    {
        GPBUtil::checkBool($var);
        $this->valid = $var;

        return $this;
    }

}

