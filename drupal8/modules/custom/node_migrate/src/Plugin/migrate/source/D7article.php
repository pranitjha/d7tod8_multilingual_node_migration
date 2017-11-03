<?php
namespace Drupal\node_migrate\Plugin\migrate\source;

use Drupal\Core\Database\Query\SelectInterface;
use Drupal\node\Plugin\migrate\source\d7\Node;

/**
 * @MigrateSource(
 *   id = "article_node"
 * )
 */
class D7article extends Node {

  public function query() {
    $query = parent::query();
    $this->handleTranslations($query);
    return $query;
  }

  /**
   * @param \Drupal\Core\Database\Query\SelectInterface $query
   *   The generated query.
   */
  protected function handleTranslations(SelectInterface $query) {
    // Check whether or not we want translations.
    if (empty($this->configuration['translations'])) {
      // No translations: Yield untranslated nodes, or default translations.
      $query->where('n.tnid = 0 OR n.tnid = n.nid');
    }
    else {
      // Translations: Yield only non-default translations.
      $query->where('n.tnid <> 0 AND n.tnid <> n.nid');
    }
  }
}
