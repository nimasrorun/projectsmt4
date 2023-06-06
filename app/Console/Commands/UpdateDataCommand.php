<?php

namespace App\Console\Commands;

use App\Models\Schedule;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class UpdateDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'schedule:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'update status schedule';

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
        $curentTime = Carbon::now()->format('H:i');
        $curentdate = Carbon::now()->format('Y-m-d');

        $jadwal = Schedule::where('status' , 1)->get();
        
        foreach($jadwal as $schedule){
            if($curentdate == $schedule->tanggal && $curentTime == substr($schedule->jam, 0, 5)){
                Schedule::where('kode_schedule', $schedule->kode_schedule)->update([
                    'status' =>'2']);
                $total_schedule = Schedule::where('id', $schedule->id)->where('status', '1')->count();
                User::where('id', $schedule->id)->update([
                    'jmlh_kolom' => $total_schedule
                ]);

                $this->info('Updated');
            }else{
                $this->info('Checked');
            }
        }     
    }
}

