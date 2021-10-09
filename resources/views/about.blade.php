<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <link rel="stylesheet" href="{{ mix('css/about.css') }}" />
    <!-- <title>Document</title> -->
</head>


<body>
    @include("parts.common", [ "title" => "8COLOGYとは | えころじー | プラスチックごみ削減" ])
    @include("parts.header")
    <main>
        <!-- identity -->
        <!-- <div class="image"> -->
        <div style="text-align:center;" class="ident">
            <img class="identity" src="img/identity.png" alt="identity">
            <p class="identity_text" id="btn_center">
                <img src="img/8plusecology.png" alt="8plusecology">
                ロゴマークのコンセプトは、無限に続く自然環境保護活動。<br>
                私たち8COLOGYの使命はもったいないをなくすということ。<br>
                ロゴマークの初めの一文字に、無限に続くを表現する8をデザインしました。<br>
            </p><br>
        </div>
        <!-- </div> -->
        <!-- infomation -->
        <div style="text-align:center;" class="info">
            <img class="infomation" src="img/infomation.png" alt="infomation">
            <p class="infomation_text" id="btn_center">
                組織名：8COLOGY<br>
                代表：難波 佳代子<br>
            </p>
        </div>

    </main>
    @include("parts.footer")
</body>

</html>