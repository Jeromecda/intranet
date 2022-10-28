<?php

namespace Drupal\gardes_et_astreintes\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a "Gardes et Astreintes" Block
 * 
 * @Block(
 *  id = "gardes_et_astreintes_block",
 *  admin_label = @Translation("Bloc pour les Gardes & Astreintes"),
 * )
 */
class GardesEtAstreintesBlock extends BlockBase {

    public function build() {
        return [
            '#theme' => 'gardes_et_astreintes',
            '#var' => $this->t('.. !!!'),
        ];
    }
}