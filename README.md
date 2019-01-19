contact-form
====

問い合わせフォームをMVCモデルで作成しました。

## Description
MVCの理解度を深めるために問い合わせフォームを作成してみました。
2017年7月作成
#### 機能
- フォームバリデーション
- メール送信
- 送信内容をDBに保存

## Demo
Getting Ready

## Usage

## Install

- リポジトリからクローン
`git clone git://github.com/schacon/grit.git`


- DB作成
```
CREATE TABLE `MESSAGE` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(50) DEFAULT NULL,
  `NAME_KANA` varchar(50) DEFAULT NULL,
  `EMAIL_ADDRESS` varchar(300) DEFAULT NULL,
  `TEL` varchar(50) DEFAULT NULL,
  `POST_CODE` varchar(50) DEFAULT NULL,
  `ADDRESS` varchar(500) DEFAULT NULL,
  `TEXT` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
```

- ドキュメントルート設定
/www/index.php

- DB接続先
/config/database.phpで`dbuser`、`password`を設定


## Licence

[GNU](https://github.com/YukiShina/contact-form/blob/master/LICENSE)

## Author

[YukiShina](https://github.com/YukiShina)
