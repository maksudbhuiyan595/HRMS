<?php

namespace App\Console\Commands;

use App\Models\Role;
use Illuminate\Console\Command;

class CreatePermission extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'permission:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'successfully created';

    /**
     * Execute the console command.
     */
    public function handle(){
        $role=Role::all();
        echo $role->count();
    }
    
        
}
