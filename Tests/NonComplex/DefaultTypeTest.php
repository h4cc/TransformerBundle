<?php


namespace Ssc\ApiBundle\Tests\NonComplex;

use ENM\TransformerBundle\Tests\BaseTest;

class DefaultTypeTest extends BaseTest
{

  public function testBoolean()
  {
    $config = array(
      'test' => [
        'complex' => false,
        'type'    => 'bool',
      ]
    );

    $this->expectSuccess($config, 'test', true);
    $this->expectSuccess($config, 'test', false);

    $this->exceptionWithStringTest($config, 'test');
    $this->exceptionWithArrayTest($config, 'test');
    $this->exceptionWithNegativeIntegerTest($config, 'test');
    $this->exceptionWithPositiveIntegerTest($config, 'test');
    $this->exceptionWithObjectTest($config, 'test');
    $this->exceptionWithZeroTest($config, 'test');
    $this->exceptionWithNegativeFloatTest($config, 'test');
    $this->exceptionWithPositiveFloatTest($config, 'test');
  }



  public function testString()
  {
    $config = array(
      'test' => [
        'complex' => false,
        'type'    => 'string',
      ]
    );

    $this->expectSuccess($config, 'test', 'Hallo Welt');

    $this->exceptionWithBooleanTest($config, 'test');
    $this->exceptionWithArrayTest($config, 'test');
    $this->exceptionWithNegativeIntegerTest($config, 'test');
    $this->exceptionWithPositiveIntegerTest($config, 'test');
    $this->exceptionWithObjectTest($config, 'test');
    $this->exceptionWithZeroTest($config, 'test');
    $this->exceptionWithNegativeFloatTest($config, 'test');
    $this->exceptionWithPositiveFloatTest($config, 'test');
  }



  public function testArray()
  {
    $config = array(
      'test' => [
        'complex' => false,
        'type'    => 'array',
        'options' => [
          'assoc' => false,
        ]
      ]
    );

    $this->expectSuccess($config, 'test', array('Hallo', 'Welt'));

    $this->exceptionWithBooleanTest($config, 'test');
    $this->exceptionWithStringTest($config, 'test');
    $this->exceptionWithNegativeIntegerTest($config, 'test');
    $this->exceptionWithPositiveIntegerTest($config, 'test');
    $this->exceptionWithObjectTest($config, 'test');
    $this->exceptionWithZeroTest($config, 'test');
    $this->exceptionWithNegativeFloatTest($config, 'test');
    $this->exceptionWithPositiveFloatTest($config, 'test');
  }



  public function testAssocArray()
  {
    $config = array(
      'test' => [
        'complex' => false,
        'type'    => 'array',
        'options' => [
          'assoc' => true,
        ]
      ]
    );

    $this->expectSuccess($config, 'test', array('Hallo' => 'Welt'));

    $this->exceptionWithBooleanTest($config, 'test');
    $this->exceptionWithStringTest($config, 'test');
    $this->exceptionWithNegativeIntegerTest($config, 'test');
    $this->exceptionWithPositiveIntegerTest($config, 'test');
    $this->exceptionWithObjectTest($config, 'test');
    $this->exceptionWithZeroTest($config, 'test');
    $this->exceptionWithNegativeFloatTest($config, 'test');
    $this->exceptionWithPositiveFloatTest($config, 'test');
  }



  public function testInteger()
  {
    $config = array(
      'test' => [
        'complex' => false,
        'type'    => 'integer',
      ]
    );

    $this->expectSuccess($config, 'test', 1);
    $this->expectSuccess($config, 'test', 0);
    $this->expectSuccess($config, 'test', -1);

    $this->exceptionWithBooleanTest($config, 'test');
    $this->exceptionWithArrayTest($config, 'test');
    $this->exceptionWithStringTest($config, 'test');
    $this->exceptionWithObjectTest($config, 'test');
    $this->exceptionWithNegativeFloatTest($config, 'test');
    $this->exceptionWithPositiveFloatTest($config, 'test');
  }



  public function testFloat()
  {
    $config = array(
      'test' => [
        'complex' => false,
        'type'    => 'float',
      ]
    );

    $this->expectSuccess($config, 'test', 2.4);
    $this->expectSuccess($config, 'test', -2.4);
    $this->expectSuccess($config, 'test', 0);
    $this->expectSuccess($config, 'test', 2);
    $this->expectSuccess($config, 'test', -2);

    $this->exceptionWithBooleanTest($config, 'test');
    $this->exceptionWithStringTest($config, 'test');
    $this->exceptionWithObjectTest($config, 'test');
    $this->exceptionWithArrayTest($config, 'test');
  }
}