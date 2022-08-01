# Seconds

小説家同士が作品の批評をし合うためのコミュニティサイトです。
URL：http://s3conds.com/

<img width="1567" src="https://user-images.githubusercontent.com/109901039/182008460-373fd7c9-d17c-4b63-9b08-cc7865a5bf7a.png">

## 画面遷移(チャート)図

<img width="800" src="https://user-images.githubusercontent.com/109901039/182138772-67da77db-223f-4136-aa4f-ff1b9e022050.png">

## ER図

<img width="800" src="https://user-images.githubusercontent.com/109901039/182151437-ff064813-0d29-405e-bbe2-c40e4cfd0f36.png">

## 本番環境構成図

<img width="800" src="https://user-images.githubusercontent.com/71712059/161224368-3d8e207a-6e40-4b5b-905d-78ee2331776f.png">

## 使用技術
#### バックエンド
- php:7.4-fpm
- Laravel Framework 8.83.18

#### フロントエンド
- HTML5
- CSS3
- jQuery 3.1.1
#### 開発環境
- Docker 20.10.12 / Docker Compose v2.2.3<br/>
(nginx, php-fpm, supervisor, mysql 8.0.27)
#### 本番環境
- AWS：EC2, RDS, VPC, Route 53, ALB, ACM<br/>
EC2:(nginx, php-fpm, mysql 8.0.27)
#### 使用ツール
- バージョン管理： Git / GitHub
- IDE： Visual Studio Code

## 機能一覧

#### 認証機能
- ユーザー登録機能：名前・メールアドレス・パスワード登録
- ログイン機能：メールアドレス・パスワード認証
- ゲストログイン機能：ユーザー未登録のままログイン可能
- ログアウト機能：ログイン前画面に遷移
- 退会機能：登録ユーザーの削除

#### メイン機能
- 投稿機能：タイトル、本文の投稿
- 投稿編集機能：タイトル、本文の変更
- 投稿削除機能：投稿の削除
- 投稿閲覧機能：投稿の閲覧(縦書き、横書き切り替え化)
- 検索機能：キーワード検索
- PDF出力機能：現在は横書きのみ出力可能 (2022.7.29)
- ブックマーク機能：登録・閲覧
- コメント機能
- コメント削除機能
- コンタクト機能
- ニュース投稿機能：管理者のみ使用可能

## 機能・画面説明
#### ユーザー登録・ログイン
- Register(ユーザー登録)画面からユーザー登録が可能
- Login(ログイン)画面からログイン・ゲストログインが可能

<img width="800" src="https://user-images.githubusercontent.com/109901039/182008460-373fd7c9-d17c-4b63-9b08-cc7865a5bf7a.png">

<img width="800" src="https://user-images.githubusercontent.com/109901039/182119146-4374d854-6a30-4287-a186-53288ee249fe.png">


#### ホーム画面(Home)
- ニュースの確認と各機能へのポータルとなる画面                                                                                                        
                                                                                                                              
<img width="800" src="https://user-images.githubusercontent.com/109901039/182123842-4d3c62c4-d23d-4ae5-ae8f-37bdd9a74bea.png">
                                                                                                                             
#### エディター画面(Editer)
- 作品の執筆・削除・公開が可能
- 執筆後の確認用に本文をロックすることが可能
- 自身が過去に執筆した作品についてキーワード検索を行い、検索結果画面へ遷移

<img width="800" src="https://user-images.githubusercontent.com/109901039/182129412-a30733aa-0af1-47b3-9443-95f395a51cd3.png">
- 本文は製作者の作品のため、マスクしております。


#### 検索結果画面
- 投稿をクリックことで選択した作品のエディター画面へ遷移
- 画面上部、画面下部のページネーションからページ移動が可能                                                    
<img width="800" src="https://user-images.githubusercontent.com/109901039/182129423-fa8c0add-2265-460d-b02d-f61691fa74c2.png">

#### 投稿一覧画面(Browse)
- 自身や他ユーザーの投稿一覧を表示
- 画面左上のアプリタイトルをクリックすることで、ホーム画面に遷移できます
- タイトル、本文をクリックすると、投稿詳細画面に遷移できます
- 画面下部のリンク群から指定の機能へ遷移
- 画面上部、画面下部のページネーションからページ移動ができます

<img width="800" src="">

#### 投稿詳細画面
- 投稿記事右上のメニューから投稿の編集、投稿の削除ができます
- タグをクリックすると、タグ検索ができます
- ♥ボタンをクリックすると、いいねを残せます
- コメントを入力し投稿できます

<img width="800" src="">


#### 退会機能
- 投稿削除、退会をする際に最後の確認の為表示されます
- 「削除する」「退会する」ボタンをクリックすることで、削除・退会できます

<img width="800" src="">


