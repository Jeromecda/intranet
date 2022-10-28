<?php

namespace Drupal\actus\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block banner
 * 
 * @Block(
 *  id = "actus_block",
 *  admin_label = @Translation("Actus Block"),
 * )
 */
class ActusBlock extends BlockBase {

    public function build() {
        return [
            '#theme' => 'actus_template',
            '#test_var' => $this->t('SALUT !!!'),
        ];
    }
}