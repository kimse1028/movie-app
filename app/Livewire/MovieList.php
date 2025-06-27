<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Controllers\MovieController;

class MovieList extends Component
{
    use WithPagination;

    public $movies = [];
    public $loading = true;
    public $perPage = 5; // 페이지당 5개씩 표시

    public function mount()
    {
        $this->getMovies();
    }

    public function getMovies()
    {
        $this->loading = true;

        // Controller의 getMovieData 메소드 호출
        $movieController = new MovieController();
        $this->movies = $movieController->getMovieData();

        $this->loading = false;
    }

    public function render()
    {
        // 현재 페이지의 영화들만 가져오기
        $currentPage = request()->get('page', 1);
        $offset = ($currentPage - 1) * $this->perPage;
        $moviesForPage = array_slice($this->movies, $offset, $this->perPage);

        return view('livewire.movie-list', [
            'paginatedMovies' => $moviesForPage,
            'totalMovies' => count($this->movies),
            'currentPage' => $currentPage,
            'totalPages' => ceil(count($this->movies) / $this->perPage)
        ]);
    }
}
