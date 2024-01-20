<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class CreatePost extends Component
{
    use WithPagination;
    public $title = 'Post title...';
   
    public function save() 
    {
        $this->validate([
            'title'=>'required',
        ]);

        $post = Post::create([
            'title' => $this->title
        ]);
         request()->session()->flash('success','Successfully created');
   
    }
    public function render()
    {
        $posts =Post::latest()->paginate(10);
        return view('livewire.create-post',compact('posts'));
    }
}
