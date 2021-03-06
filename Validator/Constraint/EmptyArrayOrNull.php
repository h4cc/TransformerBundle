<?php


namespace Enm\TransformerBundle\Validator\Constraint;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Exception\ConstraintDefinitionException;

/**
 * Class Date
 *
 * @package Enm\TransformerBundle\Validator\Constraint
 * @author  Philipp Marien <marien@eosnewmedia.de>
 */
class EmptyArrayOrNull extends Constraint
{

  public $message = 'The value have to be an empty array or null!"';



  /**
   * @return array
   */
  public function getRequiredOptions()
  {
    return array();
  }
}