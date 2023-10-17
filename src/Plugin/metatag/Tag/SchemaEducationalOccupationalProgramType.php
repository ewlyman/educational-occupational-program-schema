<?php

namespace Drupal\schema_educational_occupational_program\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'schema_educational_occupational_program' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_educational_occupational_program_type",
 *   label = @Translation("@type"),
 *   description = @Translation("REQUIRED. The type of educational program."),
 *   name = "@type",
 *   group = "schema_educational_occupational_program",
 *   weight = -50,
 *   type = "string",
 *   tree_parent = {
 *     "Organization",
 *   },
 *   tree_depth = -1,
 *   property_type = "type",
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaEducationalOccupationalProgramType extends SchemaNameBase {

  /**
   * {@inheritdoc}
   */
  public static function labels() {
    return [
      'EducationalOccupationalProgram',
    ];
  }

}
