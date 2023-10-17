<?php

namespace Drupal\schema_educational_occupational_program\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'timeToComplete' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_educational_occupational_program_time_to_complete",
 *   label = @Translation("timeToComplete"),
 *   description = @Translation("REQUIRED BY GOOGLE. The time it takes to complete a term in ISO 8601 format (for example, 'P3Y6M' (3 years and 6 months))."),
 *   name = "timeToComplete",
 *   group = "schema_educational_occupational_program",
 *   weight = 0,
 *   type = "string",
 *   property_type = "duration",
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaEducationalOccupationalProgramTimeToComplete extends SchemaNameBase {

}
