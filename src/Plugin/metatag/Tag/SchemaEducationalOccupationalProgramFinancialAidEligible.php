<?php

namespace Drupal\schema_educational_occupational_program\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'financialAidEligible' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_educational_occupational_program_financial_aid_eligible",
 *   label = @Translation("financialAidEligible"),
 *   description = @Translation("RECOMMENDED BY GOOGLE. A financial aid type or program which students may use to pay for tuition or fees associated with the program."),
 *   name = "financialAidEligible",
 *   group = "schema_educational_occupational_program",
 *   weight = 30,
 *   type = "string",
 *   property_type = "text",
 *   tree_parent = {},
 *   tree_depth = -1,
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaEducationalOccupationalProgramFinancialAidEligible extends SchemaNameBase {

}
