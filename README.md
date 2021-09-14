# Laravel 8 使用者訊息服務

使用者訊息服務運用得當的話，是一種非常便利且靈活的溝通工具，也是相對簡單又親切的聯繫方式，並且在各種商業環境中也越來越被大眾所接受。但是，發送即時訊息也有很多必須注意的事，在按下提交之前，記得確認你發送的對象是對的，確保沒有任何錯字和會產生誤會的詞句。如果文字所傳遞的訊息或是情緒有偏誤，可能會讓接收人誤解並產生反感。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 執行安裝 Laravel Mix 引用的依賴項目，並執行所有 Mix 任務。
```sh
$ npm install && npm run dev
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/register` 來進行註冊。
- 完成註冊後，可以經由 `/login` 來進行登入。

----

## 畫面截圖
![](https://i.imgur.com/UgWrd4Q.png)
> 可以選擇將訊息傳送至指定的使用者

![](https://i.imgur.com/X2JjX9b.png)
> 顯示未讀訊息的數量

![](https://i.imgur.com/CWD2tjP.png)
> 只要在訊息發送前，先自己想一遍：「如果我是那個收到訊息的人，我會是什麼感覺？」就可以基本先過濾掉太 NG 的訊息了