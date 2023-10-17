<?php

namespace Drupal\schema_educational_occupational_program\Plugin\metatag\Tag;



use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'endDate' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_educational_occupational_program_end_date",
 *   label = @Translation("endDate"),
 *   description = @Translation("RECOMMENDED BY GOOGLE. The end date and time of the item, in <a href="":url"" target=""_blank"">ISO-8601 format</a>.", arguments = {
 *     ":url" = "https://en.wikipedia.org/wiki/ISO_8601",
 *   }),
 *   name = "endDate",
 *   group = "schema_educational_occupational_program",
 *   weight = -9,
 *   type = "string",
 *   property_type = "date",
 *   tree_parent = {},
 *   tree_depth = 0,
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaEducationalOccupationalProgramEndDate extends SchemaNameBase {

}
