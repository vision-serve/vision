<?php

/**
 * Vinexel Framework.
 *
 * @package Vision
 * @author Elwira Perdana
 * @copyright (c) PT Iconic Wira Niaga
 * @license MIT License
 */

namespace Iconic\Core\Modules\Commands\Helpers;

use Iconic\Core\Modules\Commands\Make;

class MakeMigrateCommand
{
    public function handle($arguments)
    {
        $projectName = $arguments[0] ?? 'default_project';
        $migrationName = $arguments[1] ?? 'DefaultMigration';

        $make = new Make();
        $make->createMigrate($projectName, $migrationName);
    }
}
