<?php

namespace Drupal\schema_educational_occupational_program\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'programPrerequisites' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_educational_occupational_program_program_prerequisites",
 *   label = @Translation("programPrerequisites"),
 *   description = @Translation("RECOMMENDED BY GOOGLE. Prerequisites for enrolling in the program."),
 *   name = "programPrerequisites",
 *   group = "schema_educational_occupational_program",
 *   weight = 5,
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
class SchemaEducationalOccupationalProgramProgramPrerequisites extends SchemaNameBase {

}

