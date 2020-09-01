# ***サービス名***
  TenQuizApp
# ***動作確認用URL***
  ### URL
  => http://lessonshare.net/
  ### テストログイン用アカウント<br>
    email : lessontest01@gmail.com
    password : lessonpass01
# ***制作期間***
  2ヶ月
# ***サービス概要***
  このサービスは自分が食べたお気に入りのスイーツを他のユーザーに紹介したり、他のユーザーが紹介したスイーツをお気に入り登録できるサービスです。
  
# ***機能一覧***<br>
 ### 1.ユーザー登録機能<br>
 ### 2.ログイン機能<br>
 ### 3.ログアウト機能<br>
 ### 4.ドリル登録機能<br>
 ### 5.ドリル編集機能<br>
 ### 6.ドリル削除機能<br>
 ### 7.ドリル解答確認機能<br>
 ### 8.ドリルプレイ機能<br>
 
  
# ***ローカル開発環境、使用言語一覧***<br>
 1.HTML5<br>
 2.CSS3(Bootstrap)<br>
 5.PHP ver 7.3.7<br>
 6.Laravel ver 7.7.1
 6.MySQL ver 2.4.41<br>
 7.node ver 11.0.0<br>
 8.npm ver 6.14.4
 
# ***本番環境***<br>
 1.HTML5<br>
 2.CSS3(Bootstrap)<br>
 5.PHP ver 7.3.7<br>
 6.Laravel ver 7.7.1<br>
 6.MySQL ver 5.4<br>
 7.node ver 13.9.0<br>
 8.npm ver 6.13.7
  
# ***各画面の機能***<br>
## 1.ログイン機能(/login)<br>
    ログインしていない状態でサイトに接続すると表示画面。ログインボタンと会員登録ボタンが存在し、クリックすると該当するページに遷移する。

## 2.ユーザー登録画面(/register)<br>
    ユーザー名, メールアドレス, パスワード, パスワード再入力を全て入力し、会員登録ボタンを押すと会員登録することができる
    
## 3.問題集一覧表示画面(/drills)<br>
  
## 4.ログイン画面(login.php)<br>
    ・会員登録時(signup.php)に入力したメールアドレスとパスワードを入力し、両方が合っていればログイン成功となりマイページへ遷移する。
    ・ログアウトについては画面は用意せず、各画面の上部にあるヘッダーの右端にあるログアウトボタンを押すとログアウトできる

## 6.退会画面(withdraw.php)<br>
    ・退会画面を表示し、「退会する」ボタンを押した場合、新規訪問ページ(new.php)に遷移し、ログイン状態が解除される。
    ・退会したユーザーが使っていたメールアドレスとパスワードはログイン画面(login.php)では使えなくなっている。
   
## 7.パスワード変更画面(paddEdit.php)<br>
    ・パスワード変更画面では現在使っているパスワードと新規に登録したいパスワードを入力するとパスワードが入力した値に変更され、マイページ(mypage.php)に遷移する
    
## 8.マイページ画面(mypage.php)<br>
    ・マイページは他の画面に遷移するためのサイドバー(sidebar.php)とお気に入り登録されたスイーツの表示欄で構成されている。
    ・ホーム画面(home.php)からスイーツ詳細画面(sweetsDetail.php)に遷移し、そこでお気に入り登録ボタン（ハートマーク)を押したスイーツはここに表示される

## 9.投稿スイーツ確認画面(myRegistSweets.php)<br>
    ・投稿スイーツ確認画面では自分がスイーツ登録画面(registSweets.php)で登録したスイーツの一覧が表示される。
    ・既に投稿したスイーツの画像をクリックするとスイーツ登録（編集)画面に遷移し、一度登録したスイーツ名や値段、詳細などを編集することができる。
    
 ## 10.プロフィール編集画面(profEdit.php)<br>
    ・プロフィール編集画面では各項目(名前、住んでいる場所、メールアドレス、プロフィール画像)を入力し、設定ボタンを押すと更新され、マイページへ遷移する。
    
 ## 11.スイーツ登録(編集)画面(registSweets.php)<br>
    ・スイーツ登録画面ではスイーツの各項目を入力し、バリデーションを全て通過した場合は新規にスイーツが登録され、マイページ(mypege.php)に遷移する。
    ・登録したスイーツは投稿スイーツ確認画面(myRegistSweets.php)とホーム画面(home.php)で確認することができる。
    
 ## 12.スイーツ詳細画面(SweetsDetail.php)<br>
    ・ホーム画面(home.php)からスイーツの画像をクリックすると、この画面に遷移し、クリックしたスイーツの詳細画像を確認できる。
    ・画像2と画像3が登録されている場合は他の画像をクリックすると一番大きく表示されるメイン画像が入れ替わる。
    ・画面下部にはホーム画面(home.php)とマイページ(mypage.php)に遷移するためのボタンが設置されており、クリックするとそれぞれの画面に遷移する。
    
# ***画面を持たないもしくは他の画面を構成するファイルの機能***<br>
 ### 1.ヘッド(head.php)<br>
 ### 2.ヘッダー(header.php)<br>
 ### 3.フッター(footer.php)<br>
 ### 4.ログイン認証(auth.php)<br>
 ### 5.ログアウト(logout.php)<br>
 ### 6.お気に入り登録通信(ajaxLike.php)<br>
