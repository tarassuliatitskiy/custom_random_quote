<?php

namespace Drupal\custom_random_quote;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;

/**
 * Defines a service provider for the Custom random quote module module.
 */
class CustomRandomQuoteServiceProvider extends ServiceProviderBase {

  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container) {
    // Replace the class of the 'random_quote' service.
    if ($container->hasDefinition('random_quote')) {
      $definition = $container->getDefinition('random_quote');
      $definition
        ->setClass(StaticRandomQuote::class);
    }
  }

}
