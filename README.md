﻿# 股票資訊管理系統

本專案為一個基於 PHP 開發的 **股票資訊管理系統**，旨在提供使用者一個直覺且高效的方式來查詢、管理及追蹤股票資訊。此系統支援公司資訊查詢、建立喜愛列表、權限管理等功能，適用於對金融市場感興趣的使用者。

## 🚀 功能特色

系統內容功能詳細敘述

- 註冊與登入：使用者可以註冊新帳號或登入已註冊帳號。

    使用者訪問登入頁面。若無帳號，則使用者可以選擇註冊，填寫所需資訊（名稱、電子郵件、密碼等）。註冊完成後，系統將使用者資料儲存至資料庫中的 User 表。已註冊的使用者可使用其電子郵件與密碼進行登入。驗證成功後，系統會顯示功能頁面。

- 搜索公司：使用者可以根據公司名稱或股票代號搜索公司資訊。

    使用者在搜索欄中輸入關鍵字。系統查詢 Company 表，顯示符合條件的公司列表。使用者可以點擊某公司名稱查看詳細財務資訊。

- 建立追蹤清單：使用者可以建立並管理其關注的公司清單。

    使用者在公司列表中選擇想追蹤的公司。點擊**添加到清單**。系統將該公司 ID 儲存到 Follow 表中，與使用者 ID 關聯。

- 更新公司資料：管理者可以上傳並更新公司的財務資料。

    管理者登入並訪問管理介面。管理者選擇公司並上傳新的財務資料（股價、每股盈餘等）。系統更新 Quarter 表中的相應資料。

- 公告管理：管理者可以發布與管理公告。

    管理者登入並訪問公告管理頁面。管理者撰寫新公告或編輯現有公告。系統將公告內容儲存至資料庫並顯示給所有使用者。


## 🛠️ 技術
- **前端**：HTML, CSS, JavaScript
- **後端**：PHP
- **資料庫**：MySQL
- **框架**：Bootstrap


## ⬇️ 安裝指南
1. **下載專案**

    （1）使用指令下載
    ```sh
    git clone https://github.com/heyimwei/Stock_Information_Management_System.git

    cd Stock_Information_Management_System
    ```


    （2）或是將檔案從github手動下載後解壓縮至 **AppServ/www** 資料夾中
    ![alt text](image/image.png)

2. **配置檔案**
   - 確保您的伺服器支援 PHP
   
   - 將 `config.php` 內的資料庫連線設定修改為您的 MySQL 伺服器資訊

## 🌟 系統使用步驟說明

![alt text](image/image-1.png)

在您的瀏覽器導航到該網址：http://localhost/Stock_Information_Management_System/page/index.php 後，就可以在您本機上使用本系統，以下為使用步驟說明

（1）首先在主頁面點擊Account來註冊帳號，需輸入 UserID , Password , UserName , Email 來註冊帳號。
![alt text](image/image-2.png)

（2）再點一次Account來登入 (只需要打 UserID , assword)
![alt text](image/image-3.png)

（3）往下滑可以看到管理員公告 (僅管理員得修改)
![alt text](image/image-4.png)

（4）往下滑為使用者最主要的功能，有查詢股票、個人追蹤清單、修改個人資料。
![alt text](image/image-5.png)

（5）按下搜尋股票跳轉到搜尋頁面，可篩選條件並按下 **點此進行搜尋** 找到符合的公司資料
![alt text](image/image-7.png)

（6）可以按下愛心追蹤喜歡的公司
![alt text](image/image-8.png)

（7）按下 **MainPage** 回到主頁，並點選 **個人追蹤清單** 找到追蹤的公司，可以點選刪除把關注的公司刪掉
![alt text](image/image-9.png)

（8）也可以點選公司名字跳轉到公司介紹頁面，其圖片表示為其公司產業類別
![alt text](image/image-10.png)

（9）下方區域顯示公司的重要財務指標，如 EPS、MarketValue、Dividend、BVPS、Sale 等，不同指標都有折線圖讓使用者更直觀的作分析
![alt text](image/image-11.png)
![alt text](image/image-12.png)

（10）按下 **MainPage** 回到主頁，點選 **修改個人資料**，可以更改您的基本資料
![alt text](image/image-13.png)

### 以上是基本用戶的功能，接下來介紹管理者的特殊功能

（11）按下 **MainPage** 回到主頁，在公告區點選 **修改**，跳轉到另一個頁面以更改公告內容
![alt text](image/image-14.png)
![alt text](image/image-15.png)

（11）按下 **MainPage** 回到主頁，點選 **上傳公司資料**，跳出一個頁面以輸入公司資訊並創建資料
![alt text](image/image-16.png)
![alt text](image/image-17.png)
