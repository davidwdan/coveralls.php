<?php
/**
 * Provides a connector for the [Wercker](http://www.wercker.com) service.
 */
namespace coveralls\services\wercker;

/**
 * Gets the configuration parameters from the environment.
 * @return array The configuration parameters.
 */
function getConfiguration(): array {
  return [
    'git_branch' => getenv('WERCKER_GIT_BRANCH'),
    'git_commit' => getenv('WERCKER_GIT_COMMIT'),
    'service_job_id' => getenv('WERCKER_BUILD_ID'),
    'service_name' => 'wercker'
  ];
}
