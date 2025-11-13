<?php

namespace App\Livewire;

use Livewire\Component;

class MovieList extends Component
{
    public $movies = [];
    public $targetDt;

    public function mount()
    {
        // KOBIS API에서 한국 영화 데이터 가져오기
        $apiKey = config('app.kobis_api_key', env('KOBIS_API_KEY'));

        // 현재 날짜에서 1년 전 데이터 가져오기
        $this->targetDt = date('Y년 m월 d일', strtotime('-1 year'));

        // KOBIS API 박스오피스 URL
        $url = "http://www.kobis.or.kr/kobisopenapi/webservice/rest/boxoffice/searchDailyBoxOfficeList.json";
        $url .= "?key={$apiKey}&targetDt=" . date('Ymd', strtotime('-1 year'));

        // API 호출
        $response = file_get_contents($url);
        $data = json_decode($response, true);

        if (isset($data['boxOfficeResult']['dailyBoxOfficeList'])) {
            $this->movies = $data['boxOfficeResult']['dailyBoxOfficeList'];
        }
    }

    public function render()
    {
        return view('livewire.movie-list');
    }
}
