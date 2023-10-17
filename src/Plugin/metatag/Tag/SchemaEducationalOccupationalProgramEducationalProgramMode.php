<?php

namespace Drupal\schema_educational_occupational_program\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'educationalProgramMode' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_educational_occupational_program_educational_program_mode",
 *   label = @Translation("educationalProgramMode"),
 *   description = @Translation("The medium or means of delivery of the program as a whole. The value may either be a text label (e.g. 'online', 'onsite' or 'blended'; 'synchronous' or 'asynchronous'; 'full-time' or 'part-time') or a URL reference to a term from a controlled vocabulary."),
 *   name = "educationalProgramMode",
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
class SchemaEducationalOccupationalProgramEducationalProgramMode extends SchemaNameBase {

}