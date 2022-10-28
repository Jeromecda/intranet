<?php

namespace Drupal\annuaire\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a "Annuaire' Block.
 * 
 * @Block(
 *  id = "annuaire_block",
 *  admin_label = @Translation("Annuaire Block"),
 *  category = @Translation("Annuaire"),
 * )
 */
class AnnuaireBlock extends BlockBase
{
    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $annuaireService = \Drupal::service('annuaire.service');
        $salut = $annuaireService->hello();
        $services = $annuaireService->callAnnuaire();
        return array(
            '#theme' => 'annuaire',
            '#services' => $services,
            '#data' => [
                'salut' => $salut,
                'services' => $services,
            ],
        );
    }
}