<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API 參數轉換</title>
</head>

<body>
    <form id="stop_operation">
        <table>
            <tr>
                <td>MemComID</td>
                <td><input name="MemComID" value="PS05444697"></td>
            </tr>
            <tr>
                <td>OperationID</td>
                <td><input name="OperationID" value="10000" readonly></td>
            </tr>
            <tr>
                <td>MemComType</td>
                <td><input name="MemComType" value="1"></td>
            </tr>
            <tr>
                <td>Type</td>
                <td><input name="Type" value="0"></td>
            </tr>
            <tr>
                <td>Agent</td>
                <td><input name="Agent" value="tester"></td>
            </tr>
            <tr>
                <td>Reason</td>
                <td><input name="Reason" value="測試"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="button" id="send">發送</button></td>
            </tr>
        </table>
    </form>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('send').addEventListener('click', function() {
            // 獲取表單數據
            const form = document.getElementById('stop_operation');
            const formData = new FormData(form);

            // 轉換為 URL 編碼的字符串
            let encode_str = '';
            for (const [key, value] of formData.entries()) {
                if (encode_str !== '') {
                    encode_str += '&';
                }
                encode_str += encodeURIComponent(key) + '=' + encodeURIComponent(value);
            }

            // 使用自定義函數進行編碼
            const send_data = "post_data_=" + web_base_encode(encode_str);
            const url = "https://lsecure.newebpay.com/admin_member/stop_operation";

            // 發送 AJAX 請求
            AjaxWork(url, send_data, get_set_shop_card_result, true);
        });

        // 自定義編碼函數
        function web_base_encode(s) {
            var es = [],
                c = '',
                ec = '';
            s = s.split(''); //10.19补 忘记ie不能下标访问字符串
            for (var i = 0, length = s.length; i < length; i++) {
                c = s[i];

                ec = encodeURIComponent(c);

                if (ec == c) {
                    ec = c.charCodeAt().toString(16);
                    ec = ('00' + ec).slice(-2);
                }
                es.push(ec);
            }
            return es.join('').replace(/%/g, '').toUpperCase();
        }

        // AJAX 請求函數
        function AjaxWork(url, data, callback, isAsync) {
            const xhr = new XMLHttpRequest();
            xhr.open('POST', url, isAsync);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    callback(xhr.responseText);
                }
            };
            xhr.send(data);
        }

        // 處理返回結果的函數
        function get_set_shop_card_result(msg) {
            const result = JSON.parse(msg);
            if (result['status'] == "SUCCESS") {
                alert("更新成功");
            } else {
                alert("錯誤：" + result['message'] + " (" + result['status'] + ")");
            }
        }
    });
</script>

</html>