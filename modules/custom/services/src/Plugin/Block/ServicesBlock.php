<?php

namespace Drupal\services\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block services
 * 
 * @Block(
 *  id = "services_block",
 *  admin_label = @Translation("Services Block"),
 * )
 */
class ServicesBlock extends BlockBase {

    public function build() {
        return [
            '#theme' => 'services_template',
            '#test_var' => $this->t('SALUT !!!'),
        ];
    }
}