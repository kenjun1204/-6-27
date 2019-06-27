<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
  <script src="http://code.jquery.com/jquery.min.js"></script>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ADHD転職サイト</legend>
     <label>姓：<input type="text" name="lastName" size="5"></label><br>
     <label>名：<input type="text" name="firstName" size="5"></label><br>
     <label>Email：<input type="text" name="email"></label><br>
     <label>パスワード：<input type="text" name="password"></label><br>
     <label>いつまでに転職したいですか？：<select name="jobChangeDuration">
     <option value="soon">いますぐに</option>
     <option value="3months">3ヶ月後までに</option>
     <option value="6months">半年後までに</option>
     <option value="1year">1年後までに</option>
     <option value="mitei">未定</option>
     </select>
     </label><br>
     <!-- プルダウン -->
     <label>経験社数を教えてください：<select name="companyCount">
     <option value="0">0社</option>
     <option value="1">1社</option>
     <option value="2">2社</option>
     <option value="3">3社</option>
     <option value="3more">3社以上</option>
     </select>
     </label><br>
       <!-- プルダウン -->
     <label>生年月日を教えてください：
     <select id="year" name="year"><option value="0">----</option></select>年
     <select id="month" name="month"><option value="0">--</option></select>月
     <select id="day" name="day"><option value="0">--</option></select>日​
     <script>
     var time = new Date();
     var year = time.getFullYear();
     for (var i = year; i >= 1900; i--) {
         $('#year').append('<option value="' + i + '">' + i + '</option>');
     }
     for (var i = 1; i <= 12; i++) {
         $('#month').append('<option value="' + i + '">' + i + '</option>');
     }
     for (var i = 1; i <= 31; i++) {
         $('#day').append('<option value="' + i + '">' + i + '</option>');
     }
     </script>
     <!-- <input type="text" name="birthday"> -->
     </label><br>
     <!-- プルダウン -->
     <label>性別：<select name="sex">
     <option value="male">男性</option>
     <option value="female">女性</option>
     </select>
     </label><br>
          <!-- プルダウン -->
     <!-- ▼郵便番号入力フィールド(3桁+4桁) -->
     <label>郵便番号:<input type="text" name="zip31" size="4" maxlength="3"> － <input type="text" name="zip32" size="5" maxlength="4" onKeyUp="AjaxZip3.zip2addr('zip31','zip32','pref31','addr31','addr31','addr32');"></label><br>
     <!-- ▼住所入力フィールド(都道府県) -->
     <label>都道府県:<input type="text" name="pref31" size="20"></label><br>
     <!-- ▼住所入力フィールド(都道府県以降の住所) -->
     <label>市町村:<input type="text" name="addr31" size="40"></label><br>
     <label>市町村以下:<input type="text" name="addr32" size="40"></label><br>
     <!-- 郵便番号の自動入力 -->
     <label>電話番号：<input type="text" name="phoneNumber"></label><br>
     <label>最終学歴：<input type="text" name="educationName"></label><br>
     <label>直近の職種：<input type="text" name="jobType"></label><br>
     <label>直近の業種：<input type="text" name="businessType"></label><br>
     <label>スキル：<input type="text" name="wl"></label><br>
     <label>ADHDスキル：<input type="text" name="ADHD"></label><br>
     
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
