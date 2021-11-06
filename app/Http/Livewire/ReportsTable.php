<?php

namespace App\Http\Livewire;

use App\Models\Report;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ReportsTable extends LivewireDatatable
{
    public $model = Report::class;

    public function columns()
    {
        return [
            NumberColumn::name('id')->label('ID'),
            Column::name('nama')->label('Nama'),
            Column::name('result')->label('Result'),
            Column::callback(['id'], function ($id) {
                return view('layout.reports-actions', ['id' => $id]);
            })->unsortable()
        ];
    }
}