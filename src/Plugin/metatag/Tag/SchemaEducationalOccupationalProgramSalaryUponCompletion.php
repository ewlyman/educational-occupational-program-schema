<?php

namespace Drupal\schema_educational_occupational_program\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'salaryUponCompletion' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_educational_occupational_program_salary_upon_completion",
 *   label = @Translation("salaryUponCompletion"),
 *   description = @Translation("The expected salary upon completing the training."),
 *   name = "salaryUponCompletion",
 *   group = "schema_educational_occupational_program",
 *   weight = 20,
 *   type = "string",
 *   tree_parent = {
 *     "MonetaryAmount",
 *   },
 *   tree_depth = -1,
 *   property_type = "monetary_amount",
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaEducationalOccupationalProgramSalaryUponCompletion extends SchemaNameBase {

}