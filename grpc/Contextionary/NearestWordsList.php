<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: config/contextionary.proto

namespace Contextionary;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>contextionary.NearestWordsList</code>
 */
class NearestWordsList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .contextionary.NearestWords words = 1;</code>
     */
    private $words;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Contextionary\NearestWords>|\Google\Protobuf\Internal\RepeatedField $words
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Config\Contextionary::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .contextionary.NearestWords words = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWords()
    {
        return $this->words;
    }

    /**
     * Generated from protobuf field <code>repeated .contextionary.NearestWords words = 1;</code>
     * @param array<\Contextionary\NearestWords>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWords($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Contextionary\NearestWords::class);
        $this->words = $arr;

        return $this;
    }

}

