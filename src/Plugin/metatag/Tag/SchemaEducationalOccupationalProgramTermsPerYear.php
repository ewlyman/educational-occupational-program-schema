<?php

namespace Drupal\schema_educational_occupational_program\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'termsPerYear' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_educational_occupational_program_terms_per_year",
 *   label = @Translation("termsPerYear"),
 *   description = @Translation("RECOMMENDED BY GOOGLE. The number of times that terms of study are offered per year. Semesters and quarters are common units for term."),
 *   name = "termsPerYear",
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
class SchemaEducationalOccupationalProgramTermsPerYear extends SchemaNameBase {

}