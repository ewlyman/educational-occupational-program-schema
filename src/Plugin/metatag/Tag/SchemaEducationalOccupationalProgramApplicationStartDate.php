<?php

namespace Drupal\schema_educational_occupational_program\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'applicationStartDate' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_educational_occupational_program_application_start_date",
 *   label = @Translation("applicationStartDate"),
 *   description = @Translation("RECOMMENDED BY GOOGLE. The date at which the program begins collecting applications for the next enrollment cycle, in <a href="":url"" target=""_blank"">ISO-8601 format</a>.", arguments = {
 *     ":url" = "https://en.wikipedia.org/wiki/ISO_8601",
 *   }),
 *   name = "applicationStartDate",
 *   group = "schema_educational_occupational_program",
 *   weight = -20,
 *   type = "string",
 *   property_type = "date",
 *   tree_parent = {},
 *   tree_depth = 0,
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaEducationalOccupationalProgramApplicationStartDate extends SchemaNameBase {

}

