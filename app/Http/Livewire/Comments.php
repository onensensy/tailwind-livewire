<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{

    public $comments = [
        [
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi magnam itaque molestiae,
            nemo velit enim. Libero deleniti natus velit? Consequuntur veritatis officiis magnam nobis,
            assumenda laborum fuga atque cum quae.',
            'created_at' => '2 mins ago',
            'creator' => 'Sensy'

        ]
    ];

    public $newComment;

    public function addComment()
    {
        // array_unshift($this->comments, [
        //     'body' => 'nER JNSDFJN SJEFNJKS FGIUSNFGSJK FGUIVS IFGS VNKJn sjdg e cum quae.',
        //     'created_at' => '1 mins ago',
        //     'creator' => 'Me also'
        // ]);

        array_unshift($this->comments, [
            'body' => $this->newComment,
            'created_at' => Carbon::now()->diffForHumans(),
            'creator' => 'Sensy'
        ]);

        $this->newComment = '';
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
