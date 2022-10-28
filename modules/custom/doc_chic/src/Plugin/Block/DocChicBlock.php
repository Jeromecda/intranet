<?php

namespace Drupal\doc_chic\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a Documentation Block
 * 
 * @Block(
 *  id = "doc_chic_block",
 *  admin_label = @Translation("Documentation"),
 * )
 */
class DocChicBlock extends BlockBase {

    public function build() {
        return [
            '#theme' => 'doc_chic',
            '#var' => $this->t('.!!!'),
        ];
    }
}