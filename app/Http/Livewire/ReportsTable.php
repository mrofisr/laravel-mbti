<?php

namespace App\Http\Livewire;

use App\Models\Report;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ReportsTable extends LivewireDatatable
{
    public function builder()
    {
        return Report::query();
    }

    public function columns()
    {
        return [
            // NumberColumn::name('id')->label('ID')->defaultSort('asc')
            // ->sortBy('id'),
            Column::name('nama')->label('Nama'),
            Column::name('prodi')->label('Prodi'),
            Column::name('jenis_kelamin')->label('Jenis Kelamin'),
            Column::name('result')->label('Result'),
            Column::name('keterangan')->label('Keterangan'),
            Column::name('penjelasan')->label('Penjelasan'),
            DateColumn::name('created_at')->label('Tanggal Tes'),
        ];
    }
}