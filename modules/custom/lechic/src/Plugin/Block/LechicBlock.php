<?php

namespace Drupal\lechic\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a Chic
 * 
 * @Block(
 *  id = "lechic_block",
 *  admin_label = @Translation("Le Chic Block"),
 * )
 */
class LechicBlock extends BlockBase {

    public function build() {
        return [
            '#theme' => 'lechic',
            '#var' => $this->t('.. !!!'),
        ];
    }
}