<?php
require_once 'includes/db.php';
require_once 'includes/auth.php';

$user = isLoggedIn() ? getLoggedInUser() : null;
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>من نحن - يداً بيد</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .about-section {
            background: #fff;
            padding: 40px;
            border-radius: 20px;
            border: 2px solid var(--dark-green);
            margin: 40px auto;
            max-width: 800px;
            line-height: 1.8;
        }
        .about-section h2 { color: var(--dark-green); margin-bottom: 20px; }
        .about-section p { font-size: 18px; color: #444; margin-bottom: 15px; }
    </style>
</head>
<body>

<div class="container">
    <?php include 'includes/header.php'; ?>

    <div class="about-section">
        <h2>من نحن؟</h2>
        <p>منصة "يداً بيد" هي مبادرة مجتمعية تهدف إلى تسهيل عملية التبرع بالملابس المستعملة (بحالة جيدة) وإيصالها إلى الأشخاص المحتاجين أو المستفيدين بشكل مباشر وبكل كرامة وخصوصية.</p>
        
        <h2>رؤيتنا</h2>
        <p>نسعى لبناء مجتمع متكافل يقلل من الهدر ويدعم الاستدامة، من خلال إعادة تدوير واستخدام الملابس بطريقة تخدم الجميع.</p>

        <h2>كيف نعمل؟</h2>
        <p>ببساطة، يقوم المتبرع بعرض القطع التي لا يحتاجها، ويقوم المستفيد بتصفح القطع وطلب ما يحتاجه. نحن نؤمن أن العمل الجماعي الصغير يمكن أن يحدث فرقاً كبيراً.</p>

        <div style="text-align: center; margin-top: 30px;">
            <i class="fa fa-handshake" style="font-size: 60px; color: var(--dark-green);"></i>
        </div>
    </div>
</div>

</body>
</html>
