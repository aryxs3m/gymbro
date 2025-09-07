<?php

namespace App\Filament\Resources\RecordTypeResource\Pages;

use App\Filament\Resources\RecordTypeResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Contracts\Support\Htmlable;

class CreateRecordType extends CreateRecord
{
    protected static string $resource = RecordTypeResource::class;

    public function getTitle(): string|Htmlable
    {
        return __('pages.record_types.create_title');
    }

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
