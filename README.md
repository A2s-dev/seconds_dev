# Seconds

小説家同士が作品の批評をし合うためのコミュニティサイトです
#### ※作者が日本語の文字が嫌いなため英語表記です
URL：http://s3conds.com/

<img width="1567" src="https://user-images.githubusercontent.com/109901039/182008460-373fd7c9-d17c-4b63-9b08-cc7865a5bf7a.png">

## 画面遷移(チャート)図

<img width="800" src="https://user-images.githubusercontent.com/109901039/182138772-67da77db-223f-4136-aa4f-ff1b9e022050.png">

## ER図

<img width="800" src="https://user-images.githubusercontent.com/109901039/182151437-ff064813-0d29-405e-bbe2-c40e4cfd0f36.png">

## 開発期間
- 要件定義~設計 5日
- 実装~テスト 1か月

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
- コメント登録・削除機能
- コンタクト機能
- ニュース投稿機能：管理者のみ使用可能

## 機能・画面説明
#### ユーザー登録・ログイン
- Register(ユーザー登録)画面からユーザー登録が可能
- Login(ログイン)画面からログイン・ゲストログインが可能

<img width="800" src="https://user-images.githubusercontent.com/109901039/182008460-373fd7c9-d17c-4b63-9b08-cc7865a5bf7a.png">

<img width="800" src="https://user-images.githubusercontent.com/109901039/182119146-4374d854-6a30-4287-a186-53288ee249fe.png">

#### 利用規約画面
- 製作時間の30%をかけたので読んでください

<img width="800" src="https://user-images.githubusercontent.com/109901039/182180961-5a2d5c73-e005-4fc7-9877-a4bf5a4890fd.png">


#### ホーム画面(Home)
- ニュースの確認と各機能へのポータルとなる画面                                                                                                        
                                                                                                                              
<img width="800" src="https://user-images.githubusercontent.com/109901039/182123842-4d3c62c4-d23d-4ae5-ae8f-37bdd9a74bea.png">

#### コンタクト画面(Contact)
- 製作者にメールを送り付けることが可能

<img width="800" src="https://user-images.githubusercontent.com/109901039/182179726-3fe4f1f9-b0ee-44c0-a26a-90b8b43ecb89.png">

#### エディター画面(Editer)
- 作品の執筆・削除・公開が可能
- 執筆後の確認用に本文をロックすることが可能
- 自身が過去に執筆した作品についてキーワード検索を行い、検索結果画面へ遷移

<img width="800" src="https://user-images.githubusercontent.com/109901039/182129412-a30733aa-0af1-47b3-9443-95f395a51cd3.png">
- 本文は製作者の作品のため、マスクしております。


#### 検索結果画面
- 投稿をクリックすることで選択した作品のエディター画面へ遷移
- 画面上部、画面下部のページネーションからページ移動が可能                                                    
<img width="800" src="https://user-images.githubusercontent.com/109901039/182129423-fa8c0add-2265-460d-b02d-f61691fa74c2.png">

#### 投稿一覧画面(Browse)
- 自身や他ユーザーの投稿一覧を表示
- 画面左上のアプリタイトルをクリックすることで、ホーム画面に遷移
- タイトル、本文をクリックすると、投稿詳細画面に遷移
- 画面下部のリンク群から指定の機能へ遷移
- 画面上部、画面下部のページネーションからページ移動が可能

<img width="800" src="https://user-images.githubusercontent.com/109901039/182168115-b69ffccf-8cbd-4f27-b92a-75b4ab48c56a.png">

#### 投稿詳細画面
- 画面右下ボタン群 最上押下 縦書き・横書き表示の切り替え
- 2つ目押下 PDF出力（現在は横書き出力のみ）
- 3つ目押下 ブックマークの切り替え
- 4つ目押下 コメント投稿モーダルを開く

<img width="800" src="https://user-images.githubusercontent.com/109901039/182169420-c7148bb1-7447-4c0a-bc8f-dad6e16bf487.png">

#### コメント一覧画面
- 自身で投稿したコメントのみ削除可能(その他削除したいコメントは管理者に連絡)
- 画面右下の戻るボタンから直前の画面へ遷移

<img width="800" src="https://user-images.githubusercontent.com/109901039/182177647-3e045310-f1a8-4c54-a7d4-072536a93c07.png">

#### ブックマーク一覧画面
- 投稿をクリックすることで投稿詳細画面へ遷移

<img width="800" src="https://user-images.githubusercontent.com/109901039/182179062-29112ff3-e991-454d-b3af-e2ea91dc7367.png">


#### 退会機能
- 「Deactive」ボタンをクリックすることで、退会できます

<img width="800" src="https://user-images.githubusercontent.com/109901039/182182227-8ab3dc46-02a6-4db0-b54f-0ed8ac23b697.png">


## 
