<?php
/**
 * TransformerManagerInterfaceace.php
 * Date: 13.06.14
 *
 * @author Philipp Marien <marien@eosnewmedia.de>
 */

namespace ENM\TransformerBundle\Interfaces;

interface ArrayTransformerManagerInterface
{

  /**
   * @param object $returnClass
   * @param array  $config
   * @param array  $params
   *
   * @return object
   */
  public function transform($returnClass, array $config, array $params = array());
} 