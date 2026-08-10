# このプロジェクトについて
WordPressテーマ「ゆうつむぎデザイン(yuumi)」の開発リポジトリ。
ローカルのこのフォルダが、サーバーの wp-content/themes/yuumi/ に対応する。

- 本番サイトURL: https://c13.seamlessly-test.com/

# デプロイルール(必須)
mainブランチにコミット＆プッシュすると、GitHub Actions（`.github/workflows/deploy.yml`）でFTPS経由で本番サーバーへ自動デプロイされる。
手動FTPアップロードは不要。

- FTPホスト: sv13261.xserver.jp
- リモートパス: /yukimoveis.xsrv.jp/public_html/wp-content/themes/yuumi/
- 認証情報: GitHubリポジトリのSecrets（FTP_SERVER / FTP_USERNAME / FTP_PASSWORD）に設定済み

## 絶対に守ること
- アップロードはこのテーマフォルダ内のみ。テーマフォルダの外(wp-config.php、wp-content/uploads、WordPress本体)には絶対に触れない
- functions.php を変更した場合は、PHP構文エラーがないか `php -l` で確認してからコミットする（構文エラーはサイト全体を落とす）
- .env や認証情報をコミットしない
