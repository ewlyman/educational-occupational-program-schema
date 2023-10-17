<?php

namespace Drupal\schema_educational_occupational_program\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'occupationalCategory' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_educational_occupational_program_occupational_category",
 *   label = @Translation("occupationalCategory"),
 *   description = @Translation("REQUIRED BY GOOGLE. A category describing the job. Use the <a href="":url"" target=""_blank"">BLS SOC-6 code</a> as published in the 2010 SOC guide", arguments = {
 *     ":url" = "https://www.bls.gov/soc/2010/home.htm",
 *   }),
 *   name = "occupationalCategory",
 *   group = "schema_educational_occupational_program",
 *   weight = 0,
 *   type = "string",
 *   property_type = "text",
 *   tree_parent = {},
 *   tree_depth = -1,
 *   secure = FALSE,
 *   multiple = TRUE
 * )
 */
class SchemaEducationalOccupationalProgramOccupationalCategory extends SchemaNameBase {

}

