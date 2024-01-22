<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use Illuminate\Http\RedirectResponse;

class CreatePost extends Component
{
    use WithPagination;
    public $title = 'Post title...';
 
    public $confirming;
    public $delete_id;
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
   

    public function confirmDelete($postId)
    {
        $this->confirming = $postId;
      
    }

    public function delete()
    {
        $post = Post::find($this->delete_id);

        if ($post) {
            $post->delete();
            session()->flash('success', 'Post deleted successfully.');
        }

        $this->confirming = null;
    }
    public function render()
    {
        $posts =Post::latest()->paginate(10);
        return view('livewire.create-post',compact('posts'));
    }



}
