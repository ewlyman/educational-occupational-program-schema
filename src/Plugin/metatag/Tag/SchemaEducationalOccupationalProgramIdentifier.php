<?php

namespace Drupal\schema_educational_occupational_program\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;
use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaPropertyValueBase;

/**
 * Provides a plugin for the 'identifier' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_educational_occupational_program_identifier",
 *   label = @Translation("identifier"),
 *   description = @Translation("REQUIRED BY GOOGLE. The unique identifier of the program. The propertyID should be one of ""CIP2010"" or ""ProgramID"". The value should be either the 6-digit CIP code or the identifier used by the institution."),
 *   name = "identifier",
 *   group = "schema_educational_occupational_program",
 *   weight = -35,
 *   type = "string",
 *   property_type = "text",
 *   tree_parent = {},
 *   tree_depth = -1,
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaEducationalOccupationalProgramIdentifier extends SchemaNameBase {

}