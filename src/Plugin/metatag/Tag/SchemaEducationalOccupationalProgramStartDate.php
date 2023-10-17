<?php

namespace Drupal\schema_educational_occupational_program\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'startDate' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_educational_occupational_program_start_date",
 *   label = @Translation("startDate"),
 *   description = @Translation("RECOMMENDED BY GOOGLE. The start date and time of the item, in <a href="":url"" target=""_blank"">ISO-8601 format</a>.", arguments = {
 *     ":url" = "https://en.wikipedia.org/wiki/ISO_8601",
 *   }),
 *   name = "startDate",
 *   group = "schema_educational_occupational_program",
 *   weight = -10,
 *   type = "string",
 *   property_type = "date",
 *   tree_parent = {},
 *   tree_depth = 0,
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaEducationalOccupationalProgramStartDate extends SchemaNameBase {

}