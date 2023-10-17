<?php

namespace Drupal\schema_educational_occupational_program\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'educationalCredentialAwarded' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_educational_occupational_program_educational_credential_awarded",
 *   label = @Translation("educationalCredentialAwarded"),
 *   description = @Translation("A description of the qualification, award, certificate, diploma or other educational credential awarded as a consequence of successful completion of this course."),
 *   name = "educationalCredentialAwarded",
 *   group = "schema_educational_occupational_program",
 *   weight = 10,
 *   type = "string",
 *   property_type = "creative_work",
 *   tree_parent = {
 *     "CreativeWork",
 *   },
 *   tree_depth = 2,
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaEducationalOccupationalProgramEducationalCredentialAwarded extends SchemaNameBase {

}