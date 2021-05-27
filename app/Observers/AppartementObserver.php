<?php

namespace App\Observers;

use App\Models\Appartement;
use App\Models\CitySector;

class AppartementObserver
{
    /**
     * Handle the Appartement "created" event.
     *
     * @param  \App\Models\Appartement  $appartement
     * @return void
     */
    public function created(Appartement $appartement)
    {
        $city_sector = CitySector::find($appartement->city_sector_id);
        $city_sector->counter++;
        $city_sector->save();
    }

    /**
     * Handle the Appartement "updated" event.
     *
     * @param  \App\Models\Appartement  $appartement
     * @return void
     */
    public function updated(Appartement $appartement)
    {
        //
    }

    /**
     * Handle the Appartement "deleted" event.
     *
     * @param  \App\Models\Appartement  $appartement
     * @return void
     */
    public function deleted(Appartement $appartement)
    {
        $city_sector = CitySector::find($appartement->city_sector_id);
        $city_sector->counter--;
        $city_sector->save();
    }

    /**
     * Handle the Appartement "restored" event.
     *
     * @param  \App\Models\Appartement  $appartement
     * @return void
     */
    public function restored(Appartement $appartement)
    {
        //
    }

    /**
     * Handle the Appartement "force deleted" event.
     *
     * @param  \App\Models\Appartement  $appartement
     * @return void
     */
    public function forceDeleted(Appartement $appartement)
    {
        //
    }
}
