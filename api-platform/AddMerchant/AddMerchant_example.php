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
                    <td><input name="url" value="https://ccore.newebpay.com/API/AddMerchant" size="60" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>金流合作推廣商代號</td>
                    <td><input name="PartnerID_" maxlength="10" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>會員證號:</td>
                    <td><input name="MemberUnified" maxlength="15" required><span style="color:red;">※必填</span></td>
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
                    <td><input name="TimeStamp" value="<?= time(); ?>" maxlength="50" required readonly><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>企業代表人中文姓名:</td>
                    <td><input name="RepresentName" value="" maxlength="50"><span style="color:blue;">※企業會員必填</span></td>
                </tr>
                <tr>
                    <td>企業代表人身分證字號:</td>
                    <td><input name="ManagerID" value="" maxlength="15"><span style="color:blue;">※企業會員必填</span></td>
                </tr>
                <tr>
                    <td>身份證發證日期:</td>
                    <td><input name="IDCardDate" value="" maxlength="8"><span style="color:blue;">※個人會員必填</span></td>
                </tr>
                <tr>
                    <td>身份證發證地點:</td>
                    <td><input name="IDCardPlace" maxlength="10"><span style="color:blue;">※個人會員必填</span></td>
                </tr>
                <tr>
                    <td>身分證照片:</td>
                    <td><input type="number" name="IDPic" max="1" min="0"><span style="color:blue;">※個人會員必填</span></td>
                </tr>
                <tr>
                    <td>身分證領補換:</td>
                    <td><input type="number" name="IDFrom" max="3" min="1"><span style="color:blue;">※個人會員必填</span></td>
                </tr>
                <tr>
                    <td>出生年月日:</td>
                    <td><input name="Date" maxlength="8"><span style="color:blue;">※個人會員必填</span></td>
                </tr>
                <tr>
                    <td>實收資本額:</td>
                    <td><input name="CapitalAmount" maxlength="255"><span style="color:blue;">※企業會員必填</span></td>
                </tr>
                <tr>
                    <td>核准設立日期:</td>
                    <td><input name="IncorporationDate" maxlength="8"><span style="color:blue;">※企業會員必填</span></td>
                </tr>
                <tr>
                    <td>公司登記地址:</td>
                    <td><input name="CompanyAddress" maxlength="100"><span style="color:blue;">※企業會員必填</span></td>
                </tr>
                <tr>
                    <td>會員名稱:</td>
                    <td><input name="MemberName" maxlength="60" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>會員電話:</td>
                    <td><input name="MemberPhone" maxlength="13" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>會員聯絡地址:</td>
                    <td><input name="MemberAddress" maxlength="100" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>管理者中文姓名:</td>
                    <td><input name="ManagerName" maxlength="20" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>管理者英文姓名:</td>
                    <td><input name="ManagerNameE" maxlength="20" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>管理者帳號:</td>
                    <td><input name="LoginAccount" maxlength="20" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>管理者行動電話號碼:</td>
                    <td><input name="ManagerMobile" maxlength="10" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>管理者 E-mail:</td>
                    <td><input name="ManagerEmail" maxlength="40" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>商店爭議款信箱:</td>
                    <td><input name="DisputeMail" maxlength="40" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>客服商店信箱:</td>
                    <td><input name="MerchantEmail" maxlength="300" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>商店代號:</td>
                    <td><input name="MerchantID" maxlength="15" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>商店類別:</td>
                    <td><input name="MCType" type="number" min="1" max="3" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>商店中文名稱:</td>
                    <td><input name="MerchantName" maxlength="20" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>商店英文名稱:</td>
                    <td><input name="MerchantNameE" maxlength="100" required><span style="color:blue;">※信用卡支付方式啟用時必填</span></td>
                </tr>
                <tr>
                    <td>商店網址:</td>
                    <td><input name="MerchantWebURL" maxlength="100" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>聯絡地址－城市:</td>
                    <td><input name="MerchantAddrCity" maxlength="5" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>聯絡地址－地區:</td>
                    <td><input name="MerchantAddrArea" maxlength="5" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>聯絡地址－郵遞區號:</td>
                    <td><input name="MerchantAddrCode" maxlength="3" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>聯絡地址－路名及門牌號碼:</td>
                    <td><input name="MerchantAddr" maxlength="60" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>商店英文聯絡地址:</td>
                    <td><input name="MerchantEnAddr" maxlength="255" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>設立登記營業國家(英文名):</td>
                    <td><input name="NationalE" maxlength="20" required><span style="color:blue;">※信用卡支付方式啟用時必填</span></td>
                </tr>
                <tr>
                    <td>設立登記營業城市(英文名):</td>
                    <td><input name="CityE" maxlength="20" required><span style="color:blue;">※信用卡支付方式啟用時必填</span></td>
                </tr>
                <tr>
                    <td>販售類別:</td>
                    <td><input name="MerchantType" type="number" max="4" min="1" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>行業別:</td>
                    <td><input name="BusinessType" maxlength="4" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>商店簡介:</td>
                    <td><textarea name="MerchantDesc" cols="30" rows="7"></textarea><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>會員金融機構帳戶金融機構代碼:</td>
                    <td><input name="BankCode" maxlength="3" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>會員金融機構帳戶金融機構分行代碼:</td>
                    <td><input name="SubBankCode" maxlength="4" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>會員金融機構帳戶帳號:</td>
                    <td><input name="BankAccount" minlength="10" maxlength="14" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>會員金融機構帳戶戶名:</td>
                    <td><input name="AccountName" maxlength="80" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>信用卡自動請款(選填):</td>
                    <td><input name="CreditAutoType" maxlength="1" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>信用卡 30 天收款額度(選填):</td>
                    <td><input name="CreditLimit" maxlength="10" required><span style="color:red;">※必填</span></td>
                </tr>
                <tr>
                    <td>啟用支付方式(選填):</td>
                    <td><textarea name="PaymentType" cols="30" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td>AgreedFee(選填):</td>
                    <td><textarea name="PaymentType" cols="30" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td>撥款天數(選填):</td>
                    <td><textarea name="AgreedDay" cols="30" rows="5"></textarea></td>
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
                    <td>會員商店自動提領規則(選填):</td>
                    <td><input name="WithdrawSetting" maxlength="10"></td>
                </tr>
                <tr>
                    <td>物流設定(選填):</td>
                    <td><input name="Shipping" type="number" max="3" min="1"></td>
                </tr>
                <tr>
                    <td>商店退貨取件人資訊參數(姓名):</td>
                    <td><input name="ShippingName"><span style="color:blue;">※有開啟物流設定時為必填</span></td>
                </tr>
                <tr>
                    <td>商店退貨取件人資訊參數(行動電話):</td>
                    <td><input name="ShippingTel"><span style="color:blue;">※有開啟物流設定時為必填</span></td>
                </tr>
                <tr>
                    <td>商店退貨取件人資訊參數(電子信箱):</td>
                    <td><input name="ShippingEmail"><span style="color:blue;">※有開啟物流設定時為必填</span></td>
                </tr>
                <tr>
                    <td>支付完成返回商店網址(選填):</td>
                    <td><input name="ReturnURL" maxlength="50"></td>
                </tr>
                <tr>
                    <td>支付通知網址(選填):</td>
                    <td><input name="NotifyURL" maxlength="50"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="參數轉換"></td>
                </tr>
            </table>
        </fieldset>
    </form>

</body>


</html>