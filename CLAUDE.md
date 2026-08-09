# このプロジェクトについて
WordPressテーマ「ゆうつむぎデザイン(yuumi)」の開発リポジトリ。
ローカルのこのフォルダが、サーバーの wp-content/themes/yuumi/ に対応する。

- 本番サイトURL: https://c13.seamlessly-test.com/

# デプロイルール(必須)
ファイルを編集・作成したら、作業の最後に必ずFTPでサーバーへアップロードすること。

- プロトコル: FTPS
- FTPホスト名: sv13261.xserver.jp
- 認証: 環境変数 FTP_USER / FTP_PASSWORD（.env に記載、コミット禁止）
- リモートパス: /yukimoveis.xsrv.jp/public_html/wp-content/themes/yuumi/

## アップロードコマンド
```bash
lftp -u "$FTP_USER","$FTP_PASSWORD" ftps://sv13261.xserver.jp -e "set ssl:verify-certificate no; mirror -R --only-newer --exclude .git/ --exclude node_modules/ --exclude .env --exclude CLAUDE.md ./ /yukimoveis.xsrv.jp/public_html/wp-content/themes/yuumi/; quit"
```

## 絶対に守ること
- アップロードはこのテーマフォルダ内のみ。テーマフォルダの外(wp-config.php、wp-content/uploads、WordPress本体)には絶対に触れない
- サーバー側のファイルを削除しない(--delete オプションは使わない)
- functions.php を変更した場合は、PHP構文エラーがないか `php -l` で確認してからアップロードする(構文エラーはサイト全体を落とす)
- アップロード後、成功したファイル一覧を報告する
