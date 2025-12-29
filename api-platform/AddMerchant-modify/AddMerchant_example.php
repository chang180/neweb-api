<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddMerchant 範例</title>
</head>

<body>
    <h1>AddMerchant 範例</h1>
    <form action="AddMerchant_api.php" method="post">
        <fieldset>
            <legend>參數輸入</legend>
            <table border="1">
                <tr>
                    <td>API網址：</td>
                    <td><input name="url" value="https://ccore.newebpay.com/API/AddMerchant/modify" size="60" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>金流合作推廣商代號</td>
                    <td><input name="PartnerID_" maxlength="10" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>商店代號:</td>
                    <td><input name="MerchantID" maxlength="15" required><span style="color:red;">※必填</span></td>
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
                    <td><input name="Version" value="1.8" maxlength="3"><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>TimeStamp:</td>
                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>會員帳戶自動提領啟用(選填):</td>
                    <td><input name="Withdraw" maxlength="1"></td>
                </tr>
                <tr>
                    <td>會員商店自動提領啟用:</td>
                    <td><input name="WithdrawMer" maxlength="1"><span style="color:blue;">※當 Withdraw=9 時為必填</span></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="參數轉換"></td>
                </tr>
            </table>
        </fieldset>
    </form>

</body>


</html>