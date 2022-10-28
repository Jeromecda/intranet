<?php

namespace Drupal\flash\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a flash
 * 
 * @Block(
 *  id = "flash_block",
 *  admin_label = @Translation("Flash Chic Block"),
 * )
 */
class FlashBlock extends BlockBase {

    /**
     * {@inheritdoc}
     */
    public function build() {
        return [
            '#theme' => 'tpl',
            '#flash1' => $this->configuration['flash1'],
            '#lien_flash1' => $this->configuration['lien_flash1'],
            '#flash2' => $this->configuration['flash2'],
            '#lien_flash2' => $this->configuration['lien_flash2'],
            '#flash3' => $this->configuration['flash3'],
            '#lien_flash3' => $this->configuration['lien_flash3'],
        ];
    }

    /**
     * {@inheritdoc}
     */  
    public function defaultConfiguration() {
        return [
            'flash1' => $this->t(''),
            'lien_flash1' => $this->t(''),
            'flash2' => $this->t(''),
            'lien_flash2' => $this->t(''),
            'flash3' => $this->t(''),
            'lien_flash3' => $this->t(''),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function blockForm($form, FormStateInterface $form_state) {
        // 1er bloc
        $form['flash1'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Flash Info'),
            '#description' => $this->t('Le nom du flash info à ajouter'),
            '#default_value' => $this->configuration['flash1'],
        ];
        $form['lien_flash1'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Lien'),
            '#description' => $this->t('Le lien (adresse URL) du Flash Info à ajouter'),
            '#default_value' => $this->configuration['lien_flash1'],
        ];
        $form['flash2'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Flash Info'),
            '#description' => $this->t('Le nom du flash info à ajouter'),
            '#default_value' => $this->configuration['flash2'],
        ];
        $form['lien_flash2'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Lien'),
            '#description' => $this->t('Le lien (adresse URL) du Flash Info à ajouter'),
            '#default_value' => $this->configuration['lien_flash2'],
        ];
        $form['flash3'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Flash Info'),
            '#description' => $this->t('Le nom du flash info à ajouter'),
            '#default_value' => $this->configuration['flash3'],
        ];
        $form['lien_flash3'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Lien'),
            '#description' => $this->t('Le lien (adresse URL) du Flash Info à ajouter'),
            '#default_value' => $this->configuration['lien_flash3'],
        ];


        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function blockSubmit($form, FormStateInterface $form_state) {
        $this->configuration['flash1'] = $form_state->getValue('flash1');
        $this->configuration['lien_flash1'] = $form_state->getValue('lien_flash1');
        $this->configuration['flash2'] = $form_state->getValue('flash2');
        $this->configuration['lien_flash2'] = $form_state->getValue('lien_flash2');
        $this->configuration['flash3'] = $form_state->getValue('flash3');
        $this->configuration['lien_flash3'] = $form_state->getValue('lien_flash3');     
    }

}