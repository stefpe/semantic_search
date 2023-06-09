<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: config/contextionary.proto

namespace Contextionary;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>contextionary.VectorEntry</code>
 */
class VectorEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>float Entry = 1;</code>
     */
    protected $Entry = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $Entry
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Config\Contextionary::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>float Entry = 1;</code>
     * @return float
     */
    public function getEntry()
    {
        return $this->Entry;
    }

    /**
     * Generated from protobuf field <code>float Entry = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setEntry($var)
    {
        GPBUtil::checkFloat($var);
        $this->Entry = $var;

        return $this;
    }

}

