使用者設定:
1. 進入主頁面，全版照片上面有簡單文字介紹網站主旨
2. 登入(或註冊)按鈕、會員專區按鈕、註冊按鈕、更多關於我們按鈕
3. 點擊登入(或註冊)進入登入介面，下方有註冊按鈕連結
4. 會員專區內容: 重要新訊、優惠

後台管理:
1. 會員清單:有編輯按鈕可以修改、刪除會員資料
2. 
===
1. 主頁面
   * 登入介面: 登入成功→會員專區，登入失敗→忘記密碼
   * 註冊介面: 註冊成功→歡迎訊息、會員專區
   * (補充功能)會員重要新訊、會員優惠、註冊須知或提醒: 會員登入時的精簡資訊，吸引新用戶註冊(提高意願)
2. 登入介面: 登入成功→會員專區，登入失敗→忘記密碼
3. 註冊介面
: 註冊成功→歡迎訊息、會員專區
4. 會員專區:修改個人資料

=========
打卡上班系統
MySQL資料庫設計
資料庫:(punch_system)EIP員工入口網站
   資料表:members
      id(key)員工編號staffID
      pw
      dep部門(department)
      name姓名
      join_date入職日
      *帳號密碼需有預設值,首次登入
   資料表:dep
      dep_id部門編號
      dep_type部門
   資料表:admin
      admin_id
      admin_pw

   (補充功能)資料表:info
      id(key)員工編號staffID
      email
      phone
      birthday生日
      address地址
      update_time
      (undergo經歷)
   (補充功能)資料表:record
      id(key)員工編號staffID
      type(in/out)
      time
   (補充功能)資料表:request_form
      id(key)員工編號staffID
      type事病假
      start_time開始時間
      end_time結束時間
      total請假時數
   (補充功能)資料表:請假種類


EIP(enterprise information portal)企業(資訊)入口網站
(attendance management出勤管理)
(attendance record出缺勤)
(employee training員工訓練)
(performance evaluation考績/績效評估)
(payroll calculation薪酬計算)
(request form需求表/請假單)
(recruitment招募員工)