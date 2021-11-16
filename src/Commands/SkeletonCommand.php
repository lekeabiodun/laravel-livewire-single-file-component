<?php

namespace Lekeabiodun\LivewireSingleFileComponent\Commands;

use Illuminate\Console\Command;

class LivewireSingleFileComponentCommand extends Command
{
    public $signature = 'livewire-single-file-component';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
