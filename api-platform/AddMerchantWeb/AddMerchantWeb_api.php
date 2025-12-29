<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API 參數轉換</title>
</head>

<body>
    <?php
    //商店代號
    $uid = $_POST['UID_'];
    $mid = $_POST['MerchantID'];
    $key = $_POST['key'];
    $iv = $_POST['iv'];
    $url = $_POST['url'];
    unset($_POST['key'], $_POST['iv'], $_POST['url'], $_POST['EncryptType']);
    $data1 = http_build_query($_POST);

    // AES/CBC加密模式
    $edata1 = bin2hex(openssl_encrypt($data1, "AES-256-CBC", $key, OPENSSL_RAW_DATA, $iv));
    //壓碼
    $hashs = "HashKey=" . $key . "&" . $edata1 . "&HashIV=" . $iv;
    $hash = strtoupper(hash("sha256", $hashs));

    ?>
    <fieldset>
        <legend>程式範例</legend>
        <pre>
//商店資訊
$uid = $_POST['UID'];
$key = $_POST['key'];
$iv = $_POST['iv'];
$url = $_POST['url'];
$encrypt = $_POST['EncryptType'];

//生成請求字串
unset($_POST['key'], $_POST['iv'], $_POST['url'], $_POST['EncryptType']);
$data1 = http_build_query($_POST);

// AES/CBC加密模式
$edata1 = bin2hex(openssl_encrypt($data1, "AES-256-CBC", $key, OPENSSL_RAW_DATA, $iv));

//壓碼
$hashs = "HashKey=" . $key . "&" . $edata1 . "&HashIV=" . $iv;
$hash=strtoupper(hash("sha256",$hashs));
    </pre>
    </fieldset>

    <form action="<?= $url; ?>" method="post">
        <fieldset>
            <legend>表格範例</legend>
            <table>
                <tr>
                    <td>金流合作推廣商代號: </td>
                    <td><input name="UID_" value="<?= $uid; ?>" readonly></td>
                </tr>
                <tr>
                    <td>串接程式版本:</td>
                    <td><input name="Version_" value="<?= $_POST['Version_']; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2">加密資料:</td>

                </tr>
                <tr>
                    <td colspan="2"><textarea name="EncryptData_" cols="100" rows="7"><?= $edata1; ?></textarea></td>

                </tr>
                <tr>
                    <td colspan="2">加密壓碼內容:</td>

                </tr>
                <tr>
                    <td colspan="2"><textarea name="HashData_" id="" cols="100" rows="2"><?= $hash; ?></textarea></td>

                </tr>
                <tr>
                    <td colspan="2"><input type=submit value="建立商店"></td>

                </tr>
            </table>
        </fieldset>
    </form>
    <a href="AddMerchantWeb_example.php">回本頁</a>

</body>

</html>