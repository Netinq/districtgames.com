<section id="part-1">
    <img id="logo-m" src="{{ asset('img/logo-fluid.png')}}" alt="Logo">
    <div class="message">
        <h2>Envoyez-nous un <span>message</span></h2>
        <form action="{{route('sendmail')}}" method="POST">
            @csrf
            <div class="chatbox-ct">
                <img class="chatbox" src="{{ asset('img/infos/partie_haute.png')}}" alt="">
                <textarea name="message" placeholder="Mon message..." ></textarea>
            </div>
            <img class="chat" src="{{ asset('img/infos/chat.png')}}" alt="">
            <div class="email">
                <img src="{{ asset('img/infos/mail.png')}}" alt="">
                <input type="email" class="form-control" name="email" placeholder="exemple@email.com" required/>
                <button type="submit">Envoyer</button>
            </div>
        </form>
    </div>
    <div class="news">
        <div class="news-ct">
            <img src="{{ asset('img/infos/news.png')}}" alt="">
            <div class="content">
                <h2>News</h2>
                <div class="articles">
                    @foreach ($news as $article)
                        <div class="article" itemscope itemtype="https://schema.org/Article">
                            <h3 itemprop="articleBody"><img src="{{route('news.fetch_size', [$article->id, 75])}}" alt=""><span  itemprop="name">{{$article->title}}</span></h3>
                            <p itemprop="articleBody">{{$article->content}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
