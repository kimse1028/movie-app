# KOBIS 일일 박스오피스 뷰어

이 프로젝트는 영화진흥위원회(KOBIS) 오픈 API를 활용하여, 오늘로부터 정확히 1년 전의 일일 박스오피스 순위를 보여주는 간단한 웹 애플리케이션입니다. Laravel 프레임워크와 Livewire를 사용하여 제작되었습니다.

## 🖼️ 스크린샷

*(이곳에 애플리케이션 스크린샷을 추가하세요.)*

## ✨ 주요 기능

- 현재 날짜로부터 정확히 1년 전의 일일 박스오피스 순위를 조회합니다.
- 각 영화의 순위, 제목, 누적 관객 수, 개봉일을 테이블 형식으로 표시합니다.
- Tailwind CSS를 사용하여 깔끔하고 직관적인 UI를 제공합니다.
- 다양한 화면 크기에 대응하는 반응형 디자인을 적용했습니다.

## 🛠️ 사용 기술

- **백엔드:** PHP, Laravel 12
- **프론트엔드:** Livewire 3, Tailwind CSS, Alpine.js (Livewire에 포함)
- **API:** KOBIS (영화진흥위원회) 오픈 API

## 🚀 설치 및 실행 방법

1.  **저장소를 복제합니다.**
    ```bash
    git clone https://github.com/your-username/your-repo-name.git
    cd your-repo-name
    ```

2.  **PHP 의존성을 설치합니다.**
    ```bash
    composer install
    ```

3.  **NPM 의존성을 설치합니다.**
    ```bash
    npm install
    ```

4.  **.env 파일을 생성합니다.**
    ```bash
    cp .env.example .env
    ```

5.  **애플리케이션 키를 생성합니다.**
    ```bash
    php artisan key:generate
    ```

6.  **.env 파일에 KOBIS API 키를 추가합니다.**
    API 키는 [KOBIS 오픈 API 홈페이지](https://www.kobis.or.kr/kobisopenapi/homepg/main/main.do)에서 발급받아야 합니다.
    ```
    KOBIS_API_KEY=발급받은_API_키를_입력하세요
    ```

7.  **개발 서버를 실행합니다.**
    ```bash
    php artisan serve
    ```

8.  **프론트엔드 에셋을 컴파일합니다.** (새 터미널에서 실행)
    ```bash
    npm run dev
    ```

9.  브라우저에서 `http://127.0.0.1:8000` 주소로 접속합니다.
