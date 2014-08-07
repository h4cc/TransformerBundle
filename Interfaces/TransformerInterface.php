<?php


namespace ENM\TransformerBundle\Interfaces;

interface TransformerInterface
{

  /**
   * Diese Methode transformiert ein Array, ein Objekt oder einen JSON-String in ein gewünschtes Objekt und validiert die Werte
   *
   * @param object|string       $returnClass
   * @param array               $config
   * @param array|object|string $values
   *
   * @return object
   * @throws \ENM\TransformerBundle\Exceptions\InvalidTransformerParameterException
   */
  public function transform($returnClass, array $config, $values);



  /**
   * Diese Methode transformiert ein Objekt zurück in einen JSON-String, ein Array oder eine Standard-Klasse
   *
   * @param object $object
   * @param array  $config
   * @param string $result_type
   *
   * @return array|\stdClass|string
   * @throws \ENM\TransformerBundle\Exceptions\InvalidTransformerParameterException
   */
  public function reverseTransform($object, array $config, $result_type);



  /**
   * @param mixed $value
   *
   * @return array
   * @throws \ENM\TransformerBundle\Exceptions\InvalidTransformerParameterException
   */
  public function toArray($value);
} 