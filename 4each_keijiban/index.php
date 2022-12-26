<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>掲示板</title>
</head>
<body>
    <?php
        mb_internal_encoding("utf8");

        $pdo = new PDO("mysql:dbname=lesson01; host=localhost;", "root", "mysql");
        $stmt = $pdo -> query("select * from 4each_keijiban");

        
    ?>
    <header>
        <img class="logo" src="img/4eachblog_logo.jpg" alt="">
        <ul class="header_menu">
            <script>
               var menu_list = ["トップ", "プロフィール", "4eachについて", "登録フォーム", "問い合わせ", "その他"];
               menu_list.forEach(menu => {
                    document.write("<li>" + menu + "</li>");
               });
            </script>
        </ul>
    </header>
    <main>
        <div class="left">
            <h1 class="contents_title">プログラミングに役立つ掲示板</h1>
            <form method="post" action="insert.php" class="form">
                <h2 class="form_title">入力フォーム</h2>
                <div>
                    <label>ハンドルネーム</label>
                    <br>
                    <input class="text" type="text" name="handlename">
                </div>
                <div>
                    <label>タイトル</label>
                    <br>
                    <input class="text" type="text" name="title">
                </div>
                <div>
                    <label>コメント</label>
                    <br>
                    <textarea name="comments" id="" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <input class="submit" type="submit" value="投稿する">
                </div>
            </form>
            <?php
                while($row = $stmt -> fetch()){
                    echo '<div class="form">';
                        echo '<h2 class="sub_title">'.$row["title"].'</h2>';
                        echo '<div class="keijiban">';
                            echo $row["comments"]."<br>";
                            echo '<p class="handlename">postet by '.$row["handlename"].'</p>';
                        echo '</div>';
                    echo '</div>';
                }
            ?>
        </div>
        <div class="right">
            <div>
                <h2>人気の記事</h2>
                <ul>
                    <li>PHPオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>いま人気のエディタTop5</li>
                    <li>HTMLの基礎</li>
                </ul>
            </div>
            <div>
                <h2>オススメリンク</h2>
                <ul>
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketのダウンロード</li>
                </ul>
            </div>
            <div>
                <h2>カテゴリ</h2>
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>
            </div>
        </div>
        
    </main>
    <footer>
        <p>copyright &copy; internous | 4each blog the which provides A to Z about programming.</p>
    </footer>
</body>
</html>