<x-layouts.app>
    <x-header title="Alternative News Portal"/>
    <section class="section">
        <header>
            <h2>Local News Sources</h2>
        </header>
        <div class="articles">
            <section class="news-source">
                <header class="news-header">
                    <div class="news-header-title">
                        <img src="{{ asset('images/kompas-logo.png') }}" alt="">
                        <h3>Kompas</h3>
                    </div>
                    <div class="news-header-button">
                        <a href="">More</a>
                    </div>
                </header>
                @foreach ($kompas as $k)
                <article class="news">
                    <div class="news-image">
                        <img src="{{ $k['image'] }}" alt="">
                    </div>
                    <div class="news-detail">
                        <div class="news-info">
                            <h4>{{ $k['title'] }}</h4>
                            <h5>{{ $k['category'] }} | {{ $k['date'] }}</h5>
                        </div>
                        <div class="news-button">
                            <a href="">Read</a>
                            <a href="{{ $k['link'] }}" target="blank">Read Original</a>
                        </div>
                    </div>
                </article>
                @endforeach
            </section>
            <section class="news-source">
                <header class="news-header">
                    <div class="news-header-title">
                        <img src="{{ asset('images/news-image.png') }}" alt="">
                        <h3>Detik</h3>
                    </div>
                    <div class="news-header-button">
                        <a href="">More</a>
                    </div>
                </header>
                <article class="news">
                    <div class="news-image">
                        <img src="{{ asset('images/news-image.png') }}" alt="">
                    </div>
                    <div class="news-detail">
                        <div class="news-info">
                            <h4>Article Title</h4>
                            <h5>Category | dd-mm-yyyy</h5>
                        </div>
                        <div class="news-button">
                            <a href="">Read</a>
                            <a href="">Read Original</a>
                        </div>
                    </div>
                </article>
                <article class="news">
                    <div class="news-image">
                        <img src="{{ asset('images/news-image.png') }}" alt="">
                    </div>
                    <div class="news-detail">
                        <div class="news-info">
                            <h4>Article Title</h4>
                            <h5>Category | dd-mm-yyyy</h5>
                        </div>
                        <div class="news-button">
                            <a href="">Read</a>
                            <a href="">Read Original</a>
                        </div>
                    </div>
                    </div>
                </article>
            </section>
        </div>
    </section>
    <section class="section">
        <header>
            <h3>International News Sources</h3>
        </header>
        <div class="articles">
            <article class="news">
                <div class="news-image">
                    <img src="{{ asset('images/news-image.png') }}" alt="">
                </div>
                <div class="news-detail">
                    <div class="news-info">
                        <h4>Article Title</h4>
                        <h5>Category | dd-mm-yyyy</h5>
                    </div>
                    <div class="news-button">
                        <a href="">Read</a>
                        <a href="">Read Original</a>
                    </div>
                </div>
            </article>
            <article class="news">
                <div class="news-image">
                    <img src="{{ asset('images/news-image.png') }}" alt="">
                </div>
                <div class="news-detail">
                    <div class="news-info">
                        <h4>Article Title</h4>
                        <h5>Category | dd-mm-yyyy</h5>
                    </div>
                    <div class="news-button">
                        <a href="">Read</a>
                        <a href="">Read Original</a>
                    </div>
                </div>
            </article>
            <article class="news">
                <div class="news-image">
                    <img src="{{ asset('images/news-image.png') }}" alt="">
                </div>
                <div class="news-detail">
                    <div class="news-info">
                        <h4>Article Title</h4>
                        <h5>Category | dd-mm-yyyy</h5>
                    </div>
                    <div class="news-button">
                        <a href="">Read</a>
                        <a href="">Read Original</a>
                    </div>
                </div>
            </article>
            <article class="news">
                <div class="news-image">
                    <img src="{{ asset('images/news-image.png') }}" alt="">
                </div>
                <div class="news-detail">
                    <div class="news-info">
                        <h4>Article Title</h4>
                        <h5>Category | dd-mm-yyyy</h5>
                    </div>
                    <div class="news-button">
                        <a href="">Read</a>
                        <a href="">Read Original</a>
                    </div>
                </div>
            </article>
        </div>
        <div class="more-button">
            <a href="">More</a>
        </div>
    </section>
</x-layouts.app>
