<?php
/**
 * JsonTransformerManager.php
 * Date: 13.06.14
 *
 * @author Philipp Marien <marien@eosnewmedia.de>
 */

namespace ENM\TransformerBundle\Manager;

use ENM\TransformerBundle\Interfaces\JsonTransformerManagerInterface;

/**
 * Class JsonTransformerManager
 *
 * @package    ENM\TransformerBundle\Manager
 * @author     Philipp Marien <marien@eosnewmedia.de>
 * @deprecated Use TransformerManager instead
 */
class JsonTransformerManager extends BaseTransformerManager implements JsonTransformerManagerInterface
{


  /**
   * @param object $returnClass
   * @param array  $config
   * @param string $json
   *
   * @return object
   * @deprecated Use TransformerManager->transform() instead
   */
  public function transform($returnClass, array $config, $json)
  {
    $jsonClass = json_decode($json);
    $params    = $this->objectToArray($jsonClass);

    return $this->createClass($returnClass, $config, $params);
  }
}