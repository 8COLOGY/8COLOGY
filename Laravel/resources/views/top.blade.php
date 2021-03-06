<!DOCTYPE html>
<html lang="ja">
<!--                                                                        
+-+-+-+-+-+-+-+
|8|C|O|L|O|G|Y|
+-+-+-+-+-+-+-+                                                                     
 -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/style.css') }}" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <meta name="keywords" content="えころじー,8cology,ecology,プラスチックリサイクル,プラスチックごみ,廃プラスチック削減">
    <meta name="description" content="8COLOGYは、廃プラスチック削減を推進するサービスです。世の中のもったいないをなくしたい。ごみが少ない世界を作りたい。そんな思いから、8COLOGYは廃プラスチックの再生資源化を推進するためのサービスを提供しています。">

</head>

<body>
    @include("parts.common")
    @include("parts.header")
    <!-- Topロゴ -->
    <section id="section_top">
        <div class="toplogo">
            <img style="max-width: 100%; height: auto;" src="img/logo_l.png" alt="toplogo" class="d-block mx-auto img-fluid">
        </div>
    </section>
    <!-- Topイメージ -->
    <img src="img/topimg.png" class="topimage d-block mx-auto img-fluid" alt="Responsive image">
    <label id="btn_center" for="trigger" class="open_btn_now">今すぐリサイクルを始める</label>
    <label id="btn_center" for="trigger" class="open_btn_login_center">>>ログイン</label>
    <!-- 8COLOGYについて -->
    <div class="about">
        <section id="section_about">
            <h3 class=”text_title”><span style="color:forestgreen;">ABOUT</span></h3>
            <h4 class=”text_subtitle_about”>8COLOGYとは</h4>
            <div class="text_title_details_about">
                <p>
                <p class="fw-bold">8COLOGYは、廃プラスチックのリサイクルを推進するサービスです。</p>
                <br>世の中のもったいないをなくしたい。
                <span>ごみが少ない世界を作りたい。</span>
                <br>大きな時代の変化の中で、廃プラスチックの<span>再生資源化を推進していきたい。</span>
                <br>そんな思いから、<span>「8COLOGY」は歩みを始めています。</span>
                <br>地球環境の目の敵にされがちなプラスチック。
                <span>元来は石油由来の貴重な資源です。</span>
                <br>廃プラスチックの<span>安易な焼却・埋め立てを行わず、</span>
                <span>リサイクルによる資源循環が進めば、</span>
                <br>持続可能な社会の一端を担う素材として<span>活用が期待できます。</span>
                </p>
            </div>
        </section>
    </div>
    <!-- 数字でみる8COLOGY -->
    <div class="infog">
        <section id="section_infog">
            <h3 class=”text_title”><span style="color:forestgreen;">INFOGRAPHICS</span></h3>
            <h4>数字でみる8COLOGYの活動</h4>
            <p>これまでに回収したプラスチック容器の重さは…</p>
            <h3><span style="color:forestgreen;" class="count">12345</span>トン</h3>
        </section>
    </div>

    <div class="howto">
        <section id="section_howto">
            <h3 class=”text_title”><span style="color:forestgreen;">HOW TO</span></h3>
            <h4>リサイクルのやり方</h4>
            <div class="container-fluid">
                <!-- <div class="row"> -->
                <div class="parent">
                    <!-- <div class="col-md-3"> -->
                    <div class="child">
                        <h4 class="step howto_fonts" style="color:forestgreen;">STEP1</h4><img src="img/wash.png" alt="news_img" width="350" height="350" class="rounded">
                        <div class="news_details">
                            <dl>
                                <dt class="fw-bold">1.プラスチック容器をよく洗う</dt>
                            </dl>
                        </div>
                    </div>
                    <!-- <div class="col-md-3"> -->
                    <div class="child">
                        <h4 class="step howto_fonts" style="color:forestgreen;">STEP2</h4><img src="img/search_dustbox.png" alt="news_img" width="320" height="350" class="rounded">
                        <div class="news_details">
                            <dl>
                                <dt class="fw-bold">2.近くの回収BOXを探す</dt>
                            </dl>
                        </div>
                    </div>
                    <!-- <div class="col-md-3"> -->
                    <div class="child">
                        <h4 class="step howto_fonts" style="color:forestgreen;">STEP3</h4><img src="img/dustbox.png" alt="news_img" width="400" height="350" class="rounded">
                        <div class="news_details">
                            <dl>
                                <dt class="fw-bold">3.回収BOXに使用済みプラスチック容器を入れる</dt>
                            </dl>
                        </div>
                    </div>
                    <!-- <div class="col-md-3">
                         -->
                    <div class="child">
                        <h4 class="step" style="color:forestgreen;">STEP4</h4><img src="img/shopcard.png" alt="news_img" width="350" height="350" class="rounded">
                        <div class="news_details">
                            <dl>
                                <dt class="fw-bold">4.POINT獲得！</dt>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include("parts.footer")
    <!-- 数字のカウントアップjs -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $('.count').each(function() {
            $(this).prop('c', 0).animate({
                c: $(this).text()
            }, {
                duration: 3000,
                easing: 'linear',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>
</body>

</html>