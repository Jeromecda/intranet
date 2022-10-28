<?php

namespace Drupal\ressources_humaines\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides Ressources humaines CHIC
 * 
 * @Block(
 *  id = "ressources_humaines",
 *  admin_label = @Translation("Ressources humaines"),
 * )
 */
class RessourcesHumainesBlock extends BlockBase {

    /**
     * {@inheritdoc}
     */
    public function build() {
        return [
            '#theme' => 'ressources_humaines',
            '#var' => $this->t('.!!!'),
        ];
    }
}