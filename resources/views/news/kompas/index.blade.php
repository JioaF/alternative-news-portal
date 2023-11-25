<x-layouts.app>
    <x-header title="Kompas News Portal"/>
    <section class="section">
        <div class="articles">
            <div class="news-source">
                <header class="news-header">
                    <div class="news-header-title">
                        <img src="{{ asset('images/news-image.png') }}" alt="">
                        <h3>List of News</h3>
                    </div>
                </header>
                @foreach ($news as $k)
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
            </div>
            <div class="news-search">
                <form action="" method="get">
                    <div class="input-box">
                        <label for="">Search for news</label>
                        <input type="text" class="" name="search">
                    </div>
                    <div>
                        <button type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layouts.app>
