<?php
/**
 * TransformerConfiguration.php
 * Date: 13.06.14
 *
 * @author Philipp Marien <marien@eosnewmedia.de>
 */

namespace ENM\TransformerBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class TransformerConfiguration implements ConfigurationInterface
{

  /**
   * Generates the configuration tree builder.
   *
   * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
   */
  public function getConfigTreeBuilder()
  {
    $treeBuilder = new TreeBuilder();
    $rootNode    = $treeBuilder->root('config');

    $rootNode
      ->useAttributeAsKey('name')
        ->prototype('array')
          ->children()
            ->booleanNode('complex')->defaultValue(false)->end()
            ->enumNode('type')->values(array('integer', 'float', 'string', 'bool', 'array', 'collection', 'date'))->defaultValue(null)->end()
            ->scalarNode('methodClass')->defaultValue(null)->end()
            ->scalarNode('method')->defaultValue(null)->end()
            ->arrayNode('children')->prototype('variable')->end()->end()
            ->arrayNode('options')
            ->addDefaultsIfNotSet()
              ->children()
                ->booleanNode('assoc')->defaultValue(true)->end()
                ->arrayNode('expected')->prototype('scalar')->end()->end()
                ->floatNode('min')->defaultValue(null)->end()
                ->floatNode('max')->defaultValue(null)->end()
                ->scalarNode('returnClass')->defaultValue(null)->end()
                ->scalarNode('regex')->defaultValue(null)->end()
                ->arrayNode('date')
                  ->addDefaultsIfNotSet()
                  ->children()
                    ->scalarNode('format')->defaultValue('Y-m-d')->end()
                    ->booleanNode('convertToObject')->defaultValue(false)->end()
                    ->scalarNode('convertToFormat')->defaultValue(null)->end()
                  ->end()
                ->end()
                ->booleanNode('required')->defaultValue(false)->end()
                ->arrayNode('length')
                  ->children()
                    ->floatNode('min')->isRequired()->end()
                    ->floatNode('max')->isRequired()->end()
                  ->end()
                ->end()
              ->end()
            ->end()
          ->end()
        ->end()
      ->end();

    return $treeBuilder;
  }
}