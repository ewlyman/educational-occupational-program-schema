<?php

namespace Drupal\schema_educational_occupational_program\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'trainingSalary' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_educational_occupational_program_training_salary",
 *   label = @Translation("trainingSalary"),
 *   description = @Translation("The estimated salary earned while in the program."),
 *   name = "trainingSalary",
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
class SchemaEducationalOccupationalProgramTrainingSalary extends SchemaNameBase {

}