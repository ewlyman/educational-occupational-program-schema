<?php

namespace Drupal\schema_educational_occupational_program\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'timeOfDay' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_educational_occupational_program_time_of_day",
 *   label = @Translation("timeOfDay"),
 *   description = @Translation("RECOMMENDED BY GOOGLE. The time of day when the program runs."),
 *   name = "timeOfDay",
 *   group = "schema_educational_occupational_program",
 *   weight = 1,
 *   type = "string",
 *   property_type = "text",
 *   tree_parent = {},
 *   tree_depth = -1,
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaEducationalOccupationalProgramTimeOfDay extends SchemaNameBase {

}