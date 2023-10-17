<?php

namespace Drupal\schema_educational_occupational_program\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'offers' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_educational_occupational_program_offers",
 *   label = @Translation("offers"),
 *   description = @Translation("REQUIRED BY GOOGLE. The estimated cost of the program."),
 *   name = "offers",
 *   group = "schema_educational_occupational_program",
 *   weight = 30,
 *   type = "string",
 *   property_type = "offer",
 *   tree_parent = {
 *     "Offer",
 *   },
 *   tree_depth = -1,
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaEducationalOccupationalProgramOffers extends SchemaNameBase {

}
