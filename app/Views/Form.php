<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>問い合わせフォーム</title>
    <style type="text/css">
        table, td, th {
            border: 0;
            border-spacing: 0;
        }
        table {
            width: 800px;
            margin: 0 auto;
        }
        td {
        	width: 70%;
        }
        td input,
        td textarea {
        	width: 90%;
        	padding: 5px;
        }
        .btn {
        	width: 100px;
        	margin: 10px auto;
        	cursor: pointer;
        	background: #222;
        	color: #FFF;
        	text-align: center;
        	padding: 5px;
        	border-radius: 2px;
        }
    </style>
</head>
<body>
	<form action="/messageadd/" method="POST" name="messageadd" id="messageadd">
	    <table>
	        <tr>
	            <th>氏名</th>
	            <td><input type="text" name="message[:name]"></td>
	        </tr>
	        <tr>
	            <th>氏名（カナ）</th>
	            <td><input type="text" name="message[:name_kana]"></td>
	        </tr>
	        <tr>
	            <th>E-mailアドレス</th>
	            <td><input type="text" name="message[:email_address]" id="mail"></td>
	        </tr>
	        <tr>
	            <th>E-mailアドレス（確認用）</th>
	            <td><input type="text" id="mailCheck"></td>
	        </tr>
	        <tr>
	            <th>電話番号</th>
	            <td><input type="text" name="message[:tel]"></td>
	        </tr>
	        <tr>
	            <th>郵便番号</th>
	            <td><input type="text" name="message[:post_code]"></td>
	        </tr>
	        <tr>
	            <th>住所</th>
	            <td><input type="text" name="message[:address]"></td>
	        </tr>
	        <tr>
	            <th>問い合わせ内容(1000字以内)</th>
	            <td><textarea name="message[:text]" id="text"></textarea></td>
	        </tr>
	    </table>

      <p class="btn" id="btn" onclick="check()">送信</p>
	</form>
	<script type="text/javascript">
		function check() {
			var target = document.getElementById("messageadd");
			var btn = document.getElementById("btn");
			var mail = document.forms.messageadd.mail.value;
			var mailCheck = document.forms.messageadd.mailCheck.value;
			if(mail === '') {
				alert('E-mailアドレスは必須です。');
				return;
			}
			if(mail != mailCheck) {
				alert('E-mailアドレスとE-mailアドレス（確認用）が一致しません。');
				return;
			}
			var str     = document.forms.messageadd.text.value;
    		stringCount = str.length;
    		if(stringCount > 1000) {
				alert('問い合わせ内容は1000字以内で入力してください'+stringCount);
				return;
    		}
			target.submit();
		}
	</script>
</body>
</html>
