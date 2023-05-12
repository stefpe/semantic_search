<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: config/contextionary.proto

namespace Contextionary;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>contextionary.SimilarWordsResults</code>
 */
class SimilarWordsResults extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .contextionary.Word words = 1;</code>
     */
    private $words;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Contextionary\Word>|\Google\Protobuf\Internal\RepeatedField $words
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Config\Contextionary::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .contextionary.Word words = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWords()
    {
        return $this->words;
    }

    /**
     * Generated from protobuf field <code>repeated .contextionary.Word words = 1;</code>
     * @param array<\Contextionary\Word>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWords($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Contextionary\Word::class);
        $this->words = $arr;

        return $this;
    }

}
