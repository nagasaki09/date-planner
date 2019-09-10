<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="https://templates.pingendo.com/assets/Pingendo_favicon.ico">
  <title>Conference Aquamarine - Pingendo template</title>
  <meta name="description" content="Free Bootstrap 4 Pingendo Aquamarine template for unique events.">
  <meta name="keywords" content="Pingendo conference event aquamarine free template bootstrap 4">
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="/css/aquamarine.css">
  <link rel="stylesheet" href="/css/oliginal.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/dark.css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="js/navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
  <script src="js/animate-in.js"></script>
</head>

<body class="text-center">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md fixed-top bg-dark navbar-dark">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item mx-2">
            <a class="nav-link" href="/">トップページ</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#restaurant">飲食店を検索</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#kankou">観光地を検索</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item mx-2">
            <a class="nav-link" href="#plan">プランを提案</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Cover -->


  <nav class="navbar navbar-expand-lg navbar-light py-5"　 >
      <div class="container"> <a class="navbar-brand text-primary" href="#">
          <i class="fa d-inline fa-lg fa-circle-o"></i>
          <b> 1-50件を表示 (2525件中)</b>
        </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar5">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar5">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"> <a class="nav-link" href="#">おすすめ順</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">評価順</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">関連順</a> </li>
          </ul> <a class="btn btn-outline-primary navbar-btn ml-md-2">マッチング順</a>
        </div>
      </div>
    </nav>

@foreach($data as $data1)
  <div class="pt-5 border-bottom border-top border-dark" >
      <div class="container">
        <div class="row">
          <div class="col-md-4 mr-auto order-2 order-md-1"> <img class="img-fluid d-block" src="/jpg/food_{{$data1->id}}.jpg" style="	transform:  translateX(30px)  translateY(-10px) ;"> </div>
          <div class="px-md-5 p-3 d-flex flex-column align-items-start justify-content-center col-md-7 order-1 order-md-2">
            <h1><a href="detail/{{$data1->id}}">{{$data1->name}}</a></h1>
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex"><i class="fa fa-bookmark text-primary mr-2"></i>お問い合わせ：{{$data1->tel}}</li>
              <li class="list-group-item d-flex"><i class="fa fa-bell text-primary mr-2"></i>住所：{{$data1->prefecture}}</li>
              <li class="list-group-item d-flex"><i class="fa fa-life-ring text-primary mr-2"></i>価格：{{$data1->price}}</li>
              <li class="list-group-item d-flex"><i class="fa fa-paper-plane text-primary mr-2"></i>営業時間：{{$data1->time}}</li>
            </ul>
            <div class="row text-muted">
              <div class="col-12 p-2"> <i class="d-inline fa fa-bed fa-2x"></i> <i class="d-inline fa fa-bolt fa-2x mx-4"></i> <i class="d-inline fa fa-ban fa-2x"></i> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endforeach


  <!-- Schedule -->
  <div class="py-5 section-parallax d-flex border-bottom border-dark" id="restaurant" style="background-image: url(&quot;assets/conference/venue.jpg&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="">
          <h2 class="" contenteditable="true">飲食店を検索</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="py-4 section-parallax d-flex" style="background-image: url(&quot;assets/conference/venue.jpg&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="">
          <h3 class="border-bottom" contenteditable="true">雰囲気の選択</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="py-4 section-parallax d-flex" style="padding-left: 50px;">
    <form class="py-1 section-parallax d-flex" method="POST" action="{{url('foodlist')}}">
      {{ csrf_field() }}
    <div class="container">
      <div class="row">
        <div class="col-md-6" style=""><input type="radio" id="1" value="1" name="food" ><label for="1">
    <img src="/jpg/image1.jpeg" style="height:300px; width:300px; border-radius: 50%;">
  </label></div>
        <div class="col-md-6"><input type="radio" id="2" value="2" name="food" ><label for="2">
    <img src="/jpg/image2.jpg" style="height:300px; width:300px; border-radius: 50%;">
  </label></div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6" style=""><input type="radio" id="3" value="3" name="food" ><label for="3">
    <img src="/jpg/image3.jpg" style="height:300px; width:300px; border-radius: 50%;">
  </label></div>
        <div class="col-md-6"><input type="radio" id="4" value="4" name="food" ><label for="4">
    <img src="/jpg/image4.jpg" style="height:300px; width:300px; border-radius: 50%;">
  </label></div>
      </div>
    </div>
  </div>

  <div class="py-4 border-bottom border-dark" >
    <div class="container">
      <div class="row">
        <div class="col-md-12"><select name="pre" id="pre" style="font-size:20px; border:1px;">

  <option value="">選択してください</option>
  <option value="北海道">北海道</option>
  <option value="青森県">青森県</option>
  <option value="岩手県">岩手県</option>
  <option value="宮城県">宮城県</option>
  <option value="秋田県">秋田県</option>
  <option value="山形県">山形県</option>
  <option value="福島県">福島県</option>
  <option value="茨城県">茨城県</option>
  <option value="栃木県">栃木県</option>
  <option value="群馬県">群馬県</option>
  <option value="埼玉県">埼玉県</option>
  <option value="千葉県">千葉県</option>
  <option value="東京都" selected>東京都</option>
  <option value="神奈川県">神奈川県</option>
  <option value="新潟県">新潟県</option>
  <option value="富山県">富山県</option>
  <option value="石川県">石川県</option>
  <option value="福井県">福井県</option>
  <option value="山梨県">山梨県</option>
  <option value="長野県">長野県</option>
  <option value="岐阜県">岐阜県</option>
  <option value="静岡県">静岡県</option>
  <option value="愛知県">愛知県</option>
  <option value="三重県">三重県</option>
  <option value="滋賀県">滋賀県</option>
  <option value="京都府">京都府</option>
  <option value="大阪府">大阪府</option>
  <option value="兵庫県">兵庫県</option>
  <option value="奈良県">奈良県</option>
  <option value="和歌山県">和歌山県</option>
  <option value="鳥取県">鳥取県</option>
  <option value="島根県">島根県</option>
  <option value="岡山県">岡山県</option>
  <option value="広島県">広島県</option>
  <option value="山口県">山口県</option>
  <option value="徳島県">徳島県</option>
  <option value="香川県">香川県</option>
  <option value="愛媛県">愛媛県</option>
  <option value="高知県">高知県</option>
  <option value="福岡県">福岡県</option>
  <option value="佐賀県">佐賀県</option>
  <option value="長崎県">長崎県</option>
  <option value="熊本県">熊本県</option>
  <option value="大分県">大分県</option>
  <option value="宮崎県">宮崎県</option>
  <option value="鹿児島県">鹿児島県</option>
  <option value="沖縄県">沖縄県</option>
  </select>
  <input type="text" style="font-size: 150%;" id="calendarTEST" placeholder="日付選択">
  <select name="selectedate-h" id="selectedate-h" style="font-size:20px; border:1px;">
  <option value="00">00</option>
  <option value="01">01</option>
  <option value="02">02</option>
  <option value="03">03</option>
  <option value="04">04</option>
  <option value="05">05</option>
  <option value="06">06</option>
  <option value="07">07</option>
  <option value="08">08</option>
  <option value="09">09</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  </select><a>時</a>
  <select name="selectedate-m" id="selectedate-m" style="font-size:20px; border:1px;">
  <option value="00">00</option>
  <option value="05">05</option>
  <option value="10">10</option>
  <option value="15">15</option>
  <option value="20">20</option>
  <option value="25">25</option>
  <option value="30">30</option>
  <option value="35">35</option>
  <option value="40">40</option>
  <option value="45">45</option>
  <option value="50">50</option>
  <option value="55">55</option>

  </select>
  <a>分</a></div>

      </div>
      <div class="row">
        <div class="col-md-12"><div class="cp_ipcheck">
  <input type="checkbox" id="b_ch1" />
  <label for="b_ch1">個室</label>
  <input type="checkbox" id="b_ch2" />
  <label for="b_ch2">禁煙</label>
  <input type="checkbox" id="b_ch3" />
  <label for="b_ch3">カード利用</label>
  <input type="checkbox" id="b_ch４" />
  <label for="b_ch４">誕生日特典</label>
  <input type="checkbox" id="b_ch５" />
  <label for="b_ch５">飲み放題</label>
  <input type="checkbox" id="b_ch６" />
  <label for="b_ch６">雰囲気</label>
  </div></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"><a href="/foodlist"><button class=" btn btn-primary" type="submit" href="/foodlist">この条件で検索</button></a></div>
      </div>
    </div>
    </form>
  </div>


  <!-- Footer -->
  <footer class="text-md-left text-center p-4 bg-dark text-light">
    <div class="container">

    </div>
  </footer>
  <!-- JavaScript dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- Script: Smooth scrolling between anchors in the same page -->
  <script src="js/smooth-scroll.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js"></script>
<script>
    flatpickr.localize(flatpickr.l10ns.ja);
    flatpickr('#calendarTEST');
</script>
</body>

</html>
