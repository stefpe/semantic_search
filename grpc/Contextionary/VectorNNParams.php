<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: config/contextionary.proto

namespace Contextionary;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>contextionary.VectorNNParams</code>
 */
class VectorNNParams extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.contextionary.Vector vector = 1;</code>
     */
    protected $vector = null;
    /**
     * Generated from protobuf field <code>int32 k = 2;</code>
     */
    protected $k = 0;
    /**
     * Generated from protobuf field <code>int32 n = 3;</code>
     */
    protected $n = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Contextionary\Vector $vector
     *     @type int $k
     *     @type int $n
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Config\Contextionary::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.contextionary.Vector vector = 1;</code>
     * @return \Contextionary\Vector|null
     */
    public function getVector()
    {
        return $this->vector;
    }

    public function hasVector()
    {
        return isset($this->vector);
    }

    public function clearVector()
    {
        unset($this->vector);
    }

    /**
     * Generated from protobuf field <code>.contextionary.Vector vector = 1;</code>
     * @param \Contextionary\Vector $var
     * @return $this
     */
    public function setVector($var)
    {
        GPBUtil::checkMessage($var, \Contextionary\Vector::class);
        $this->vector = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 k = 2;</code>
     * @return int
     */
    public function getK()
    {
        return $this->k;
    }

    /**
     * Generated from protobuf field <code>int32 k = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setK($var)
    {
        GPBUtil::checkInt32($var);
        $this->k = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 n = 3;</code>
     * @return int
     */
    public function getN()
    {
        return $this->n;
    }

    /**
     * Generated from protobuf field <code>int32 n = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setN($var)
    {
        GPBUtil::checkInt32($var);
        $this->n = $var;

        return $this;
    }

}
