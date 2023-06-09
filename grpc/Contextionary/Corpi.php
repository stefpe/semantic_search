<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: config/contextionary.proto

namespace Contextionary;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>contextionary.Corpi</code>
 */
class Corpi extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string corpi = 1;</code>
     */
    private $corpi;
    /**
     * Generated from protobuf field <code>repeated .contextionary.Override overrides = 2;</code>
     */
    private $overrides;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $corpi
     *     @type array<\Contextionary\Override>|\Google\Protobuf\Internal\RepeatedField $overrides
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Config\Contextionary::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string corpi = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCorpi()
    {
        return $this->corpi;
    }

    /**
     * Generated from protobuf field <code>repeated string corpi = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCorpi($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->corpi = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .contextionary.Override overrides = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOverrides()
    {
        return $this->overrides;
    }

    /**
     * Generated from protobuf field <code>repeated .contextionary.Override overrides = 2;</code>
     * @param array<\Contextionary\Override>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOverrides($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Contextionary\Override::class);
        $this->overrides = $arr;

        return $this;
    }

}

