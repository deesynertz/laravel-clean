<?php

namespace Deesynertz\Clean;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;


class CleanCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clean:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Session cleared, Clear all caches and optimize the application';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        # CLear Session Uploaded failed Files
        // if (clearSessionalFiles()) {
        //     $sessionPath = storage_path('framework/sessions');
        //     $files = glob($sessionPath . '/*');
    
        //     foreach ($files as $file) {
        //         if (is_file($file)) {
        //             unlink($file);
        //         }
        //     }
        // }

        // $this->info('Session cleared successfully.');

        # Run the individual commands
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('optimize:clear');
        
        if (isSpatiePermissionInstalled()) {
            # Spatie Permission package is installed, execute cache:forget command
            Artisan::call('cache:forget spatie.permission.cache');
        }

        # Log a message
        $this->info('Then all caches cleared and application optimized.');
    }
}
