<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: config/contextionary.proto

namespace Contextionary;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>contextionary.WordPresent</code>
 */
class WordPresent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool present = 1;</code>
     */
    protected $present = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $present
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Config\Contextionary::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool present = 1;</code>
     * @return bool
     */
    public function getPresent()
    {
        return $this->present;
    }

    /**
     * Generated from protobuf field <code>bool present = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setPresent($var)
    {
        GPBUtil::checkBool($var);
        $this->present = $var;

        return $this;
    }

}

