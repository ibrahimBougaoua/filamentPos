<?php

namespace IbrhimBougaoua\FilamentPos\Commands;

use Illuminate\Console\Command;

class FilamentPosCommand extends Command
{
    public $signature = 'filamentpos';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
