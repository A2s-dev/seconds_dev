# Seconds

旅の思い出を投稿して、他ユーザーと共有できるWebアプリケーションです。
URL：http://s3conds.com/

<img width="1567" alt="スクリーンショット 2022-03-19 1 51 26" src="https://user-images.githubusercontent.com/109901039/182008460-373fd7c9-d17c-4b63-9b08-cc7865a5bf7a.png">

## 「Seconds」紹介記事

#### ポートフォリオ開発の詳細をまとめております。

↓　↓<br/>
- ポートフォリオ開発について : https://qiita.com/yuuichimizuta/items/e8a8cf2bbecba7cba965

<img width="400" alt="スクリーンショット 2022-03-22 2 33 51" src="https://user-images.githubusercontent.com/71712059/159331521-85a907dc-e37d-4a10-87c7-a4da5f6ec4fe.png">

## 画面遷移図

<img width="770" alt="スクリーンショット 2022-03-07 0 02 49" src="https://user-images.githubusercontent.com/71712059/156979018-5ee18640-72be-4e4d-bc48-0cb2315c357f.png">

## ERデータベース図

<img width="1000" alt="スクリーンショット 2022-03-06 23 59 11" src="https://user-images.githubusercontent.com/71712059/156979033-c7ac7776-f765-47ca-8855-183834a886a4.png">

## 本番環境構成図

<img width="800" alt="スクリーンショット 2022-04-01 17 08 08" src="https://user-images.githubusercontent.com/71712059/161224368-3d8e207a-6e40-4b5b-905d-78ee2331776f.png">

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
#### ホーム画面
- ヘッダーのメニューから、ユーザー登録、ログイン画面遷移、ゲストログインができます
- 中央の画像を左右にフェードさせることができます
- 3枚目の画像からもユーザー登録、ログイン画面遷移、ゲストログインができます

<img width="800" src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/891391/1b7f3495-210b-f0e0-dbfb-fba8f3d68d01.png">

<img width="800" src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/891391/c094d89d-cc9c-a245-37b3-d6cbfcb24515.png">

#### ユーザー登録・ログイン
- Register(ユーザー登録)画面からユーザー登録ができる
- Login(ログイン)画面からログイン・ゲストログインができる

<img width="800" src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/891391/1609e43d-48e0-dec1-3c04-1ce62b48ba13.png">

#### 投稿一覧画面
- 自身や他ユーザーの投稿一覧を表示
- ヘッダーのメニューからマイページ画面、投稿画面遷移、ログアウトができます
- 検索フォームからカテゴリ検索、キーワード検索ができます
- 投稿記事左上のプロフィール画像をクリックすることで、マイページに遷移できます
- 投稿記事右上のメニューをクリックすることで、投稿編集画面・投稿削除画面に遷移できます
- 画像、タイトル、本文をクリックすると、投稿詳細画面に遷移できます
- タグをクリックすると、タグ検索ができます
- ♥ボタンをクリックすると、いいねを残せます
- 吹き出しボタンをクリックすると、投稿詳細画面のコメント入力に遷移します
- 画面右下の紙飛行機ボタンをクリックすると、投稿画面に遷移します
- 画面上部、画面下部のページネーションからページ移動ができます。

<img width="800" src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/891391/85e91257-4cad-04dd-0076-7281f35fd453.png">

#### 投稿画面・投稿編集画面
- 画像(png, jpeg, gif)、タイトル、所在地(カテゴリ)、タグ、本文の入力し投稿ができる

<img width="800" src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/891391/7883e0e8-77d2-4632-ace5-a60e30596756.png">

#### 投稿詳細画面
- 投稿記事右上のメニューから投稿の編集、投稿の削除ができます
- タグをクリックすると、タグ検索ができます
- ♥ボタンをクリックすると、いいねを残せます
- コメントを入力し投稿できます

<img width="800" src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/891391/a7346f70-7366-d867-8b7c-b85165b12d65.png">

#### 検索機能
- 検索フォームからカテゴリ検索、キーワード検索ができます
- タグをクリックすることで、タグ検索ができます

<img width="800" src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/891391/729b1f68-bf17-7b9f-7dcb-6fbb09453a69.png">

#### マイページ
- プロフィール、マイ投稿一覧を表示
- 投稿一覧画面と同じ機能を実行できます
- いいね一覧ボタンをクリックすることで、マイいいね一覧を表示できます
- プロフィール右上のメニューをクリックすることで、プロフィール変更画面に遷移できます
- フォロー中・フォロワーボタンをクリックすることで、フォロー中・フォロワー一覧に遷移できます

<img width="800" src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/891391/0d3eeb1a-47f5-be83-8a9d-ad5a56ca8283.png">

#### プロフィール変更画面
- 画像(png, jpeg, gif)、名前、メールアドレス、自己紹介を変更できます

<img width="800" src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/891391/72536d31-2e7c-c7da-bb1b-fb1562ec9eb7.png">

#### フォロー中・フォロワー一覧画面
- フォロー中・フォロワーの一覧を表示
- 一覧からフォローしたり、外したりできます
- 他ユーザーのマイページ、フォロー中・フォロワー一覧に遷移できます

<img width="800" src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/891391/7dd2b5c3-d7ac-dbb5-8ddc-70a375161e91.png">

#### 投稿削除・退会機能のモーダル
- 投稿削除、退会をする際に最後の確認の為表示されます
- 「削除する」「退会する」ボタンをクリックすることで、削除・退会できます

<img width="800" src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/891391/b5ae23b3-9f7d-3adb-4944-944c324312e3.png">

#### レスポンシブ対応

- メディアクエリを使い、レスポンシブ対応をしっかり考えて実装したので、スマホでもストレス無く利用できます。

<img width="800" src="https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/891391/40a5e3d4-852c-c953-29f7-2887a8ac5277.png">


## 作者

<img width="180" src="https://user-images.githubusercontent.com/71712059/158662896-bd2828fb-4b56-4e01-94dc-2ee52eacc393.JPG">

- Yuuichi Mizuta
- Wantedly：https://www.wantedly.com/id/yuuichi_mizuta
- Twitter：https://twitter.com/yuuichimizuta
- Qiita：https://qiita.com/yuuichimizuta
