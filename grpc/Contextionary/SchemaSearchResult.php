<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: config/contextionary.proto

namespace Contextionary;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>contextionary.SchemaSearchResult</code>
 */
class SchemaSearchResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>float certainty = 3;</code>
     */
    protected $certainty = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type float $certainty
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Config\Contextionary::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float certainty = 3;</code>
     * @return float
     */
    public function getCertainty()
    {
        return $this->certainty;
    }

    /**
     * Generated from protobuf field <code>float certainty = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setCertainty($var)
    {
        GPBUtil::checkFloat($var);
        $this->certainty = $var;

        return $this;
    }

}

