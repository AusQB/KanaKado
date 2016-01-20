<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>KanaKado 仮名カード | Hiragana and Katakana Reference Charts</title>
    <meta name="keywords" content="japanese, learn japanese, language, hiragana, katakana, reference">
    <meta name="description" content="Simple, interactive reference charts for Japanese beginners. All hiragana and katakana characters including diacritics and combinations.">
    
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="initial-scale=1.0">
    
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="KanaKado">

    <link rel="shortcut icon" href="img/icons/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/icons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="img/icons/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/icons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="img/icons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="img/icons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="img/icons/apple-touch-icon-152x152.png" />
    
    <!-- Apple Startup Image -->
    <link rel="apple-touch-startup-image" href="img/apple/apple-touch-startup-image.png">
    <!-- Apple Startup Image - Retina -->
    <link rel="apple-touch-startup-image" href="img/apple/apple-touch-startup-image-640x920.png" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)">
    <!-- Apple Startup Image - iPhone 5 -->
    <link rel="apple-touch-startup-image" href="img/apple/apple-touch-startup-image-640x1096.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)">
    
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/main.css?v=1.0">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body class="black hiragino">
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    
    <div id="loading">
    
    	<div id="gears">
    		<i id="cog1" class="icon-cog icon-spin"></i>
    		<i id="cog2" class="icon-cog icon-spin icon-spin-reverse"></i>
    		<i id="cog3" class="icon-cog icon-spin"></i>
        </div>
    
    </div>
    
    <div id="menu-btn"><i class="icon-reorder"></i></div>
        
    <div id="menu" class="closed">
    
    	<p>Change chart</p>
        
        <ul>
            <li class="btn chart-btn active" data-chart="basic">Basic<i class="icon-ok"></i></li>
            <li class="btn chart-btn" data-chart="diacritics">Diacritics<i class="icon-ok"></i></li>
            <li class="btn chart-btn" data-chart="diagraphs">Diagraphs<i class="icon-ok"></i></li>
            <li class="btn chart-btn" data-chart="diacritic-diagraphs">Diacritic<br>Diagraphs<i class="icon-ok"></i></li>
        </ul>
    
        <p>Change characters</p>
        
        <ul>
            <li class="btn charset-btn active" data-charset="hiragana">Hiragana<i class="icon-ok"></i></li>
            <li class="btn charset-btn" data-charset="katakana">Katakana<i class="icon-ok"></i></li>
        </ul>
        
        <p>Change theme</p>
        
        <ul>
            <li class="btn theme-btn active" data-card-theme="black">Black<i class="icon-ok"></i></li>
            <li class="btn theme-btn" data-card-theme="white">White<i class="icon-ok"></i></li>
            <li class="btn theme-btn" data-card-theme="parchment">Parchment<i class="icon-ok"></i></li>
        </ul>
        
        <p>Change font</p>
        
        <ul>
            <li class="btn font-btn active" data-font="hiragino">Hiragino<i class="icon-ok"></i></li>
            <li class="btn font-btn" data-font="osaka">Osaka<i class="icon-ok"></i></li>
            <li class="btn font-btn" data-font="meiryo">Meiryo<i class="icon-ok"></i></li>
            <li class="btn font-btn" data-font="gothic">Gothic<i class="icon-ok"></i></li>
        </ul>
        
        <p id="sakura"><i class="icon-leaf"></i></p>
        
        <div id="copyright">
        
            <div id="logo">
            
            </div>
            
            <div id="rgg">
            
            </div>
            
            <p>&copy; 2013 RGG Web Designs</p>
            
        </div>
    
    </div>
    
    <div id="basic" data-role="page" class="page active">
    
        <div class="deck clearfix">
        
            <section class="vowels clearfix">
                <div class="empty"></div>
                <div class="header"><span>a</span></div>
                <div class="header"><span>i</span></div>
                <div class="header"><span>u</span></div>
                <div class="header"><span>e</span></div>
                <div class="header"><span>o</span></div>
            </section>
        
            <section class="clearfix">
                <div class="empty"></div>
                <div id="a" data-hiragana="あ" data-katakana="ア"><span>あ</span></div>
                <div id="i" data-hiragana="い" data-katakana="イ"><span>い</span></div>
                <div id="u" data-hiragana="う" data-katakana="ウ"><span>う</span></div>
                <div id="e" data-hiragana="え" data-katakana="エ"><span>え</span></div>
                <div id="o" data-hiragana="お" data-katakana="オ"><span>お</span></div>
            </section>
            
            <section class="clearfix">
                <div class="header"><span>k</span></div>
                <div id="ka" data-hiragana="か" data-katakana="カ"><span>か</span></div>
                <div id="ki" data-hiragana="き" data-katakana="キ"><span>き</span></div>
                <div id="ku" data-hiragana="く" data-katakana="ク"><span>く</span></div>
                <div id="ke" data-hiragana="け" data-katakana="ケ"><span>け</span></div>
                <div id="ko" data-hiragana="こ" data-katakana="コ"><span>こ</span></div>
            </section>
            
            <section class="clearfix">
                <div class="header"><span>s</span></div>
                <div id="sa" data-hiragana="さ" data-katakana="サ"><span>さ</span></div>
                <div id="shi" data-hiragana="し" data-katakana="シ"><span>し</span></div>
                <div id="su" data-hiragana="す" data-katakana="ス"><span>す</span></div>
                <div id="se" data-hiragana="せ" data-katakana="セ"><span>せ</span></div>
                <div id="so" data-hiragana="そ" data-katakana="ソ"><span>そ</span></div>
            </section>
            
            <section class="clearfix">
                <div class="header"><span>t</span></div>
                <div id="ta" data-hiragana="た" data-katakana="タ"><span>た</span></div>
                <div id="chi" data-hiragana="ち" data-katakana="チ"><span>ち</span></div>
                <div id="tsu" data-hiragana="つ" data-katakana="ツ"><span>つ</span></div>
                <div id="te" data-hiragana="て" data-katakana="テ"><span>て</span></div>
                <div id="to" data-hiragana="と" data-katakana="ト"><span>と</span></div>
            </section>
            
            <section class="clearfix">
                <div class="header"><span>n</span></div>
                <div id="na" data-hiragana="な" data-katakana="ナ"><span>な</span></div>
                <div id="ni" data-hiragana="に" data-katakana="ニ"><span>に</span></div>
                <div id="nu" data-hiragana="ぬ" data-katakana="ヌ"><span>ぬ</span></div>
                <div id="ne" data-hiragana="ね" data-katakana="ネ"><span>ね</span></div>
                <div id="no" data-hiragana="の" data-katakana="ノ"><span>の</span></div>
            </section>
            
            <section class="clearfix">
                <div class="header"><span>h</span></div>
                <div id="ha" data-hiragana="は" data-katakana="ハ"><span>は</span></div>
                <div id="hi" data-hiragana="ひ" data-katakana="ヒ"><span>ひ</span></div>
                <div id="fu" data-hiragana="ふ" data-katakana="フ"><span>ふ</span></div>
                <div id="he" data-hiragana="へ" data-katakana="ヘ"><span>へ</span></div>
                <div id="ho" data-hiragana="ほ" data-katakana="ホ"><span>ほ</span></div>
            </section>
            
            <section class="clearfix">
                <div class="header"><span>m</span></div>
                <div id="ma" data-hiragana="ま" data-katakana="マ"><span>ま</span></div>
                <div id="mi" data-hiragana="み" data-katakana="ミ"><span>み</span></div>
                <div id="mu" data-hiragana="む" data-katakana="ム"><span>む</span></div>
                <div id="me" data-hiragana="め" data-katakana="メ"><span>め</span></div>
                <div id="mo" data-hiragana="も" data-katakana="モ"><span>も</span></div>
            </section>
            
            <section class="clearfix">
                <div class="header"><span>y</span></div>
                <div id="ya" data-hiragana="や" data-katakana="ヤ"><span>や</span></div>
                <div class="empty"></div>
                <div id="yu" data-hiragana="ゆ" data-katakana="ユ"><span>ゆ</span></div>
                <div class="empty"></div>
                <div id="yo" data-hiragana="よ" data-katakana="ヨ"><span>よ</span></div>
            </section>
            
            <section class="clearfix">
                <div class="header"><span>r</span></div>
                <div id="ra" data-hiragana="ら" data-katakana="ラ"><span>ら</span></div>
                <div id="ri" data-hiragana="り" data-katakana="リ"><span>り</span></div>
                <div id="ru" data-hiragana="る" data-katakana="ル"><span>る</span></div>
                <div id="re" data-hiragana="れ" data-katakana="レ"><span>れ</span></div>
                <div id="ro" data-hiragana="ろ" data-katakana="ロ"><span>ろ</span></div>
            </section>
            
            <section class="clearfix">
                <div class="header"><span>w</span></div>
                <div id="wa" data-hiragana="わ" data-katakana="ワ"><span>わ</span></div>
                <div class="empty"></div>
                <div class="empty"></div>
                <div class="empty"></div>
                <div id="wo" data-hiragana="を" data-katakana="ヲ"><span>を</span></div>
            </section>
            
            <section class="clearfix">
                <div class="header"><span>n</span></div>
                <div id="n" data-hiragana="ん" data-katakana="ン"><span>ん</span></div>
                <div class="empty"></div>
                <div class="empty"></div>
                <div class="empty"></div>
                <div class="empty"></div>
            </section>
        
        </div>
        
    </div>
    
    <div id="diacritics" data-role="page" class="page">
    
        <div class="deck clearfix">
        
            <section class="vowels clearfix">
                <div class="empty"></div>
                <div class="header"><span>a</span></div>
                <div class="header"><span>i</span></div>
                <div class="header"><span>u</span></div>
                <div class="header"><span>e</span></div>
                <div class="header"><span>o</span></div>
            </section>
        
            <section class="clearfix">
                <div class="header"><span>g</span></div>
                <div id="ga" data-hiragana="が" data-katakana="ガ"><span>が</span></div>
                <div id="gi" data-hiragana="ぎ" data-katakana="ギ"><span>ぎ</span></div>
                <div id="gu" data-hiragana="ぐ" data-katakana="グ"><span>ぐ</span></div>
                <div id="ge" data-hiragana="げ" data-katakana="ゲ"><span>げ</span></div>
                <div id="go" data-hiragana="ご" data-katakana="ゴ"><span>ご</span></div>
            </section>
            
            <section class="clearfix">
                <div class="header"><span>z</span></div>
                <div id="za" data-hiragana="ざ" data-katakana="ザ"><span>ざ</span></div>
                <div id="ji" data-hiragana="じ" data-katakana="ジ"><span>じ</span></div>
                <div id="zu" data-hiragana="ず" data-katakana="ズ"><span>ず</span></div>
                <div id="ze" data-hiragana="ぜ" data-katakana="ゼ"><span>ぜ</span></div>
                <div id="zo" data-hiragana="ぞ" data-katakana="ゾ"><span>ぞ</span></div>
            </section>
            
            <section class="clearfix">
                <div class="header"><span>d</span></div>
                <div id="da" data-hiragana="だ" data-katakana="ダ"><span>だ</span></div>
                <div id="ji" data-hiragana="ぢ" data-katakana="ヂ"><span>ぢ</span></div>
                <div id="zu" data-hiragana="づ" data-katakana="ヅ"><span>づ</span></div>
                <div id="de" data-hiragana="で" data-katakana="デ"><span>で</span></div>
                <div id="do" data-hiragana="ど" data-katakana="ド"><span>ど</span></div>
            </section>
            
            <section class="clearfix">
                <div class="header"><span>b</span></div>
                <div id="ba" data-hiragana="ば" data-katakana="バ"><span>ば</span></div>
                <div id="bi" data-hiragana="び" data-katakana="ビ"><span>び</span></div>
                <div id="bu" data-hiragana="ぶ" data-katakana="ブ"><span>ぶ</span></div>
                <div id="be" data-hiragana="べ" data-katakana="ベ"><span>べ</span></div>
                <div id="bo" data-hiragana="ぼ" data-katakana="ボ"><span>ぼ</span></div>
            </section>
            
            <section class="clearfix">
                <div class="header"><span>p</span></div>
                <div id="pa" data-hiragana="ぱ" data-katakana="パ"><span>ぱ</span></div>
                <div id="pi" data-hiragana="ぴ" data-katakana="ピ"><span>ぴ</span></div>
                <div id="pu" data-hiragana="ぷ" data-katakana="プ"><span>ぷ</span></div>
                <div id="pe" data-hiragana="ぺ" data-katakana="ペ"><span>ぺ</span></div>
                <div id="po" data-hiragana="ぽ" data-katakana="ポ"><span>ぽ</span></div>
            </section>
        
        </div>
        
    </div>
    
    <div id="diagraphs" data-role="page" class="page">
    
        <div class="deck clearfix">
        
            <section class="vowels clearfix">
                <div class="empty"></div>
                <div class="header"><span>a</span></div>
                <div class="header"><span>u</span></div>
                <div class="header"><span>o</span></div>
            </section>
            
            <section class="clearfix">
                <div class="header"><span>ky</span></div>
                <div id="kya" data-hiragana="き<span>や</span>" data-katakana="キ<span>ヤ</span>"><span>き<span>や</span></span></div>
                <div id="kyu" data-hiragana="き<span>ゆ</span>" data-katakana="キ<span>ユ</span>"><span>き<span>ゆ</span></span></div>
                <div id="kyo" data-hiragana="き<span>よ</span>" data-katakana="キ<span>ヨ</span>"><span>き<span>よ</span></span></div>
            </section>
            
            <section class="clearfix">
                <div class="header"><span>sh</span></div>
                <div id="sha" data-hiragana="し<span>や</span>" data-katakana="シ<span>ヤ</span>"><span>し<span>や</span></span></div>
                <div id="shu" data-hiragana="し<span>ゆ</span>" data-katakana="シ<span>ユ</span>"><span>し<span>ゆ</span></span></div>
                <div id="sho" data-hiragana="し<span>よ</span>" data-katakana="シ<span>ヨ</span>"><span>し<span>よ</span></span></div>
            </section>
            
            <section class="clearfix">
                <div class="header"><span>ch</span></div>
                <div id="cha" data-hiragana="ち<span>や</span>" data-katakana="チ<span>ヤ</span>"><span>ち<span>や</span></span></div>
                <div id="chu" data-hiragana="ち<span>ゆ</span>" data-katakana="チ<span>ユ</span>"><span>ち<span>ゆ</span></span></div>
                <div id="cho" data-hiragana="ち<span>よ</span>" data-katakana="チ<span>ヨ</span>"><span>ち<span>よ</span></span></div>
            </section>
            
            <section class="clearfix">
                <div class="header"><span>ny</span></div>
                <div id="nya" data-hiragana="に<span>や</span>" data-katakana="ニ<span>ヤ</span>"><span>に<span>や</span></span></div>
                <div id="nyu" data-hiragana="に<span>ゆ</span>" data-katakana="ニ<span>ユ</span>"><span>に<span>ゆ</span></span></div>
                <div id="nyo" data-hiragana="に<span>よ</span>" data-katakana="ニ<span>ヨ</span>"><span>に<span>よ</span></span></div>
            </section>
            
            <section class="clearfix">
                <div class="header"><span>hy</span></div>
                <div id="hya" data-hiragana="ひ<span>や</span>" data-katakana="ヒ<span>ヤ</span>"><span>ひ<span>や</span></span></div>
                <div id="hyu" data-hiragana="ひ<span>ゆ</span>" data-katakana="ヒ<span>ユ</span>"><span>ひ<span>ゆ</span></span></div>
                <div id="hyo" data-hiragana="ひ<span>よ</span>" data-katakana="ヒ<span>ヨ</span>"><span>ひ<span>よ</span></span></div>
            </section>
            
            <section class="clearfix">
                <div class="header"><span>my</span></div>
                <div id="mya" data-hiragana="み<span>や</span>" data-katakana="ミ<span>ヤ</span>"><span>み<span>や</span></span></div>
                <div id="myu" data-hiragana="み<span>ゆ</span>" data-katakana="ミ<span>ユ</span>"><span>み<span>ゆ</span></span></div>
                <div id="myo" data-hiragana="み<span>よ</span>" data-katakana="ミ<span>ヨ</span>"><span>み<span>よ</span></span></div>
            </section>
            
            <section class="clearfix">
                <div class="header"><span>ry</span></div>
                <div id="rya" data-hiragana="り<span>や</span>" data-katakana="リ<span>ヤ</span>"><span>り<span>や</span></span></div>
                <div id="ryu" data-hiragana="り<span>ゆ</span>" data-katakana="リ<span>ユ</span>"><span>り<span>ゆ</span></span></div>
                <div id="ryo" data-hiragana="り<span>よ</span>" data-katakana="リ<span>ヨ</span>"><span>り<span>よ</span></span></div>
            </section>
        
        </div>
        
    </div>
    
    <div id="diacritic-diagraphs" data-role="page" class="page">
    
        <div class="deck clearfix">
        
            <section class="vowels clearfix">
                <div class="empty"></div>
                <div class="header"><span>a</span></div>
                <div class="header"><span>u</span></div>
                <div class="header"><span>o</span></div>
            </section>
            
            <section class="clearfix">
                <div class="header"><span>gy</span></div>
                <div id="gya" data-hiragana="ぎ<span>や</span>" data-katakana="ギ<span>ヤ</span>"><span>ぎ<span>や</span></span></div>
                <div id="gyu" data-hiragana="ぎ<span>ゆ</span>" data-katakana="ギ<span>ユ</span>"><span>ぎ<span>ゆ</span></span></div>
                <div id="gyo" data-hiragana="ぎ<span>よ</span>" data-katakana="ギ<span>ヨ</span>"><span>ぎ<span>よ</span></span></div>
            </section>
            
            <section class="clearfix">
                <div class="header"><span>j</span></div>
                <div id="ja" data-hiragana="じ<span>や</span>" data-katakana="ジ<span>ヤ</span>"><span>じ<span>や</span></span></div>
                <div id="ju" data-hiragana="じ<span>ゆ</span>" data-katakana="ジ<span>ユ</span>"><span>じ<span>ゆ</span></span></div>
                <div id="jo" data-hiragana="じ<span>よ</span>" data-katakana="ジ<span>ヨ</span>"><span>じ<span>よ</span></span></div>
            </section>
            
            <section class="clearfix">
                <div class="header"><span>by</span></div>
                <div id="bya" data-hiragana="び<span>や</span>" data-katakana="ビ<span>ヤ</span>"><span>び<span>や</span></span></div>
                <div id="byu" data-hiragana="び<span>ゆ</span>" data-katakana="ビ<span>ユ</span>"><span>び<span>ゆ</span></span></div>
                <div id="byo" data-hiragana="び<span>よ</span>" data-katakana="ビ<span>ヨ</span>"><span>び<span>よ</span></span></div>
            </section>
            
            <section class="clearfix">
                <div class="header"><span>py</span></div>
                <div id="pya" data-hiragana="ぴ<span>や</span>" data-katakana="ピ<span>ヤ</span>"><span>ぴ<span>や</span></span></div>
                <div id="pyu" data-hiragana="ぴ<span>ゆ</span>" data-katakana="ピ<span>ユ</span>"><span>ぴ<span>ゆ</span></span></div>
                <div id="pyo" data-hiragana="ぴ<span>よ</span>" data-katakana="ピ<span>ヨ</span>"><span>ぴ<span>よ</span></span></div>
            </section>
        
        </div>
        
    </div>
    
    <div id="card-overlay"></div>
    
    <div id="sakura-start"></div>
    
    <audio id="sakura-music" loop>
        <source src="media/sakura.mp3" type="audio/mpeg">
        <source src="media/sakura.ogg" type="audio/ogg">
    </audio>

 	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <!--
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-ui.min.js"><\/script>')</script>-->
    
    <script src="js/main.js?v=1.0"></script>

    <script>
        var _gaq=[['_setAccount','UA-43706508-1'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src='//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
</body>
</html>
