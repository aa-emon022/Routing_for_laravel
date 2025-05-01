<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeRouteFiles extends Command
{
    protected $signature = 'make:route-files';
    protected $description = 'Create web.php and api.php in routes directory';

    public function handle()
    {
        $webPath = base_path('routes/web.php');
        $apiPath = base_path('routes/api.php');

        if (!File::exists($webPath)) {
            File::put($webPath, "<?php\n\nuse Illuminate\\Support\\Facades\\Route;\n\n// Web routes here\n");
            $this->info('✅ web.php created.');
        } else {
            $this->warn('⚠️ web.php already exists.');
        }

        if (!File::exists($apiPath)) {
            File::put($apiPath, "<?php\n\nuse Illuminate\\Support\\Facades\\Route;\n\n// API routes here\n");
            $this->info('✅ api.php created.');
        } else {
            $this->warn('⚠️ api.php already exists.');
        }

        return Command::SUCCESS;
    }
}
