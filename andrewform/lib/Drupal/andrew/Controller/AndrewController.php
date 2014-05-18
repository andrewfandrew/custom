<?php

namespace Drupal\andrew\Controller;

use Drupal\Core\Controller\ControllerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class AndrewController implements ControllerInterface {
   
    public static function create(ContainerInterface $container) {
        return new static($container->get('module_handler'));
    }
    
    public function andrewPage() {
        $build = array(
            '#type' => 'markup',
            '#markup' => t('Hello World!'),
            );
        return $build;
        
    }
}