<?php
    /* @var $this \yii\web\View */
    /* @var $content string */
    use yii\helpers\Url;
    use yii\helpers\Html;
    \humhub\assets\AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <title><?= strip_tags($this->pageTitle); ?></title>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <?php $this->head() ?>
        <?= $this->render('head'); ?>
    </head>
    <body>
        <?php $this->beginBody(); ?>

        <div class="sidebar">
            <div class="topbar" id="topbar-first">
                <div class="container">
                    <div class="item">
                        <a href="<?= Url::to(['/dashboard/dashboard']); ?>">
                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="none"><g id="Group 4008"><path id="Vector" d="M31.9268 62.6294C48.7272 62.6294 62.3467 49.0099 62.3467 32.2095C62.3467 15.409 48.7272 1.78955 31.9268 1.78955C15.1263 1.78955 1.50684 15.409 1.50684 32.2095C1.50684 49.0099 15.1263 62.6294 31.9268 62.6294Z" stroke="#B2B1B1" stroke-width="2" stroke-miterlimit="10" style="fill: transparent !important;"/><path id="Vector_2" d="M52.5052 5.81558C52.5052 9.08684 49.87 11.6312 46.6896 11.6312C43.4183 11.6312 40.874 8.99597 40.874 5.81558C40.874 2.54431 43.5092 0 46.6896 0C49.87 0 52.5052 2.63518 52.5052 5.81558Z" fill="#B2B1B1"/></g></svg><b class="caret"></b></div>
                            <span class="name"><?= Yii::t('base', 'Лента'); ?></span>
                        </a>
                    </div>
                    <?= \humhub\widgets\NotificationArea::widget(); ?>
                    <div class="item">
                        <a href="<?= Url::to(['/directory/directory']); ?>">
                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51" fill="none"><g id="Group 4318"><g id="Group"><g id="Group_2"><path id="Vector" d="M18.1451 0H3.71163C1.66464 0 0 1.66491 0 3.7111V18.1459C0 20.1924 1.66491 21.857 3.71163 21.857H18.1451C20.1921 21.857 21.8568 20.1921 21.8568 18.1454V3.71083C21.8568 1.66491 20.1921 0 18.1451 0ZM18.1451 20.0355H3.7111C2.66866 20.0355 1.821 19.1881 1.821 18.1457V3.7111C1.821 2.66866 2.66893 1.82126 3.7111 1.82126H18.1446C19.187 1.82126 20.0347 2.66866 20.0347 3.7111V18.1457H20.035C20.035 19.1881 19.1873 20.0355 18.1451 20.0355Z" fill="#B2B1B1"/></g></g><g id="Group_3"><g id="Group_4"><path id="Vector_2" d="M47.2887 0H32.8552C30.8082 0 29.1436 1.66491 29.1436 3.7111V18.1459C29.1436 20.1924 30.8085 21.857 32.8552 21.857H47.2887C49.3354 21.857 51.0003 20.1921 51.0003 18.1454V3.71083C51.0003 1.66491 49.3354 0 47.2887 0ZM49.1782 18.1457C49.1782 19.1881 48.3303 20.0355 47.2881 20.0355H32.8547C31.8122 20.0355 30.9646 19.1881 30.9646 18.1457V3.7111C30.9646 2.66866 31.8125 1.82126 32.8547 1.82126H47.2881C48.3306 1.82126 49.1782 2.66866 49.1782 3.7111V18.1457Z" fill="#B2B1B1"/></g></g><g id="Group_5"><g id="Group_6"><path id="Vector_3" d="M18.1451 29.1431H3.71163C1.66518 29.1431 0 30.808 0 32.8542V47.289C0 49.3355 1.66491 51.0001 3.71163 51.0001H18.1451C20.1921 51.0001 21.8568 49.3352 21.8568 47.2885V32.8539C21.8568 30.8077 20.1921 29.1431 18.1451 29.1431ZM18.1451 49.1786H3.7111C2.66866 49.1786 1.821 48.3312 1.821 47.2887V32.8542C1.821 31.8117 2.66893 30.9643 3.7111 30.9643H18.1446C19.187 30.9643 20.0347 31.8117 20.0347 32.8542V47.2887H20.035C20.035 48.3312 19.1873 49.1786 18.1451 49.1786Z" fill="#B2B1B1"/></g></g><g id="Group_7"><g id="Group_8"><path id="Vector_4" d="M47.2887 29.1431H32.8552C30.8082 29.1431 29.1436 30.808 29.1436 32.8542V47.289C29.1436 49.3355 30.8085 51.0001 32.8552 51.0001H47.2887C49.3354 51.0001 51.0003 49.3352 51.0003 47.2885V32.8539C51.0003 30.8077 49.3354 29.1431 47.2887 29.1431ZM49.1782 47.2887C49.1782 48.3312 48.3303 49.1786 47.2881 49.1786H32.8547C31.8122 49.1786 30.9646 48.3312 30.9646 47.2887V32.8542C30.9646 31.8117 31.8125 30.9643 32.8547 30.9643H47.2881C48.3306 30.9643 49.1782 31.8117 49.1782 32.8542V47.2887Z" fill="#B2B1B1"/></g></g></g></svg></div>
                            <span class="name"><?= Yii::t('base', 'Разделы'); ?></span>
                        </a>
                    </div>
                    <?= \humhub\modules\space\widgets\Chooser::widget(); ?>
                    <div class="item" id="search-menu-nav">
                        <label class="checksearch">
                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="71" height="65" viewBox="0 0 71 65" fill="none"><g id="Group 3984"><path id="Vector" d="M63.7465 32.8274C63.1226 32.4597 62.5923 31.9526 62.1972 31.3458C61.8021 30.7389 61.5529 30.0488 61.4692 29.3295C61.4491 29.155 61.3746 28.9912 61.2563 28.8614C61.1379 28.7316 60.9817 28.6424 60.8098 28.6063C60.6379 28.5702 60.459 28.5892 60.2985 28.6605C60.138 28.7318 60.0039 28.8518 59.9155 29.0036C59.5498 29.6286 59.0443 30.1604 58.4386 30.5574C57.833 30.9544 57.1436 31.2057 56.4246 31.2916C56.2503 31.312 56.0869 31.3865 55.9573 31.5048C55.8278 31.6231 55.7387 31.7792 55.7027 31.9509C55.6667 32.1226 55.6856 32.3012 55.7567 32.4616C55.8277 32.622 55.9474 32.7559 56.0988 32.8446C56.7227 33.2122 57.253 33.7193 57.6481 34.3262C58.0433 34.933 58.2924 35.6232 58.3762 36.3425C58.3963 36.517 58.4707 36.6807 58.5891 36.8105C58.7074 36.9403 58.8636 37.0296 59.0356 37.0656C59.2075 37.1017 59.3864 37.0827 59.5469 37.0114C59.7074 36.9401 59.8414 36.8201 59.9299 36.6684C60.2956 36.0433 60.8011 35.5115 61.4068 35.1145C62.0124 34.7175 62.7018 34.4662 63.4208 34.3803C63.5951 34.36 63.7585 34.2854 63.8881 34.1671C64.0176 34.0488 64.1067 33.8928 64.1427 33.7211C64.1787 33.5494 64.1598 33.3707 64.0887 33.2103C64.0176 33.05 63.8979 32.916 63.7465 32.8274ZM59.5881 34.4313C59.2889 33.7175 58.8628 33.0638 58.3305 32.502C59.0437 32.2014 59.6965 31.774 60.2573 31.2406C60.5565 31.9544 60.9826 32.6081 61.5149 33.1699C60.8017 33.4705 60.1489 33.8979 59.5881 34.4313Z" fill="#B2B1B1"/><path id="Vector_2" d="M9.3315 5.10617C8.70759 4.73855 8.1773 4.23143 7.78219 3.62456C7.38709 3.01769 7.1379 2.32756 7.05416 1.60826C7.03409 1.43376 6.9596 1.27001 6.84125 1.14021C6.7229 1.01041 6.5667 0.921161 6.39479 0.885104C6.22288 0.849047 6.04397 0.868013 5.88345 0.939319C5.72292 1.01062 5.58891 1.13065 5.50041 1.28238C5.13471 1.90741 4.62923 2.43926 4.02357 2.83623C3.41792 3.23319 2.72856 3.4845 2.00952 3.57045C1.83527 3.59077 1.67183 3.66535 1.54229 3.78365C1.41275 3.90195 1.32368 4.05798 1.28767 4.22967C1.25166 4.40136 1.27053 4.58003 1.34162 4.74041C1.41271 4.90078 1.53241 5.03476 1.68381 5.12338C2.30771 5.491 2.838 5.99811 3.23311 6.60498C3.62822 7.21185 3.8774 7.90198 3.96114 8.62128C3.98122 8.79578 4.0557 8.95954 4.17405 9.08934C4.2924 9.21913 4.4486 9.30838 4.62052 9.34444C4.79243 9.3805 4.97133 9.36153 5.13186 9.29023C5.29238 9.21892 5.42639 9.0989 5.51489 8.94717C5.88059 8.32214 6.38608 7.79029 6.99173 7.39332C7.59738 6.99635 8.28675 6.74505 9.00578 6.6591C9.18003 6.63878 9.34348 6.56419 9.47301 6.44589C9.60255 6.3276 9.69162 6.17157 9.72763 5.99988C9.76365 5.82819 9.74477 5.64952 9.67368 5.48914C9.6026 5.32876 9.48289 5.19479 9.3315 5.10617ZM5.17304 6.71015C4.87386 5.99633 4.44776 5.34265 3.91542 4.78082C4.62865 4.48023 5.28148 4.05285 5.84227 3.5194C6.14145 4.23322 6.56754 4.8869 7.09988 5.44873C6.38666 5.74931 5.73382 6.1767 5.17304 6.71015Z" fill="#B2B1B1"/><g id="Group 3899"><g id="Group"><g id="Group_2"><g id="Vector_3"><mask id="path-3-inside-1" fill="white"><path d="M29.1148 8.65918C22.1634 8.65918 16.3071 13.4367 14.6564 19.8807C14.6469 19.9137 14.6384 19.9471 14.6318 19.9812C14.3448 21.1351 14.1914 22.3412 14.1914 23.5825C14.1914 31.8113 20.886 38.5059 29.1148 38.5059C37.3435 38.5059 44.0381 31.8113 44.0381 23.5825C44.0381 15.3538 37.3435 8.65918 29.1148 8.65918ZM27.9221 29.8516C27.2465 29.8516 26.6989 30.3992 26.6989 31.0748C26.6989 31.7504 27.2465 32.298 27.9221 32.298H38.0337C35.7668 34.6172 32.6063 36.0594 29.1148 36.0594C22.235 36.0594 16.6379 30.4623 16.6379 23.5825C16.6379 22.8518 16.7016 22.1356 16.8227 21.439H22.1491C22.4348 21.439 22.5935 21.609 22.6625 21.7104C22.7316 21.8118 22.8319 22.0216 22.7274 22.2876L22.6422 22.5046C22.2711 23.4498 22.3908 24.515 22.9628 25.354C23.5348 26.193 24.4824 26.694 25.4978 26.694H30.1247C30.8002 26.694 31.3479 26.1464 31.3479 25.4708C31.3479 24.7952 30.8002 24.2476 30.1247 24.2476H25.4978C25.2121 24.2476 25.0534 24.0776 24.9843 23.9762C24.9152 23.8748 24.8149 23.665 24.9193 23.3989L25.0046 23.1819C25.3757 22.2367 25.256 21.1716 24.684 20.3325C24.112 19.4935 23.1644 18.9925 22.149 18.9925H17.5127C19.345 14.3773 23.8549 11.1056 29.1148 11.1056C33.1608 11.1056 36.7626 13.042 39.0438 16.0362H31.8063C31.1308 16.0362 30.5831 16.5838 30.5831 17.2594C30.5831 17.935 31.1308 18.4827 31.8063 18.4827H40.501C41.2016 20.0404 41.5918 21.7668 41.5918 23.5825C41.5917 25.8663 40.9743 28.0083 39.8987 29.8516H27.9221Z"/></mask><path d="M29.1148 8.65918C22.1634 8.65918 16.3071 13.4367 14.6564 19.8807C14.6469 19.9137 14.6384 19.9471 14.6318 19.9812C14.3448 21.1351 14.1914 22.3412 14.1914 23.5825C14.1914 31.8113 20.886 38.5059 29.1148 38.5059C37.3435 38.5059 44.0381 31.8113 44.0381 23.5825C44.0381 15.3538 37.3435 8.65918 29.1148 8.65918ZM27.9221 29.8516C27.2465 29.8516 26.6989 30.3992 26.6989 31.0748C26.6989 31.7504 27.2465 32.298 27.9221 32.298H38.0337C35.7668 34.6172 32.6063 36.0594 29.1148 36.0594C22.235 36.0594 16.6379 30.4623 16.6379 23.5825C16.6379 22.8518 16.7016 22.1356 16.8227 21.439H22.1491C22.4348 21.439 22.5935 21.609 22.6625 21.7104C22.7316 21.8118 22.8319 22.0216 22.7274 22.2876L22.6422 22.5046C22.2711 23.4498 22.3908 24.515 22.9628 25.354C23.5348 26.193 24.4824 26.694 25.4978 26.694H30.1247C30.8002 26.694 31.3479 26.1464 31.3479 25.4708C31.3479 24.7952 30.8002 24.2476 30.1247 24.2476H25.4978C25.2121 24.2476 25.0534 24.0776 24.9843 23.9762C24.9152 23.8748 24.8149 23.665 24.9193 23.3989L25.0046 23.1819C25.3757 22.2367 25.256 21.1716 24.684 20.3325C24.112 19.4935 23.1644 18.9925 22.149 18.9925H17.5127C19.345 14.3773 23.8549 11.1056 29.1148 11.1056C33.1608 11.1056 36.7626 13.042 39.0438 16.0362H31.8063C31.1308 16.0362 30.5831 16.5838 30.5831 17.2594C30.5831 17.935 31.1308 18.4827 31.8063 18.4827H40.501C41.2016 20.0404 41.5918 21.7668 41.5918 23.5825C41.5917 25.8663 40.9743 28.0083 39.8987 29.8516H27.9221Z" fill="#B2B1B1" stroke="#F2F2F2" stroke-width="0.6" mask="url(#path-3-inside-1)"/></g></g></g><g id="Group_3"><g id="Group_4"><g id="Vector_4"><mask id="path-4-inside-2" fill="white"><path d="M68.551 54.9722L65.9618 52.3832C65.4841 51.9056 64.7096 51.9056 64.2319 52.3832C63.7542 52.8609 63.7542 53.6354 64.2319 54.1132L66.8211 56.7023C67.4333 57.3145 67.7706 58.1284 67.7706 58.9944C67.7706 59.8603 67.4335 60.6742 66.8212 61.2864C65.5573 62.5503 63.5008 62.5505 62.237 61.2864L52.3988 51.4482L56.983 46.864L58.1771 48.0581C58.6549 48.5357 59.4293 48.5358 59.9071 48.0581C60.3847 47.5804 60.3847 46.8059 59.9071 46.3281L54.7112 41.1321C54.1223 40.5432 53.3392 40.2188 52.5064 40.2188C51.6735 40.2188 50.8906 40.5431 50.3016 41.1321L49.3493 42.0844L45.5902 38.3253C49.036 34.4725 51.1347 29.3904 51.1347 23.8266C51.1347 11.8208 41.3671 2.05322 29.3613 2.05322C17.3555 2.05322 7.58789 11.8207 7.58789 23.8266C7.58789 35.8326 17.3555 45.6 29.3613 45.6C34.925 45.6 40.0072 43.5014 43.8602 40.0554L47.6193 43.8145L46.667 44.7669C46.0781 45.3558 45.7537 46.1389 45.7537 46.9715C45.7537 47.8045 46.0781 48.5874 46.667 49.1763L49.8027 52.312C49.8031 52.3124 49.8034 52.3127 49.8037 52.3131C49.8041 52.3135 49.8045 52.3137 49.8048 52.3141L60.5069 63.0163C61.6158 64.1251 63.0724 64.6797 64.5289 64.6797C65.9854 64.6797 67.442 64.1252 68.551 63.0163C70.7687 60.7985 70.7687 57.19 68.551 54.9722ZM29.3613 43.1536C18.7043 43.1536 10.0343 34.4835 10.0343 23.8266C10.0343 13.1696 18.7043 4.49967 29.3613 4.49967C40.0183 4.49967 48.6883 13.1696 48.6883 23.8266C48.6883 34.4835 40.0183 43.1536 29.3613 43.1536ZM48.3969 47.4464C48.27 47.3194 48.2002 47.1508 48.2002 46.9715C48.2002 46.7922 48.27 46.6235 48.3969 46.4967L52.0313 42.8621C52.1582 42.7354 52.3269 42.6655 52.5062 42.6655C52.6855 42.6655 52.8542 42.7354 52.9811 42.8622L55.2529 45.1341L50.6688 49.7183L48.3969 47.4464Z"/></mask><path d="M68.551 54.9722L65.9618 52.3832C65.4841 51.9056 64.7096 51.9056 64.2319 52.3832C63.7542 52.8609 63.7542 53.6354 64.2319 54.1132L66.8211 56.7023C67.4333 57.3145 67.7706 58.1284 67.7706 58.9944C67.7706 59.8603 67.4335 60.6742 66.8212 61.2864C65.5573 62.5503 63.5008 62.5505 62.237 61.2864L52.3988 51.4482L56.983 46.864L58.1771 48.0581C58.6549 48.5357 59.4293 48.5358 59.9071 48.0581C60.3847 47.5804 60.3847 46.8059 59.9071 46.3281L54.7112 41.1321C54.1223 40.5432 53.3392 40.2188 52.5064 40.2188C51.6735 40.2188 50.8906 40.5431 50.3016 41.1321L49.3493 42.0844L45.5902 38.3253C49.036 34.4725 51.1347 29.3904 51.1347 23.8266C51.1347 11.8208 41.3671 2.05322 29.3613 2.05322C17.3555 2.05322 7.58789 11.8207 7.58789 23.8266C7.58789 35.8326 17.3555 45.6 29.3613 45.6C34.925 45.6 40.0072 43.5014 43.8602 40.0554L47.6193 43.8145L46.667 44.7669C46.0781 45.3558 45.7537 46.1389 45.7537 46.9715C45.7537 47.8045 46.0781 48.5874 46.667 49.1763L49.8027 52.312C49.8031 52.3124 49.8034 52.3127 49.8037 52.3131C49.8041 52.3135 49.8045 52.3137 49.8048 52.3141L60.5069 63.0163C61.6158 64.1251 63.0724 64.6797 64.5289 64.6797C65.9854 64.6797 67.442 64.1252 68.551 63.0163C70.7687 60.7985 70.7687 57.19 68.551 54.9722ZM29.3613 43.1536C18.7043 43.1536 10.0343 34.4835 10.0343 23.8266C10.0343 13.1696 18.7043 4.49967 29.3613 4.49967C40.0183 4.49967 48.6883 13.1696 48.6883 23.8266C48.6883 34.4835 40.0183 43.1536 29.3613 43.1536ZM48.3969 47.4464C48.27 47.3194 48.2002 47.1508 48.2002 46.9715C48.2002 46.7922 48.27 46.6235 48.3969 46.4967L52.0313 42.8621C52.1582 42.7354 52.3269 42.6655 52.5062 42.6655C52.6855 42.6655 52.8542 42.7354 52.9811 42.8622L55.2529 45.1341L50.6688 49.7183L48.3969 47.4464Z" fill="#B2B1B1" stroke="#F2F2F2" stroke-width="0.6" mask="url(#path-4-inside-2)"/></g></g></g><g id="Group_5"><g id="Group_6"><g id="Vector_5"><mask id="path-5-inside-3" fill="white"><path d="M27.5151 52.3344C27.4654 52.3191 27.4156 52.3083 27.3657 52.2995C26.9645 51.4935 26.4308 50.7373 25.76 50.0665C24.1427 48.4492 21.9925 47.5586 19.7053 47.5586C17.4181 47.5586 15.2679 48.4492 13.6506 50.0665C12.9779 50.7391 12.4331 51.505 12.0236 52.3336C11.9235 52.3397 11.8226 52.3567 11.7228 52.3889C8.30446 53.4872 7.58691 55.0248 7.58691 56.1212C7.58691 57.9112 9.42995 59.173 12.0464 59.9539C12.4534 60.765 12.9903 61.5155 13.6507 62.1759C15.3199 63.8451 17.5127 64.6797 19.7054 64.6797C21.898 64.6797 24.0908 63.8451 25.76 62.1759C26.4274 61.5085 26.959 60.7566 27.3595 59.9554C29.9785 59.1746 31.8237 57.9122 31.8237 56.1212C31.8238 55.0002 31.0763 53.4335 27.5151 52.3344ZM11.19 57.019C10.3065 56.5853 10.0455 56.2149 10.0334 56.1229C10.0455 56.0294 10.3061 55.6582 11.19 55.2237C11.1593 55.52 11.1428 55.8193 11.1428 56.1212C11.1428 56.4232 11.1593 56.7226 11.19 57.019ZM15.6307 60.6817C16.9561 60.8495 18.3429 60.9316 19.7053 60.9316C21.0678 60.9316 22.4545 60.8495 23.78 60.6817C21.4664 62.7511 17.9443 62.7512 15.6307 60.6817ZM25.5567 57.8957C23.8536 58.2782 21.8284 58.4852 19.7053 58.4852C17.5821 58.4852 15.557 58.2782 13.8539 57.8957C13.2241 55.8064 13.7326 53.4444 15.3806 51.7965C16.5358 50.6412 18.0717 50.005 19.7053 50.005C21.3389 50.005 22.8748 50.6411 24.03 51.7965C25.6779 53.4444 26.1864 55.8064 25.5567 57.8957ZM28.2154 57.0216C28.2781 56.4229 28.2781 55.8193 28.2154 55.2206C29.1012 55.6546 29.3651 56.026 29.3774 56.1196C29.3652 56.2141 29.1031 56.5865 28.2154 57.0216Z"/></mask><path d="M27.5151 52.3344C27.4654 52.3191 27.4156 52.3083 27.3657 52.2995C26.9645 51.4935 26.4308 50.7373 25.76 50.0665C24.1427 48.4492 21.9925 47.5586 19.7053 47.5586C17.4181 47.5586 15.2679 48.4492 13.6506 50.0665C12.9779 50.7391 12.4331 51.505 12.0236 52.3336C11.9235 52.3397 11.8226 52.3567 11.7228 52.3889C8.30446 53.4872 7.58691 55.0248 7.58691 56.1212C7.58691 57.9112 9.42995 59.173 12.0464 59.9539C12.4534 60.765 12.9903 61.5155 13.6507 62.1759C15.3199 63.8451 17.5127 64.6797 19.7054 64.6797C21.898 64.6797 24.0908 63.8451 25.76 62.1759C26.4274 61.5085 26.959 60.7566 27.3595 59.9554C29.9785 59.1746 31.8237 57.9122 31.8237 56.1212C31.8238 55.0002 31.0763 53.4335 27.5151 52.3344ZM11.19 57.019C10.3065 56.5853 10.0455 56.2149 10.0334 56.1229C10.0455 56.0294 10.3061 55.6582 11.19 55.2237C11.1593 55.52 11.1428 55.8193 11.1428 56.1212C11.1428 56.4232 11.1593 56.7226 11.19 57.019ZM15.6307 60.6817C16.9561 60.8495 18.3429 60.9316 19.7053 60.9316C21.0678 60.9316 22.4545 60.8495 23.78 60.6817C21.4664 62.7511 17.9443 62.7512 15.6307 60.6817ZM25.5567 57.8957C23.8536 58.2782 21.8284 58.4852 19.7053 58.4852C17.5821 58.4852 15.557 58.2782 13.8539 57.8957C13.2241 55.8064 13.7326 53.4444 15.3806 51.7965C16.5358 50.6412 18.0717 50.005 19.7053 50.005C21.3389 50.005 22.8748 50.6411 24.03 51.7965C25.6779 53.4444 26.1864 55.8064 25.5567 57.8957ZM28.2154 57.0216C28.2781 56.4229 28.2781 55.8193 28.2154 55.2206C29.1012 55.6546 29.3651 56.026 29.3774 56.1196C29.3652 56.2141 29.1031 56.5865 28.2154 57.0216Z" fill="#B2B1B1" stroke="#F2F2F2" stroke-width="0.6" mask="url(#path-5-inside-3)"/></g></g></g><g id="Group_7"><g id="Group_8"><g id="Vector_6"><mask id="path-6-inside-4" fill="white"><path d="M62.6318 2.05371C58.45 2.05371 55.0479 5.45587 55.0479 9.63771C55.0479 13.8195 58.45 17.2217 62.6318 17.2217C66.8137 17.2217 70.2158 13.8195 70.2158 9.63771C70.2158 5.45587 66.8137 2.05371 62.6318 2.05371ZM62.6318 14.7753C59.799 14.7753 57.4943 12.4706 57.4943 9.63771C57.4943 6.80484 59.799 4.50016 62.6318 4.50016C65.4647 4.50016 67.7694 6.80484 67.7694 9.63771C67.7694 12.4706 65.4647 14.7753 62.6318 14.7753Z"/></mask><path d="M62.6318 2.05371C58.45 2.05371 55.0479 5.45587 55.0479 9.63771C55.0479 13.8195 58.45 17.2217 62.6318 17.2217C66.8137 17.2217 70.2158 13.8195 70.2158 9.63771C70.2158 5.45587 66.8137 2.05371 62.6318 2.05371ZM62.6318 14.7753C59.799 14.7753 57.4943 12.4706 57.4943 9.63771C57.4943 6.80484 59.799 4.50016 62.6318 4.50016C65.4647 4.50016 67.7694 6.80484 67.7694 9.63771C67.7694 12.4706 65.4647 14.7753 62.6318 14.7753Z" fill="#B2B1B1" stroke="#F2F2F2" stroke-width="0.6" mask="url(#path-6-inside-4)"/></g></g></g></g></g></svg><b class="caret"></b></div>
                            <span class="name"><?= Yii::t('base', 'Поиск'); ?></span>
                            
                            <input type="checkbox" class="checksearch" id="checksearch">
                            <?= \humhub\widgets\TopMenuRightStack::widget(); ?>
                        </label>
                    </div>
                </div>
                <div class="account">
                    <?= \humhub\modules\user\widgets\AccountTopMenu::widget(); ?>
                </div>
            </div>
        </div>

        

        <!-- Start content -->
        <?= $content; ?>
        <!-- End content -->

        <?php $this->endBody(); ?>

        <!-- start: js Mods -->
        <script src="<?= $this->theme->getBaseUrl(); ?>/js/CtrlEnterMod.js"></script>
        <!-- end: js Mods -->

    </body>
</html>
<?php $this->endPage() ?>
