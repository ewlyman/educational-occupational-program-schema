<?php

namespace Drupal\schema_educational_occupational_program\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'programType' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_educational_occupational_program_program_type",
 *   label = @Translation("programType"),
 *   description = @Translation("The type of educational or occupational program (e.g. ""classroom"", ""internship"", ""alternance"", etc.)."),
 *   name = "programType",
 *   group = "schema_educational_occupational_program",
 *   weight = 0,
 *   type = "string",
 *   property_type = "text",
 *   tree_parent = {},
 *   tree_depth = -1,
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaEducationalOccupationalProgramProgramType extends SchemaNameBase {

}