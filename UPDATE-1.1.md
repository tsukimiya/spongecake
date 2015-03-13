UPGRADE FROM 1.0 to 1.1
=======================

### 変更点

  * core.phpのAPP_URL, APP_BASE_PATHの設定ポリシーを変更しました。

    今まで、APP_URLに http://example.com/, APP_BASE_PATHに/path/to/dir と設定していたのを
    APP_URLに http://example.com (最後のスラッシュ無し), APP_BASE_PATHに/path/to/dirとするようにしました。
    これはAppController::redirect()実装にあたり、 http://example.com//path/to/dir というようにスラッシュが多重に入ってしまう問題に対応するものです。

