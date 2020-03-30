<?php

namespace ZeusVision\Modules\Console;

use Illuminate\Console\Command;

class CreateModule extends Command
{
    protected $signature = 'zeus:modules:create {moduleName}';
    protected $description = 'Creates a new module';

    public function handle()
    {
        $folders = config('zeus.modules.folders');

        $module = $this->argument('moduleName');
        $path = app_path(config('zeus.modules.path')) . '/' . ucfirst($module) . '/';

        foreach ($folders as $folder) {
            $folderPath = $path . $folder;
            $this->makeDirectory($folderPath);
        }

        $this->info('Module ' . $module . ' created!');
    }

    private function makeDirectory($path, $mode = 0755)
    {
        mkdir($path, $mode, true);

        $keepFile = $path . '/' . '.gitkeep';
        touch($keepFile);
    }
}
