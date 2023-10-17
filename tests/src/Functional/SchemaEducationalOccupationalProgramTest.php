<?php

namespace Drupal\Tests\schema_educational_occupational_program\Functional;

use Drupal\Tests\schema_metatag\Functional\SchemaMetatagTagsTestBase;

/**
 * Tests that each of the Schema Metatag tags work correctly.
 *
 * @group schema_metatag
 * @group schema_educational_occupational_program
 */
class SchemaEducationalOccupationalProgramTest extends SchemaMetatagTagsTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = ['schema_educational_occupational_program'];

  /**
   * {@inheritdoc}
   */
  public $moduleName = 'schema_educational_occupational_program';

  /**
   * {@inheritdoc}
   */
  public $schemaTagsNamespace = '\\Drupal\\schema_educational_occupational_program\\Plugin\\metatag\\Tag\\';

  /**
   * {@inheritdoc}
   */
  public $schemaTags = [
    'schema_educational_occupational_program_application_deadline' => 'SchemaEducationalOccupationalProgramApplicationDeadline',
    'schema_educational_occupational_program_application_start_date' => 'SchemaEducationalOccupationalProgramApplicationStartDate',
    'schema_educational_occupational_program_day_of_week' => 'SchemaEducationalOccupationalProgramDayOfWeek',
    'schema_educational_occupational_program_description' => 'SchemaEducationalOccupationalProgramDescription',
    'schema_educational_occupational_program_educational_credential_awarded' => 'SchemaEducationalOccupationalProgramEducationalCredentialAwarded',
    'schema_educational_occupational_program_educational_program_mode' => 'SchemaEducationalOccupationalProgramEducationalProgramMode',
    'schema_educational_occupational_program_end_date' => 'SchemaEducationalOccupationalProgramEndDate',
    'schema_educational_occupational_program_financial_aid_eligible' => 'SchemaEducationalOccupationalProgramFinancialAidEligible',
    'schema_educational_occupational_program_identifier' => 'SchemaEducationalOccupationalProgramIdentifier',
    'schema_educational_occupational_program_maximum_enrollment' => 'SchemaEducationalOccupationalProgramMaximumEnrollment',
    'schema_educational_occupational_program_name' => 'SchemaEducationalOccupationalProgramName',
    'schema_educational_occupational_program_number_of_credits' => 'SchemaEducationalOccupationalProgramNumberOfCredits',
    'schema_educational_occupational_program_occupational_category' => 'SchemaEducationalOccupationalProgramOccupationalCategory',
    'schema_educational_occupational_program_occupational_credential_awarded' => 'SchemaEducationalOccupationalProgramOccupationalCredentialAwarded',
    'schema_educational_occupational_program_offers' => 'SchemaEducationalOccupationalProgramOffers',
    'schema_educational_occupational_program_program_prerequisites' => 'SchemaEducationalOccupationalProgramProgramPrerequisites',
    'schema_educational_occupational_program_program_type' => 'SchemaEducationalOccupationalProgramProgramType',
    'schema_educational_occupational_program_provider' => 'SchemaEducationalOccupationalProgramProvider',
    'schema_educational_occupational_program_salary_upon_completion' => 'SchemaEducationalOccupationalProgramSalaryUponCompletion',
    'schema_educational_occupational_program_start_date' => 'SchemaEducationalOccupationalProgramStartDate',
    'schema_educational_occupational_program_term_duration' => 'SchemaEducationalOccupationalProgramTermDuration',
    'schema_educational_occupational_program_terms_per_year' => 'SchemaEducationalOccupationalProgramTermsPerYear',
    'schema_educational_occupational_program_time_of_day' => 'SchemaEducationalOccupationalProgramTimeOfDay',
    'schema_educational_occupational_program_time_to_complete' => 'SchemaEducationalOccupationalProgramTimeToComplete',
    'schema_educational_occupational_program_training_salary' => 'SchemaEducationalOccupationalProgramTrainingSalary',
    'schema_educational_occupational_program_type' => 'SchemaEducationalOccupationalProgramType',
    'schema_educational_occupational_program_typical_credits_per_term' => 'SchemaEducationalOccupationalProgramTypicalCreditsPerTerm',
    'schema_educational_occupational_program_url' => 'SchemaEducationalOccupationalProgramUrl',
  ];

}