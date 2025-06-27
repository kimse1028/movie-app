<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * 한국 영화 데이터를 KOBIS API에서 가져오는 메소드
     */
    public function getMovieData()
    {
        $apiKey = env('KOBIS_API_KEY');
        $targetDt = date('Ymd', strtotime('-1 year'));

        $url = "http://www.kobis.or.kr/kobisopenapi/webservice/rest/boxoffice/searchDailyBoxOfficeList.json";
        $url .= "?key={$apiKey}&targetDt={$targetDt}";

        try {
            $response = file_get_contents($url);
            $data = json_decode($response, true);

            if (isset($data['boxOfficeResult']['dailyBoxOfficeList'])) {
                return $data['boxOfficeResult']['dailyBoxOfficeList'];
            }

            return [];
        } catch (Exception $e) {
            return [];
        }
    }

    /**
     * 영화 목록 페이지 표시
     */
    public function index()
    {
        return view('movies');
    }
}
