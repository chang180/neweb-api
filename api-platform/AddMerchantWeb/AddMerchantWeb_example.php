<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddMerchantWeb 範例</title>
</head>

<body>
    <div class="container">
        <h1>AddMerchantWeb 範例</h1>
        <form action="AddMerchantWeb_api.php" method="post">
            <fieldset>
                <legend>參數輸入</legend>
                <table border="1">
                    <tr>
                        <td>API網址：</td>
                        <td><input name="url" value="https://lcore.newebpay.com/API/AddMerchantWeb" size="60" required><span style="color:red;">※必填</span></td>
                    </tr>
                    <tr>
                        <td>金流合作推廣商代號</td>
                        <td><input name="UID_" maxlength="10" value="siwei"><span style="color:red;">※必填</span></td>
                    </tr>
                    <tr>
                        <td>商店代號:</td>
                        <td><input name="MerchantID" maxlength="15" value="DAI00000031"><span style="color:red;">※必填</span></td>
                    </tr>
                    <tr>
                        <td>key:</td>
                        <td><input name="key" size="32" value="melAlGdWUcGTgPxR23P4HrPxV3eiq6tu"><span style="color:red;">※必填</span></td>
                    </tr>
                    <tr>
                        <td>iv:</td>
                        <td><input name="iv" minlength="16" maxlength="16" value="L02Fa9tpAnJauNCL"><span style="color:red;">※必填</span></td>
                    </tr>
                    <tr>
                        <td>串接程式版本:</td>
                        <td><input name="Version_" value="1.1" maxlength="5"><span style="color:red;">※必填</span></td>
                    </tr>
                    <tr>
                        <td>時間戮記:</td>
                        <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required><span style="color:red;">※必填</span></td>
                    </tr>
                    <tr>
                        <td>交易手續費(選填):</td>
                        <td><input name="AgreedFee" value="" maxlength="255"></span></td>
                    </tr>
                    <tr>
                        <td>撥款天數(選填) :</td>
                        <td><input name="AgreedDay" value="" maxlength="255"></span></td>
                    </tr>
                    <tr>
                        <td>會員帳戶自動提領啟用(選填):</td>
                        <td><input name="Withdraw" maxlength="1" value="9"></td>
                    </tr>
                    <tr>
                        <td>會員商店自動提領啟用:</td>
                        <td><input name="WithdrawMer" maxlength="1" value="3"><span style="color:blue;">※當 Withdraw=9 時為必填</span></td>
                    </tr>
                    <tr>
                        <td>會員商店自動提領規則(選填):</td>
                        <td><input name="WithdrawSetting" maxlength="10" value="2"></td>
                    </tr>
                    <tr>
                        <td>Notify 網址 :(選填)</td>
                        <td><input name="NotifyURL" maxlength="255"></td>
                    </tr>
                    <tr>
                        <td>返回網址:(選填)</td>
                        <td><input name="ReturnURL" maxlength="255"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" value="參數轉換"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
</body>

</html>