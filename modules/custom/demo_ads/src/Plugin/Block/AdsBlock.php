<?php

namespace Drupal\demo_ads\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'AdsBlock' block.
 *
 * @Block(
 *  id = "ads_block",
 *  admin_label = @Translation("Demo Ads Block"),
 * )
 */
class AdsBlock extends BlockBase
{
    /**
     * {@inheritdoc}
     */
    public function defaultConfiguration()
    {
        return [] + parent::defaultConfiguration();
    }

    /**
     * {@inheritdoc}
     */
    public function blockForm($form, FormStateInterface $form_state)
    {
        $form['ad_html_content'] = [
            '#type' => 'text_format',
            '#title' => $this->t('Ad HTML (Content)'),
            '#default_format' => 'full_html',
            '#description' => $this->t('You can put html content, table, image etc.'),
            '#default_value' => $this->configuration['ad_html_content']['value'],
            '#weight' => 1,
        ];
        $form['expiration_date'] = [
            '#type' => 'date',
            '#title' => $this->t('Expiration Date'),
            '#description' => $this->t('The date on which ad will expire.'),
            '#default_value' => $this->configuration['expiration_date'],
            '#weight' => 2,
        ];
        $form['target_url'] = [
            '#type' => 'url',
            '#title' => $this->t('Target URL'),
            '#description' => $this->t('This URL if available, will hyperlink overall ad.'),
            '#default_value' => $this->configuration['target_url'],
            '#weight' => 3,
        ];
        $form['active'] = [
            '#type' => 'checkbox',
            '#title' => $this->t('Active'),
            '#description' => $this->t('This will show add if active is selected.'),
            '#default_value' => $this->configuration['active'],
            '#weight' => 4,
        ];

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function blockSubmit($form, FormStateInterface $form_state)
    {
        $this->configuration['ad_html_content'] = $form_state->getValue('ad_html_content');
        $this->configuration['expiration_date'] = $form_state->getValue('expiration_date');
        $this->configuration['target_url'] = $form_state->getValue('target_url');
        $this->configuration['active'] = $form_state->getValue('active');
    }

    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $build = [];

        if ($this->configuration['active'] == 1) {
            $current_date = time();
            $ad_expiration_date = strtotime($this->configuration['expiration_date']);

            if ($current_date <= $ad_expiration_date) {
                $build['ad_html_content']['#markup'] = (!empty($this->configuration['target_url'])) ? "<a href='".$this->configuration['target_url']."' target='_blank'>".$this->configuration['ad_html_content']['value'].'</a>' : $this->configuration['ad_html_content']['value'];
            }
        }
        $build['#cache']['max-age'] = -1;

        return $build;
    }
}
