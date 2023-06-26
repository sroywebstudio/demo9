<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Models\User;
use Illuminate\Console\Command;

class generatePost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:post {count}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate new post';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $total = $this->argument('count');

        for($i=1; $i<=$total; $i++){
            Post::factory()->create();
        }
        return Command::SUCCESS;
    }
}
