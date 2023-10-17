<?php

namespace Drupal\schema_educational_occupational_program\Plugin\metatag\Group;

use Drupal\schema_metatag\Plugin\metatag\Group\SchemaGroupBase;

/**
 * Provides a plugin for the 'EducationalOccupationalProgram' meta tag group.
 *
 * @MetatagGroup(
 *   id = "schema_educational_occupational_program",
 *   label = @Translation("Schema.org: EducationalOccupationalProgram"),
 *   description = @Translation("See Schema.org definitions for this Schema type at <a href="":url"">:url</a>. Also see <a href="":url2"">Google's requirements</a>.", arguments = {
 *     ":url" = "https://schema.org/EducationalOccupationalProgram",
 *     ":url2" = "https://developers.google.com/search/docs/data-types/job-training",
 *   }),
 *   weight = 10,
 * )
 */
class SchemaEducationalOccupationalProgram extends SchemaGroupBase {

}
