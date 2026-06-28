<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sampleMenuJson = File::get(public_path('assets/js/sidebar-menu.json'));
        $menu = json_decode($sampleMenuJson);
        foreach ($menu as $item) {
            $data = [
                "type" => $item->type,
                "label" => $item->label,
                "href" => $item->href ?? null,
                "route" => $item->route ?? null,
                "icon" => $item->icon ?? null,
                "aclass" => $item->aclass ?? null,
                "badge" => $item->badge ?? null,
                "parent" => null,
            ];

            $item->inserted = Menu::create($data);
            if (!isset($item->children)) {
                unset($item);
                continue;
            }
            foreach ($item->children as $subItem) {
                $data = [
                    "type" => $subItem->type,
                    "label" => $subItem->label,
                    "href" => $subItem->href ?? null,
                    "route" => $subItem->route ?? null,
                    "icon" => $subItem->icon ?? null,
                    "aclass" => $subItem->aclass ?? null,
                    "badge" => $subItem->badge ?? null,
                    "parent" => $item->inserted->id,
                ];
                $subItem->inserted = Menu::create($data);

                if (!isset($subItem->children)) {
                    unset($subItem);
                    continue;
                }
                foreach ($subItem->children as $subItem2) {
                    $data = [
                        "type" => $subItem2->type,
                        "label" => $subItem2->label,
                        "href" => $subItem2->href ?? null,
                        "route" => $subItem2->route ?? null,
                        "icon" => $subItem2->icon ?? null,
                        "aclass" => $subItem2->aclass ?? null,
                        "badge" => $subItem2->badge ?? null,
                        "parent" => $subItem->inserted->id,
                    ];
                    Menu::create($data);
                }
                unset($subItem);
            }
            unset($item);
        }
    }
}
