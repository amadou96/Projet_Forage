<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateFactures extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:factures';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generer des factures';

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
     * @return mixed
     */
    public function handle()
    {
        //
        $this->info('Generation en cours');
        
        $compteurs=\App\Compteur::get();
        //Progress bars
        $bar = $this->output->createProgressBar($compteurs->count());
        $bar->start();
        foreach ($compteurs as $compteur ) {
            $this->info($compteur->numero_serie);
            $compteur->generateFacture();
            $bar->advance();
        }
        $bar->finish();
        //Fin Progress bars
        $this->info('Operation effectuee');

        






    }
}
