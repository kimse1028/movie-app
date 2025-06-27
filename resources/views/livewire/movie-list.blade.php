<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold text-center mb-8">🎬 한국 영화 박스오피스</h1>

    @if($loading)
    <div class="text-center">
        <p class="text-lg">📽️ 영화 데이터를 불러오는 중...</p>
    </div>
    @else
    <!-- 총 영화 개수 표시 -->
    <div class="mb-6 text-center">
        <p class="text-gray-600">
            총 <span class="font-bold text-blue-600">{{ $totalMovies }}</span>편의 영화
            ({{ $currentPage }}/{{ $totalPages }} 페이지)
        </p>
    </div>

    <!-- 영화 목록 -->
    <div class="grid gap-4">
        @forelse($paginatedMovies as $index => $movie)
        <div class="bg-white rounded-lg shadow-md p-6 border border-gray-200">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-xl font-semibold text-gray-800">
                        {{ $movie['rank'] }}위. {{ $movie['movieNm'] }}
                    </h2>
                    <p class="text-gray-600 mt-2">
                        🎭 개봉일: {{ $movie['openDt'] }}
                    </p>
                    <p class="text-gray-600">
                        👥 관객수: {{ number_format($movie['audiCnt']) }}명
                    </p>
                    <p class="text-gray-600">
                        💰 매출액: {{ number_format($movie['salesAmt']) }}원
                    </p>
                </div>
                <div class="text-right">
                            <span class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full">
                                {{ $movie['rank'] }}위
                            </span>
                </div>
            </div>
        </div>
        @empty
        <div class="text-center py-8">
            <p class="text-gray-500">영화 데이터가 없습니다.</p>
        </div>
        @endforelse
    </div>

    <!-- 페이지네이션 버튼 -->
    @if($totalPages > 1)
    <div class="mt-8 flex justify-center space-x-2">
        <!-- 이전 페이지 -->
        @if($currentPage > 1)
        <a href="?page={{ $currentPage - 1 }}"
           class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
            ← 이전
        </a>
        @endif

        <!-- 페이지 번호들 -->
        @for($i = 1; $i <= $totalPages; $i++)
        @if($i == $currentPage)
        <span class="px-4 py-2 bg-blue-600 text-white rounded">
                            {{ $i }}
                        </span>
        @else
        <a href="?page={{ $i }}"
           class="px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">
            {{ $i }}
        </a>
        @endif
        @endfor

        <!-- 다음 페이지 -->
        @if($currentPage < $totalPages)
        <a href="?page={{ $currentPage + 1 }}"
           class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
            다음 →
        </a>
        @endif
    </div>
    @endif

    <!-- 새로고침 버튼 -->
    <div class="mt-8 text-center">
        <button wire:click="getMovies"
                class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
            🔄 새로고침
        </button>
    </div>
    @endif
</div>
