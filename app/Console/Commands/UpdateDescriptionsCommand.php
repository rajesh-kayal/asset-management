<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Asset;
use App\Models\Description;
use Carbon\Carbon;

class UpdateDescriptionsCommand extends Command
{
    protected $signature = 'update-descriptions';

    protected $description = 'Update descriptions table based on given logic';

    public function handle()
    {
        // Get assets purchased in the first year (adjust the date as needed)
        $firstYearAssets = Asset::whereYear('purchase_date', 2023)->get();

        foreach ($firstYearAssets as $asset) {
            $purchaseCost = $asset->purchase_cost;
            $purchaseDate = Carbon::parse($asset->purchase_date);
            $descriptionRate = $asset->description_rate;

            $currentYearDepreciation = ($purchaseCost * $purchaseDate->diffInDays(Carbon::now())) / 365;

            Description::create([
                'purchase_days' => $purchaseDate->diffInDays(Carbon::now()),
                'current_year_depreciation' => $currentYearDepreciation,
                'accumulated_depreciation' => 0, // Assuming it starts from 0 for the first year
            ]);
        }

        // Update descriptions for the second year
        $secondYearDescriptions = Description::whereYear('created_at', 2023)->get();

        foreach ($secondYearDescriptions as $description) {
            $previousYearAmount = $description->current_year_depreciation;
            $descriptionRate = $asset->description_rate;

            $currentYearDepreciation = $previousYearAmount - $descriptionRate;

            $description->update([
                'current_year_depreciation' => $currentYearDepreciation,
            ]);
        }

        $this->info('Descriptions updated successfully.');
    }
}
