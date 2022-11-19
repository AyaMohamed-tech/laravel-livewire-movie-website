<?php

namespace App\Http\Livewire;

use App\Models\Cast;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Http;

class CastIndex extends Component
{
    use WithPagination;

    protected $key = 'b437685edb55d96899719f4c1e3c03e1';

    public $castTMDBId;
    public $castName;
    public $castPosterPath;

    public function generateCast(){
      $newCast = Http::get('https://api.themoviedb.org/3/person/'.$this->castTMDBId.'?api_key=b437685edb55d96899719f4c1e3c03e1&language=en-US')
           ->json();

           $cast = Cast::where('tmdb_id',$newCast['id'])->first();

           if(!$cast){
            Cast::create([
                'tmdb_id' => $newCast['id'],
                'name' => $newCast['name'],
                'slug' => Str::slug($newCast['name']),
                'poster_path' => $newCast['profile_path'],
             ]);
           } else {
             $this->dispatchBrowserEvent('banner-message',['style' => 'danger','message' => 'Cast already exists']);
           } 
    }

    public function render()
    {
        return view('livewire.cast-index',[
            'casts'  => Cast::paginate(5),
        ]);
    }
}
