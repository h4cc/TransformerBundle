<?php


namespace ENM\TransformerBundle\Tests\Complex;

use ENM\TransformerBundle\Resources\TestClass\TestConfiguration;
use ENM\TransformerBundle\Resources\TestClass\UserTestClass;
use ENM\TransformerBundle\Tests\BaseTest;

class JsonTest extends BaseTest
{

  public function testJson()
  {
    $config = TestConfiguration::getConfig();
    $params = json_encode(
      array(
        'user' => 'testUser',
        'address'  => [
          'street'  => 'Test Straße 3a',
          'plz'     => '21031',
          'place'   => 'Test Place',
          'country' => 'Germany'
        ],
        'birthday' => '1990-01-01',
        'hobbys'   => [
          [
            'name'       => 'Musik',
            'years'      => 4,
            'days_in_week' => 1
          ],
          [
            'name'       => 'Fitness',
            'years'      => 1.4,
            'days_in_week' => 3
          ]
        ]
      )
    );

    $transformer = $this->container->get('enm.transformer.service');

    try
    {
      $transformer->transform(new UserTestClass(), $config, $params);
      $this->assertTrue(true);
    }
    catch (\Exception $e)
    {
      $this->fail($e->getMessage());
    }
  }
} 