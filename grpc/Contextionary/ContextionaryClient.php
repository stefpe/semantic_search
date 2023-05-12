<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Contextionary;

/**
 */
class ContextionaryClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Contextionary\Word $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function IsWordStopword(\Contextionary\Word $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/contextionary.Contextionary/IsWordStopword',
        $argument,
        ['\Contextionary\WordStopword', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Contextionary\Word $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function IsWordPresent(\Contextionary\Word $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/contextionary.Contextionary/IsWordPresent',
        $argument,
        ['\Contextionary\WordPresent', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Contextionary\SchemaSearchParams $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SchemaSearch(\Contextionary\SchemaSearchParams $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/contextionary.Contextionary/SchemaSearch',
        $argument,
        ['\Contextionary\SchemaSearchResults', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Contextionary\SimilarWordsParams $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SafeGetSimilarWordsWithCertainty(\Contextionary\SimilarWordsParams $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/contextionary.Contextionary/SafeGetSimilarWordsWithCertainty',
        $argument,
        ['\Contextionary\SimilarWordsResults', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Contextionary\Word $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VectorForWord(\Contextionary\Word $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/contextionary.Contextionary/VectorForWord',
        $argument,
        ['\Contextionary\Vector', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Contextionary\WordList $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MultiVectorForWord(\Contextionary\WordList $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/contextionary.Contextionary/MultiVectorForWord',
        $argument,
        ['\Contextionary\VectorList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Contextionary\Corpi $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VectorForCorpi(\Contextionary\Corpi $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/contextionary.Contextionary/VectorForCorpi',
        $argument,
        ['\Contextionary\Vector', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Contextionary\VectorNNParams $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function NearestWordsByVector(\Contextionary\VectorNNParams $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/contextionary.Contextionary/NearestWordsByVector',
        $argument,
        ['\Contextionary\NearestWords', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Contextionary\VectorNNParamsList $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MultiNearestWordsByVector(\Contextionary\VectorNNParamsList $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/contextionary.Contextionary/MultiNearestWordsByVector',
        $argument,
        ['\Contextionary\NearestWordsList', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Contextionary\MetaParams $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Meta(\Contextionary\MetaParams $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/contextionary.Contextionary/Meta',
        $argument,
        ['\Contextionary\MetaOverview', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Contextionary\ExtensionInput $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddExtension(\Contextionary\ExtensionInput $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/contextionary.Contextionary/AddExtension',
        $argument,
        ['\Contextionary\AddExtensionResult', 'decode'],
        $metadata, $options);
    }

}
