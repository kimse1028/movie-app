<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>한국 영화 박스오피스</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Livewire Styles -->
    @livewireStyles
</head>
<body class="bg-gray-100 min-h-screen">
<div class="py-8">
    <!-- Livewire 컴포넌트 호출 -->
    @livewire('movie-list')
</div>

<!-- Livewire Scripts -->
@livewireScripts
</body>
</html>
