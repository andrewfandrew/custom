<?php

namespace Drupal\andrewform\Controller;

use Drupal\Core\Controller\ControllerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class AndrewformController implements ControllerInterface {
   
    public static function create(ContainerInterface $container) {
        return new static($container->get('module_handler'));
    }
    
    public function andrewformPage() {
        $build = array(
            '#type' => 'markup',
            '#markup' => t('Hello World!'),
            );
        return $build;
        
    }
}