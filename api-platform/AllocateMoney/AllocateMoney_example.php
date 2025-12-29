<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AllocateMoney 範例</title>
</head>

<body>
    <h1>AllocateMoney 範例</h1>
    <form action="AllocateMoney_api.php" method="post">
        <fieldset>
            <legend>參數輸入</legend>
            <table border="1">
                <tr>
                    <td>API網址：</td>
                    <td><input name="url" value="https://ccore.newebpay.com/API/AllocateMoney/apply" size="60" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>金流合作推廣商代號</td>
                    <td><input name="UID_" maxlength="10" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>key:</td>
                    <td><input name="key" minlength="32" maxlength="32" size="32" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>iv:</td>
                    <td><input name="iv" minlength="16" maxlength="16" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>串接程式版本:</td>
                    <td><input name="Version" value="1.0" maxlength="3" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>回傳格式:</td>
                    <td><input name="RespondType_" value="JSON" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>TimeStamp:</td>
                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>商店代號:</td>
                    <td><input name="MerchantID" maxlength="15" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>商店訂單編號:</td>
                    <td><input name="MerchantOrderNo" maxlength="20" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>交易金額:</td>
                    <td><input name="Amt" maxlength="10" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>撥款金額:</td>
                    <td><input name="AllocateAmt" maxlength="10" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>自訂撥款編號:</td>
                    <td><input name="AllocateNo" maxlength="20" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="參數轉換"></td>
                </tr>
            </table>
        </fieldset>
    </form>

</body>


</html>