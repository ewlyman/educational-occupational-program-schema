<?php

namespace Drupal\schema_educational_occupational_program\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'termDuration' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_educational_occupational_program_term_duration",
 *   label = @Translation("termDuration"),
 *   description = @Translation("RECOMMENDED BY GOOGLE. The time it takes to complete a term in ISO 8601 format (for example, 'P4M' (4 months))."),
 *   name = "termDuration",
 *   group = "schema_educational_occupational_program",
 *   weight = 0,
 *   type = "string",
 *   property_type = "duration",
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaEducationalOccupationalProgramTermDuration extends SchemaNameBase {

}