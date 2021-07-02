<?php

namespace App\Http\Livewire\Admin;

use App\Models\Package;
use Carbon\Carbon;
use Livewire\Component;

class PackagesIndex extends Component
{

    public function render()
    {
        $fechaHoy = Carbon::now()->isoFormat('LL');
        $packages = Package::whereDate('created_at', '=', Carbon::now()->format('Y-m-d'))->paginate();
        $packagesT = Package::whereDate('created_at', '=', Carbon::now()->format('Y-m-d'))->get();
        $total = 0;
        foreach($packagesT as $package){
            $totalPaquete = 0;
            foreach($package->elements as $element){
                $totalPaquete += $element->price;
            }
            $total += $totalPaquete;
        }

        return view('livewire.admin.packages-index', compact('packages', 'fechaHoy', 'total'));
    }

}
