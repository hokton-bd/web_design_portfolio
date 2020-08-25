<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Sawarabi+Mincho&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

    <!-- my-stylesheet -->
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>低価格かつスピーディにWebサイト作成</title>
</head>
<body>

    <nav class="drawer-nav clear">

        <div class="drawer-logo-box">
            <img src="assets/images/logo.png" alt="" class="drawer-logo">
        </div>

        <div class="drawer-togglers">
            <span class="drawer-opener"><i class="fa fa-bars" aria-hidden="true"></i></span>
            <span class="drawer-closer"><i class="fa fa-times" aria-hidden="true"></i></span>
        </div><!--drawer-toggles-->
            
        <div class="drawer-content wow">
            <ul class="drawer-menu">
                
                <li class="drawer-item">
                    <a href="#top" class="drawer-link"><i class="fa-fw fas fa-home"></i>トップ</a>
                </li><!--/drawer-item-->
                
                <li class="drawer-item">
                <a href="#price" class="drawer-link"><i class="fa-fw fas fa-yen-sign"></i>料金</a>
                </li><!--/drawer-item-->
                
                <li class="drawer-item">
                    <a href="#flow" class="drawer-link"><i class="fa-fw fas fa-wind"></i>制作の流れ</a>
                </li><!--/drawer-item-->

                <li class="drawer-item">
                    <a href="#works" class="drawer-link"><i class="fa-fw fas fa-palette"></i>制作実績</a>
                </li><!--/drawer-item-->

                <li class="drawer-item contact-link">
                    <a href="#contact" class="drawer-link"><i class="fa-fw fas fa-paper-plane"></i>お問い合わせ</a>
                </li><!--/drawer-item-->
                
            </ul><!--/drawer-menu-->
        </div><!--content-->

    </nav><!--/drawer-nav-->

    <header id="top" class="">

        <nav id="global-nav" class="wow fadeInDown">
            <div class="container clear">

                <div class="header-left">
                    <img src="assets/images/logo.png" alt="logo">
                </div><!--/header-left-->

                <div class="header-right">
                    <ul class="global-menu">

                        <li class="global-item">
                            <a href="#top" class="global-link active">トップ</a>
                        </li><!--/global-item-->
                        
                        <li class="global-item">
                            <a href="#price" class="global-link">料金</a>
                        </li><!--/global-item-->

                        <li class="global-item">
                            <a href="#flow" class="global-link">制作の流れ</a>
                        </li><!--/global-item-->

                        <li class="global-item">
                            <a href="#works" class="global-link">制作実績</a>
                        </li><!--/global-item-->

                        <li class="global-item contact-link">
                            <a href="#contact" class="global-link">お問い合わせ</a>
                        </li><!--/global-item-->

                    </ul><!--/global-menu-->
                </div><!--/header-right-->

            </div><!--/container-->
        </nav><!--/global-nav-->

        <div class="container hero-view clear">

            <h1 class="hero-view-title wow fadeInLeft">丁寧かつ高品質<br>そしてスピーディ<br>なのに<span class="title-deco">低価格</span></h1>

            <a href="#contact" class="cta-btn" id="header-cta-btn">お問い合わせ</a>

            <div class="contact-form header-contact-form wow fadeInRight">
                
                <p class="form-title">お問い合わせ</p>

                <form action="functions.php" method="post">
                
                    <input type="text" name="name" id="name" placeholder="お名前(会社名)" required>
                    <input type="email" name="email" id="email" placeholder="メールアドレス" required>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="お問い合わせ内容" required></textarea>

                    <input type="submit" value="送信" id="header-form-btn" name="header-submit" class="cta-btn">

                </form>

            </div><!--/header-contact-form-->

        </div><!--/container-->

    </header>

    <main>

        <section id="price">
            <div class="container">
                <h2 class="section-title">料金</h2>

                <div class="price-list">

                    <div class="price-item wow fadeInLeft">
                        <i class="fas fa-paint-brush"></i>
                        <div class="item-head">
                            <h5 class="price-title">サイトデザイン・制作</h5>
                            <h5 class="price">30,000円～</h5>
                        </div><!--item-head-->

                        <div class="item-body">
                            <p class="price-description">静的なWebサイトを作成いたします。静的なWebサイトというのはお客様のほうで記事の投稿や画像の差し替えなどができないWebサイトのことです。サイトの更新を行うためにはHTMLなど、多少のプログラミングなどの知識が必要になります。ランディングページや機能のない単純な見せるためのWebサイトをお求めの方はこちらをお勧めします。</p>
                        </div><!--item-body-->

                        <div class="item-footer">
                            <p class="duration">【納期】最短<span>1</span>週間～</p>
                        </div><!-- item-footer -->
                    </div><!--price-item-->

                    <div class="price-item wow fadeIn">
                        <i class="fab fa-wordpress"></i>
                        <div class="item-head">
                            <h5 class="price-title">WordPress化</h5>
                            <h5 class="price">200,000円～</h5>
                        </div><!--item-head-->

                        <div class="item-body">
                            <p class="price-description">動的なWebサイトを作成いたします。動的なWebサイトというのは、お客様自身で更新のできるWebサイトの事です。インターネット上にある3割のWebサイトで使われているWordPressというツールを使って作成します。WordPressはスマホでも使えるので、気軽に記事の投稿ができます。お店のブログの投稿などをお客様自身でやりたい方にお勧めです。</p>
                        </div><!--item-body-->
                        
                        <div class="item-footer">
                            <p class="duration">【納期】最短<span>2</span>週間～</p>
                        </div><!-- item-footer -->

                    </div><!--price-item-->

                    <div class="price-item wow fadeInRight">
                        <i class="fas fa-code-branch"></i>
                        <div class="item-head">
                            <h5 class="price-title">システム構築</h5>
                            <h5 class="price">100,000円～</h5>
                        </div><!--item-head-->

                        <div class="item-body">
                            <p class="price-description">動的なサイト（WordPressを使ったサイト）の中で、美容院の予約や従業員の勤怠管理システムの作成、オンラインでの決済システムの導入などを行います。オンラインで予約を受けてもいきなりキャンセルされることがありますが、オンライン決済を導入すれば、予約の時点で支払いが発生するのでキャンセル率の低下につながり、売り上げの増加が見込めます。
                            </p>
                        </div><!--item-body-->
                        
                        <div class="item-footer">
                            <p class="duration">【納期】最短<span>2</span>週間～</p>
                        </div><!-- item-footer -->

                    </div><!--price-item-->

                </div><!--price-list-->

                <p class="notion">セットでお申込みいただくと（サイト作成とWordPress化など）割引させていただきます。ツールの使い方、インターネットへのアップロードも料金に含まれています。（別途サーバー、ドメイン費用がかかります。）またこの他にも検索結果に表示されやすくするためのSEO対策や広告の取り扱いなども対応しています。詳しくはお問い合わせください</p>
                <p class="notion">
                    低価格の理由として、Webサイト作成～公開までのすべてを一人で行っているため、他のWeb制作会社さんよりも低予算でのご案内が可能となっています。下記にもある通りWebサイト作成～公開まではいろいろな工程があり、中でもWebデザイナーやコーダー（実際にプログラミングを行う人）などの人員が必要になりその分人件費が発生します。私の場合は間の人件費、マージンが必要ないためお客様の負担になることなく高品質のWebサイトを提供することができます。
                </p>

                <a href="#contact" class="cta-btn">お問い合わせ</a>

            </div><!--/container-->
        </section><!--/price-->

        <section id="flow">
            <div class="container">
                <h2 class="section-title">Webサイトができるまで</h2>

                <div class="flow-list">

                    <div class="flow-item wow fadeInDown">
                        <div class="item-head">
                            <img src="assets/images/hearing.jpg" alt="flow" class="flow-img">
                        </div><!--item-head-->

                        <div class="item-body">
                            <h6 class="flow-title">ヒアリング</h6>
                            <p class="flow-description">お客様からのご要望をお聞きいたします。どんなサイトにしたいか、何を目的に作るのかなど。具体的な案がなくても構いません。ただミスマッチが起きてはお互いに喜ばしくありません。そのためこのヒアリングが最初のステップで一番重要になります。</p>
                            
                        </div><!--item-body-->
                    </div><!--flow-item-->

                    <div class="flow-item wow fadeInDown">
                        <div class="item-head">
                            <img src="assets/images/designing.jpg" alt="flow" class="flow-img">
                        </div><!--item-head-->

                        <div class="item-body">
                            <h6 class="flow-title">デザイン</h6>
                            <p class="flow-description">ヒアリング後、こちらでサイトのデザインを行います。設計図がなければ家が建たないのと同じで、デザインがなければWebサイトはできません。必要であれば途中経過をお見せすることもできます。</p>
                            
                        </div><!--item-body-->
                    </div><!--flow-item-->

                    <div class="flow-item wow fadeInDown">
                        <div class="item-head">
                            <img src="assets/images/coding.jpg" alt="flow" class="flow-img">
                        </div><!--item-head-->

                        <div class="item-body">
                            <h6 class="flow-title">コーディング</h6>
                            <p class="flow-description">デザインを基に実際にサイトを作っていきます。「サイトデザイン・制作」なら最短1日で仕上げます。</p>
                            
                        </div><!--item-body-->
                    </div><!--flow-item-->

                    <div class="flow-item wow fadeInDown">
                        <div class="item-head">
                            <img src="assets/images/system.jpg" alt="flow" class="flow-img">
                        </div><!--item-head-->

                        <div class="item-body">
                            <h6 class="flow-title">WordPress化・システム構築</h6>
                            <p class="flow-description">「サイトデザイン・制作」ではこのステップはありません。静的だったWebサイトを、WordPressを用いて動的に表示できるようにします。</p>
                            
                        </div><!--item-body-->
                    </div><!--flow-item-->

                    <div class="flow-item wow fadeInDown">
                        <div class="item-head">
                            <img src="assets/images/upload.jpg" alt="flow" class="flow-img">
                        </div><!--item-head-->

                        <div class="item-body">
                            <h6 class="flow-title">アップロード</h6>
                            <p class="flow-description">インターネット上にアップロードするのは、慣れていない方にとっては難しい作業です。なのですべてこちらで対応いたします。ただ、アップロードするためにはサーバ、ドメインといったものが必要でこちらの費用は別途お客様の方でご負担いただきます。
                            </p>
                            
                        </div><!--item-body-->
                    </div><!--flow-item-->

                    <div class="flow-item wow fadeInDown">
                        <div class="item-head">
                            <img src="assets/images/maintain.jpg" alt="flow" class="flow-img">
                        </div><!--item-head-->

                        <div class="item-body">
                            <h6 class="flow-title">メンテナンス</h6>
                            <p class="flow-description">ご要望があればその後のメンテナンスもいたします。画像や文章の差し替えは無料で対応します。簡単なレイアウトの変更は初回無料です。大幅なレイアウトの変更はお問い合わせください。
                            </p>
                            
                        </div><!--item-body-->
                    </div><!--flow-item-->
                    
                </div><!--flow-list-->

                <a href="#contact" class="cta-btn">お問い合わせ</a>

            </div><!--/container-->
        </section><!--/flow-->

        <section id="works">
            <div class="container">
                <h2 class="section-title">制作実績</h2>

                <div class="works-list clear">

                    <a href="https://july-web-development.000webhostapp.com/" class="works-item wow fadeIn">
                        <div class="item-head">
                            <img src="assets/images/hair-salon.png" alt="">
                        </div><!-- item-body -->

                        <div class="item-footer">
                            <p class="work-description">こちら英語ですが、美容院のデモサイトです。予約機能・管理、お客様の会員登録機能やログイン機能、クーポンの発行、従業員のシフト管理など美容院サイトに必要な様々な機能を追加しております。</p>
                        </div>

                    </a><!--/works-item-->

                    <a href="https://30days-trial-test.hokton.mixh.jp/" class="works-item wow fadeIn">
                        <div class="item-head">
                            <img src="assets/images/daily-trial.png" alt="">
                        </div><!-- item-body -->

                        <div class="item-footer">
                            <p class="work-description">オンラインプログラミングスクール「デイトラ」の課題の一つです。WordPressを使って動的に表示しています。お客様によるニュース記事の投稿、公演スケジュールやキャストなどの追加ができます。</p>
                        </div>

                    </a><!--/works-item-->

                </div><!--/works-list-->

            </div><!--/container-->
        </section><!--/works-->

        <section id="contact" class="wow fadeIn">
            <div class="container clear">
                <h2 class="section-title">お問い合わせ</h2>

                <div class="faq">
                    <h5 class="faq-title">よくある質問</h5>

                    <div class="faq-item">
                        <div class="faq-q">
                            <p class="question"><i class="fas fa-plus"></i>なぜ低価格なのか？</p>
                        </div>
                        <div class="faq-a">
                            <p class="answer">Webサイト作成～公開に必要な行程を全て一人で行っており、無駄な人件費を取る必要がないため低価格でのご案内が可能となっております。</p>
                        </div>
                    </div><!-- /faq-item -->

                    <div class="faq-item">
                        <div class="faq-q">
                            <p class="question"><i class="fas fa-plus"></i>納期はどのくらいか？</p>
                        </div>
                        <div class="faq-a">
                            <p class="answer">「デザイン・作成」でしたら最短1週間、WordPress化とシステム構築は最短2週間となっています。ただお客様のご要望により工数が多くなる場合はさらにお時間をいただきます。</p>
                        </div>
                    </div><!-- /faq-item -->

                    <div class="faq-item">
                        <div class="faq-q">
                            <p class="question"><i class="fas fa-plus"></i>Big Dipperとは？</p>
                        </div>
                        <div class="faq-a">
                            <p class="answer">Big Dipperは星座のおおぐま座の一部である北斗七星のことです。大昔の旅人は北斗七星を利用して北極星を見つけて方角を探していました。星の北斗七星のように人の役に立ち続けたいという意味が込められています。</p>
                        </div>
                    </div><!-- /faq-item -->

                </div><!--/ faq -->

                <div class="footer-form">
                    <form action="functions.php" method="post">
                        
                        <input type="text" name="name" id="" placeholder="お名前(会社名)" required>
                        <input type="email" name="email" id="" placeholder="メールアドレス" required>
                        <textarea name="message" id="" cols="30" rows="10" placeholder="お問い合わせ内容" required></textarea>
                        
                        <input type="submit" value="送信" id="footer-form-btn" name="footer-submit" class="cta-btn">
                        
                    </form>
                </div><!-- footer-form -->

            </div><!--/container-->
        </section><!--/contact-->

    </main>

    <footer>
        <div class="container">
            <p class="copyright">&copy; 2020 Big Dipper all reserved</p>
        </div>
    </footer>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
        new WOW().init();
    </script>
</body>
</html>