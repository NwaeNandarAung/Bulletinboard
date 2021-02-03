<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class PostExport implements FromCollection,WithHeadings
{
    protected $search;

    public function __construct($search)
    {
        $this->search = $search;
    }
    
    public function headings(): array
    {
        return [
            'ID',
            'Title',
            'Description',
            'Status',
            'Created User ID',
            'Updated User ID',
            'Deleted User ID',
            'Created At',
            'Updated At',
            'Deleted At'
        ];
    }

    public function collection()
    {
        $post = DB::table('posts')
              ->select('posts.*')
              ->join('users', 'posts.created_user_id', '=', 'users.id')
              ->where('posts.title', 'LIKE', "%" . $this->search . "%")
              ->orWhere('posts.description', 'LIKE', "%" . $this->search . "%")
              ->orWhere('users.name', 'LIKE', "%" . $this->search. "%")
              ->orderBy('posts.id')
              ->get();

        return $post;
    }
}