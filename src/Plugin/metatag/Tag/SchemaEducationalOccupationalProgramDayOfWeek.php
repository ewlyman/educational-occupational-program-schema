<?php

namespace Drupal\schema_educational_occupational_program\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'dayOfWeek' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_educational_occupational_program_day_of_week",
 *   label = @Translation("dayOfWeek"),
 *   description = @Translation("RECOMMENDED BY GOOGLE. The day of the week for which these opening hours are valid."),
 *   name = "dayOfWeek",
 *   group = "schema_educational_occupational_program",
 *   weight = -19,
 *   type = "string",
 *   property_type = "text",
 *   tree_parent = {},
 *   tree_depth = -1,
 *   secure = FALSE,
 *   multiple = TRUE
 * )
 */
class SchemaEducationalOccupationalProgramDayOfWeek extends SchemaNameBase {

}
