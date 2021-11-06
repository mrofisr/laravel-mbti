<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class PostsTable extends LivewireDatatable
{
    public $model = Post::class;

    public function columns()
    {
        return [
            NumberColumn::name('id')->label('ID'),
            Column::name('konten')->label('Content'),
            Column::name('author')->label('Author'),
            Column::callback(['id'], function ($id) {
                return view('layout.table-actions', ['id' => $id]);
            })->unsortable()
        ];
    }
}