@extends('layouts.app')

@section('title', 'Moneyball')
@section('opengraph')
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Moneyball">
    <meta property="og:description" content="">
    <meta property="og:image" content="http://moneyball.redlab.site/img/start-img.png">
@endsection
@section('content')
    <div class="b-main">
        <img src="img/main-bg-img.svg" alt="" class="main-bg-img">
        <div class="container">
            <div class="main-top">
                <div class="main-img aos" id="scene1" data-aos="fade-up" data-aos-delay="100" data-aos-duration="500">
                    <img data-src="img/main-img.png" data-retina="img/main-img.png" data-webp="img/main-img.webp" data-webp-retina="img/main-img.webp" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyWebp basket-layer" alt="">
                    <img data-src="img/basketplayer.png" data-retina="img/basketplayer.png" data-webp="img/basketplayer.webp" data-webp-retina="img/basketplayer.webp" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyWebp basketplayer" data-depth="0.1" alt="">
                </div>
                <div class="title aos" data-aos="fade-up" data-aos-delay="100" data-aos-duration="500">Home of the
                </div>
                <div class="boost aos" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">
                    <svg width="1513" height="117" viewbox="0 0 1513 117" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.268 115H49.564C74.68 115 86.224 101.896 86.224 83.8C86.224 70.852 80.764 60.244 63.448 55.72V55.408C77.02 50.26 80.452 40.276 80.452 31.228C80.452 14.692 69.22 4.23999 43.792 4.23999H0.268V115ZM28.972 47.92V29.98H39.268C48.94 29.98 51.124 33.724 51.124 39.028C51.124 44.644 47.848 47.92 40.984 47.92H28.972ZM28.972 89.572V69.604H44.26C51.436 69.604 55.492 73.192 55.492 79.432C55.492 85.984 51.436 89.572 44.26 89.572H28.972ZM148.896 116.56C182.592 116.56 206.46 93.472 206.46 59.62C206.46 25.612 182.592 2.524 148.896 2.524C114.888 2.524 91.3323 25.924 91.3323 59.62C91.3323 93.316 114.888 116.56 148.896 116.56ZM148.896 88.948C133.452 88.948 122.532 76 122.532 59.62C122.532 43.24 133.452 30.292 148.896 30.292C164.496 30.292 175.26 43.396 175.26 59.62C175.26 76 164.496 88.948 148.896 88.948ZM270.361 116.56C304.057 116.56 327.925 93.472 327.925 59.62C327.925 25.612 304.057 2.524 270.361 2.524C236.353 2.524 212.797 25.924 212.797 59.62C212.797 93.316 236.353 116.56 270.361 116.56ZM270.361 88.948C254.917 88.948 243.997 76 243.997 59.62C243.997 43.24 254.917 30.292 270.361 30.292C285.961 30.292 296.725 43.396 296.725 59.62C296.725 76 285.961 88.948 270.361 88.948ZM391.826 116.56C425.522 116.56 449.39 93.472 449.39 59.62C449.39 25.612 425.522 2.524 391.826 2.524C357.818 2.524 334.262 25.924 334.262 59.62C334.262 93.316 357.818 116.56 391.826 116.56ZM391.826 88.948C376.382 88.948 365.462 76 365.462 59.62C365.462 43.24 376.382 30.292 391.826 30.292C407.426 30.292 418.19 43.396 418.19 59.62C418.19 76 407.426 88.948 391.826 88.948ZM513.291 116.56C546.987 116.56 570.855 93.472 570.855 59.62C570.855 25.612 546.987 2.524 513.291 2.524C479.283 2.524 455.727 25.924 455.727 59.62C455.727 93.316 479.283 116.56 513.291 116.56ZM513.291 88.948C497.847 88.948 486.927 76 486.927 59.62C486.927 43.24 497.847 30.292 513.291 30.292C528.891 30.292 539.655 43.396 539.655 59.62C539.655 76 528.891 88.948 513.291 88.948ZM634.756 116.56C668.452 116.56 692.32 93.472 692.32 59.62C692.32 25.612 668.452 2.524 634.756 2.524C600.748 2.524 577.192 25.924 577.192 59.62C577.192 93.316 600.748 116.56 634.756 116.56ZM634.756 88.948C619.312 88.948 608.392 76 608.392 59.62C608.392 43.24 619.312 30.292 634.756 30.292C650.356 30.292 661.12 43.396 661.12 59.62C661.12 76 650.356 88.948 634.756 88.948ZM756.221 116.56C789.917 116.56 813.785 93.472 813.785 59.62C813.785 25.612 789.917 2.524 756.221 2.524C722.213 2.524 698.657 25.924 698.657 59.62C698.657 93.316 722.213 116.56 756.221 116.56ZM756.221 88.948C740.777 88.948 729.857 76 729.857 59.62C729.857 43.24 740.777 30.292 756.221 30.292C771.821 30.292 782.585 43.396 782.585 59.62C782.585 76 771.821 88.948 756.221 88.948ZM877.685 116.56C911.381 116.56 935.249 93.472 935.249 59.62C935.249 25.612 911.381 2.524 877.685 2.524C843.677 2.524 820.121 25.924 820.121 59.62C820.121 93.316 843.677 116.56 877.685 116.56ZM877.685 88.948C862.241 88.948 851.321 76 851.321 59.62C851.321 43.24 862.241 30.292 877.685 30.292C893.285 30.292 904.049 43.396 904.049 59.62C904.049 76 893.285 88.948 877.685 88.948ZM999.15 116.56C1032.85 116.56 1056.71 93.472 1056.71 59.62C1056.71 25.612 1032.85 2.524 999.15 2.524C965.142 2.524 941.586 25.924 941.586 59.62C941.586 93.316 965.142 116.56 999.15 116.56ZM999.15 88.948C983.706 88.948 972.786 76 972.786 59.62C972.786 43.24 983.706 30.292 999.15 30.292C1014.75 30.292 1025.51 43.396 1025.51 59.62C1025.51 76 1014.75 88.948 999.15 88.948ZM1120.62 116.56C1154.31 116.56 1178.18 93.472 1178.18 59.62C1178.18 25.612 1154.31 2.524 1120.62 2.524C1086.61 2.524 1063.05 25.924 1063.05 59.62C1063.05 93.316 1086.61 116.56 1120.62 116.56ZM1120.62 88.948C1105.17 88.948 1094.25 76 1094.25 59.62C1094.25 43.24 1105.17 30.292 1120.62 30.292C1136.22 30.292 1146.98 43.396 1146.98 59.62C1146.98 76 1136.22 88.948 1120.62 88.948ZM1242.08 116.56C1275.78 116.56 1299.64 93.472 1299.64 59.62C1299.64 25.612 1275.78 2.524 1242.08 2.524C1208.07 2.524 1184.52 25.924 1184.52 59.62C1184.52 93.316 1208.07 116.56 1242.08 116.56ZM1242.08 88.948C1226.64 88.948 1215.72 76 1215.72 59.62C1215.72 43.24 1226.64 30.292 1242.08 30.292C1257.68 30.292 1268.44 43.396 1268.44 59.62C1268.44 76 1257.68 88.948 1242.08 88.948ZM1343.58 116.56C1362.14 116.56 1385.38 107.668 1385.38 79.9C1385.38 58.528 1370.56 53.692 1350.91 46.204C1339.68 41.836 1337.34 38.872 1337.34 35.128C1337.34 31.228 1339.83 28.576 1345.14 28.576C1350.6 28.576 1356.52 31.072 1366.2 38.56L1382.58 17.5C1372.28 8.296 1358.71 2.36799 1343.42 2.68C1322.2 3.148 1306.45 17.344 1306.45 36.22C1306.45 58.84 1323.3 66.952 1340.14 72.724C1352 76.624 1354.18 78.964 1354.18 83.332C1354.18 86.764 1351.53 90.508 1344.67 90.508C1337.8 90.508 1328.13 87.076 1319.4 78.184L1302.55 98.776C1314.4 110.944 1329.22 116.56 1343.58 116.56ZM1415.86 115H1446.28V30.604H1473.89V4.23999H1388.25V30.604H1415.86V115ZM1486.96 75.064H1506.46L1511.14 0.18399H1482.28L1486.96 75.064ZM1496.94 116.56C1505.21 116.56 1512.07 109.852 1512.07 101.584C1512.07 93.472 1505.21 86.764 1496.94 86.764C1488.52 86.764 1481.65 93.472 1481.65 101.584C1481.65 109.852 1488.52 116.56 1496.94 116.56Z" fill="#10FFD4"></path>
                    </svg>
                </div>
                <div class="text aos" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">Always get the
                    best price over three legs with our always boosted multis</div>
                <div class="app aos" data-aos="fade-up" data-aos-delay="400" data-aos-duration="500">
                    <div class="app-title">App coming soon</div>
                    <div class="app-box">
                        <div class="left">
                            <div class="app-item">
                                <a href="/">
                                    <img data-src="img/ios_w.png" data-retina="img/ios_w.png" data-webp="img/ios_w.webp" data-webp-retina="img/ios_w.webp" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyWebp" alt="">
                                </a>
                            </div>
                            <div class="app-item">
                                <a href="/">
                                    <img data-src="img/google_w.png" data-retina="img/google_w.png" data-webp="img/google_w.webp" data-webp-retina="img/google_w.webp" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyWebp" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="right">
                            <div class="qr">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1155px" height="1155px" viewbox="0 0 1155 1155" enable-background="new 0 0 1155 1155" xml:space="preserve">
                                    <rect x="0" y="0" width="1155" height="1155" fill="rgb(255,255,255)"></rect>
                                    <g transform="translate(70,70)">
                                        <g transform="translate(280,0) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(350,0) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(420,0) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(490,0) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(595,0) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(630,0) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(665,0) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(700,0) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(280,35) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(350,35) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(385,35) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(595,35) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(700,35) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(350,70) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(385,70) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(420,70) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(455,70) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(490,70) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(560,70) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(630,70) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(665,70) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(700,70) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(280,105) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(350,105) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(385,105) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(455,105) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(490,105) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(560,105) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(595,105) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(665,105) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(315,140) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(350,140) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(385,140) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(420,140) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(490,140) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(525,140) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(665,140) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(350,175) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(385,175) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(490,175) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(595,175) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(630,175) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(665,175) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(700,175) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(280,210) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(350,210) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(420,210) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(490,210) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(560,210) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(630,210) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(700,210) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(280,245) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(315,245) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(350,245) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(385,245) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(490,245) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(560,245) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(595,245) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(0,280) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(70,280) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(105,280) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(175,280) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(210,280) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(245,280) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(315,280) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(385,280) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(420,280) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(560,280) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(595,280) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(630,280) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(665,280) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(770,280) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(875,280) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(945,280) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(980,280) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(35,315) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(70,315) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(105,315) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(315,315) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(385,315) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(490,315) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(560,315) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(595,315) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(630,315) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(665,315) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(700,315) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(770,315) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(805,315) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(840,315) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(980,315) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(0,350) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(210,350) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(245,350) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(350,350) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(385,350) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(420,350) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(455,350) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(560,350) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(700,350) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(770,350) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(910,350) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(945,350) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(35,385) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(105,385) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(175,385) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(245,385) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(280,385) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(385,385) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(455,385) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(490,385) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(525,385) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(630,385) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(700,385) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(735,385) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(770,385) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(805,385) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(980,385) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(0,420) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(35,420) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(105,420) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(140,420) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(175,420) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(210,420) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(350,420) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(420,420) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(455,420) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(595,420) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(630,420) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(665,420) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(875,420) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(910,420) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(0,455) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(35,455) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(70,455) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(245,455) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(315,455) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(385,455) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(420,455) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(525,455) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(665,455) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(770,455) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(910,455) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(945,455) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(980,455) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(0,490) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(35,490) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(70,490) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(105,490) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(210,490) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(245,490) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(455,490) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(490,490) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(595,490) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(630,490) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(665,490) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(700,490) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(770,490) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(840,490) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(910,490) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(945,490) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(980,490) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(0,525) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(140,525) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(175,525) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(315,525) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(350,525) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(385,525) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(420,525) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(490,525) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(630,525) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(665,525) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(700,525) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(735,525) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(770,525) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(805,525) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(945,525) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(35,560) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(70,560) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(210,560) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(245,560) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(315,560) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(385,560) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(455,560) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(490,560) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(525,560) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(630,560) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(665,560) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(700,560) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(735,560) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(805,560) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(840,560) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(875,560) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(945,560) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(70,595) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(245,595) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(490,595) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(525,595) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(595,595) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(700,595) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(805,595) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(875,595) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(910,595) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(945,595) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(0,630) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(210,630) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(245,630) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(280,630) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(315,630) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(385,630) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(420,630) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(525,630) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(560,630) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(735,630) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(805,630) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(910,630) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(70,665) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(140,665) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(385,665) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(420,665) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(490,665) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(525,665) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(595,665) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(630,665) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(665,665) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(735,665) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(840,665) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(910,665) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(35,700) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(70,700) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(105,700) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(175,700) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(210,700) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(280,700) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(350,700) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(420,700) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(490,700) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(595,700) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(630,700) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(700,700) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(735,700) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(770,700) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(805,700) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(840,700) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(875,700) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(910,700) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(280,735) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(315,735) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(350,735) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(420,735) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(525,735) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(560,735) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(630,735) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(700,735) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(840,735) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(875,735) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(910,735) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(945,735) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(980,735) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(280,770) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(315,770) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(350,770) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(420,770) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(455,770) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(490,770) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(595,770) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(630,770) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(665,770) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(700,770) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(770,770) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(840,770) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(875,770) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(945,770) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(280,805) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(315,805) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(385,805) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(420,805) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(455,805) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(490,805) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(525,805) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(560,805) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(630,805) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(665,805) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(700,805) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(840,805) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(875,805) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(385,840) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(595,840) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(630,840) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(700,840) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(735,840) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(770,840) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(805,840) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(840,840) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(910,840) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(945,840) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(980,840) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(280,875) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(315,875) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(350,875) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(420,875) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(455,875) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(490,875) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(560,875) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(700,875) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(735,875) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(805,875) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(840,875) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(875,875) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(980,875) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(280,910) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(385,910) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(560,910) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(595,910) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(630,910) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(700,910) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(805,910) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(910,910) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(980,910) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(385,945) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(420,945) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(525,945) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(700,945) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(770,945) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(805,945) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(840,945) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(875,945) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(945,945) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(280,980) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(385,980) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(420,980) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(560,980) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(595,980) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(630,980) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(665,980) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(700,980) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(840,980) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(945,980) scale(0.35,0.35)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(0,0) scale(2.45, 2.45)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <g>
                                                    <rect x="15" y="15" style="fill:none;" width="70" height="70">
                                                    </rect>
                                                    <path d="M85,0H15H0v15v70v15h15h70h15V85V15V0H85z M85,85H15V15h70V85z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                        <g transform="translate(770,0) scale(2.45, 2.45)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <g>
                                                    <rect x="15" y="15" style="fill:none;" width="70" height="70">
                                                    </rect>
                                                    <path d="M85,0H15H0v15v70v15h15h70h15V85V15V0H85z M85,85H15V15h70V85z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                        <g transform="translate(0,770) scale(2.45, 2.45)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <g>
                                                    <rect x="15" y="15" style="fill:none;" width="70" height="70">
                                                    </rect>
                                                    <path d="M85,0H15H0v15v70v15h15h70h15V85V15V0H85z M85,85H15V15h70V85z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                        <g transform="translate(70,70) scale(1.05, 1.05)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(840,70) scale(1.05, 1.05)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                        <g transform="translate(70,840) scale(1.05, 1.05)">
                                            <g transform="" style="fill: rgb(0, 0, 0);">
                                                <rect width="100" height="100"></rect>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-boost">
                <div class="item aos" data-aos="fade-up" data-aos-duration="1000">
                    <div class="img">
                        <img data-src="img/icon-1.png" data-retina="img/icon-1@2x.png" data-webp="img/icon-1.webp" data-webp-retina="img/icon-1@2x.webp" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyWebp" alt="">
                    </div>
                    <span>Download the app</span>
                    <p>Every sport, tons of players to choose from, over/under + matchup style games and more</p>
                </div>
                <div class="item aos" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">
                    <div class="img">
                        <img data-src="img/icon-2.png" data-retina="img/icon-2@2x.png" data-webp="img/icon-2.webp" data-webp-retina="img/icon-2@2x.webp" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyWebp" alt="">
                    </div>
                    <span>Boost your first bet</span>
                    <p>Follow your friends and favorite experts. Then make sure to let them hear it when you win</p>
                </div>
                <div class="item aos" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <div class="img">
                        <img data-src="img/icon-3.png" data-retina="img/icon-3@2x.png" data-webp="img/icon-3.webp" data-webp-retina="img/icon-3@2x.webp" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyWebp" alt="">
                    </div>
                    <span>Win & share the glory!</span>
                    <p>Earn badges, dominate challenges and climb leaderboards</p>
                </div>
            </div>    
            <div class="main-start aos" data-aos="fade-up" data-aos-duration="1000">
                <div class="main-start-parallax" id="scene2">
                    <div class="ball-1" data-depth="0.1">
                        <img data-src="img/ball-1.png" data-retina="img/ball-1.png" data-webp="img/ball-1.webp" data-webp-retina="img/ball-1.webp" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyWebp" alt="">
                    </div>
                    <div class="ball-2" data-depth="0.2">
                        <img data-src="img/ball-2.png" data-retina="img/ball-2.png" data-webp="img/ball-2.webp" data-webp-retina="img/ball-2.webp" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyWebp" alt="">
                    </div>
                </div>
                <img data-src="img/start-img.png" data-retina="img/start-img.png" data-webp="img/start-img.webp" data-webp-retina="img/start-img.webp" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyWebp start-img" alt="">
                <div class="title">Start your day with a boost</div>
                <ul>
                    <li>
                        <svg width="36" height="36" viewbox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.2" d="M0 18C0 3.177 3.177 0 18 0C32.823 0 36 3.177 36 18C36 32.823 32.823 36 18 36C3.177 36 0 32.823 0 18Z" fill="#015546"></path>
                            <g clip-path="url(#1clip0)">
                                <path d="M23.9583 11.1507C24.0242 11.0599 24.1002 10.9765 24.1713 10.8898C24.9309 9.96378 24.2966 8.5 23.0613 8.5H17.2184C16.8071 8.5 16.4156 8.67956 16.143 8.99316L11.8632 15.5701C11.0434 16.5134 11.7014 18 12.9386 18H13.2073C14.3668 18 15.0293 19.3141 14.4073 20.2649C14.3559 20.3435 14.3062 20.424 14.2705 20.5109L12.1243 25.7403C12.053 25.9141 11.9438 26.0717 11.8758 26.2468C11.6534 26.8198 12.0579 27.5 12.7197 27.5C12.8911 27.5 13.0589 27.4504 13.2036 27.357L22.0208 20.2752C23.0454 19.6138 22.5851 18 21.3718 18C20.3094 18 19.7737 16.7172 20.4728 15.939C20.5103 15.8973 20.5478 15.8552 20.5807 15.8098L23.9583 11.1507Z" stroke="#10FBD1" stroke-width="1.5"></path>
                            </g>
                            <defs>
                                <clipPath id="1clip0">
                                    <rect width="20" height="20" fill="white" transform="translate(8 8)"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                        Best odds over three legs
                    </li>
                    <li>
                        <svg width="36" height="36" viewbox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.2" d="M0 18C0 3.177 3.177 0 18 0C32.823 0 36 3.177 36 18C36 32.823 32.823 36 18 36C3.177 36 0 32.823 0 18Z" fill="#635509"></path>
                            <path d="M16.1822 15.4193H12.407C12.1989 15.4193 11.9934 15.4655 11.8053 15.5545V15.5545C11.3136 15.7871 11 16.2824 11 16.8264V19.1736C11 19.7176 11.3136 20.2129 11.8053 20.4455V20.4455C11.9934 20.5345 12.1989 20.5806 12.407 20.5806H16.1822" stroke="#FBE25C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path d="M16.1826 15.4194L21.3798 12.0224C22.7101 11.153 24.4741 12.1074 24.4741 13.6965V22.3035C24.4741 23.8926 22.7101 24.8471 21.3798 23.9776L16.1826 20.5806" stroke="#FBE25C" stroke-width="1.5"></path>
                            <path d="M12.5543 20.5807L12.9927 24.3661C13.071 25.0419 13.6433 25.5518 14.3237 25.5518V25.5518C15.0637 25.5518 15.6636 24.9519 15.6636 24.2119V20.5807" stroke="#FBE25C" stroke-width="1.5"></path>
                        </svg>
                        Daily promotions
                    </li>
                    <li>
                        <svg width="36" height="36" viewbox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.2" d="M0 18C0 3.177 3.177 0 18 0C32.823 0 36 3.177 36 18C36 32.823 32.823 36 18 36C3.177 36 0 32.823 0 18Z" fill="#9D3E08"></path>
                            <circle cx="14.7116" cy="15.4423" r="1.09615" fill="#FFA16C"></circle>
                            <circle cx="21.2884" cy="15.4423" r="1.09615" fill="#FFA16C"></circle>
                            <circle cx="18" cy="18" r="9.5" stroke="#FFA16C" stroke-width="1.5"></circle>
                            <path d="M12.936 20.923C13.9468 22.6705 15.8361 23.8461 18 23.8461C20.2011 23.8461 22.1181 22.6297 23.1154 20.8324" stroke="#FFA16C" stroke-width="1.5" stroke-linecap="round"></path>
                        </svg>
                        Low touch customer service
                    </li>
                    <li>
                        <svg width="36" height="36" viewbox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.2" d="M0 18C0 3.177 3.177 0 18 0C32.823 0 36 3.177 36 18C36 32.823 32.823 36 18 36C3.177 36 0 32.823 0 18Z" fill="#C50707"></path>
                            <ellipse cx="15.1205" cy="13.3604" rx="3.3308" ry="3.3604" stroke="#FF8E8E" stroke-width="1.5"></ellipse>
                            <path d="M21.8178 23.1847L21.0702 23.2444V23.2444L21.8178 23.1847ZM8.50541 23.1847L9.25303 23.2444L8.50541 23.1847ZM21.2437 24.4946L21.6606 25.1181V25.1181L21.2437 24.4946ZM9.07944 24.4946L9.49626 23.8711L9.49626 23.8711L9.07944 24.4946ZM21.428 21.5312L20.7243 21.7906L21.428 21.5312ZM20.8269 23.8711C20.0686 24.378 18.3128 25.25 15.1616 25.25V26.75C18.6092 26.75 20.6552 25.7902 21.6606 25.1181L20.8269 23.8711ZM15.1616 25.25C12.0104 25.25 10.2546 24.378 9.49626 23.8711L8.66262 25.1181C9.66794 25.7902 11.714 26.75 15.1616 26.75V25.25ZM7.75778 23.1251C7.6987 23.8658 7.98081 24.6623 8.66262 25.1181L9.49626 23.8711C9.35282 23.7752 9.22818 23.556 9.25303 23.2444L7.75778 23.1251ZM21.0702 23.2444C21.095 23.556 20.9704 23.7752 20.8269 23.8711L21.6606 25.1181C22.3424 24.6623 22.6245 23.8658 22.5654 23.1251L21.0702 23.2444ZM20.7243 21.7906C20.8943 22.252 21.0314 22.7584 21.0702 23.2444L22.5654 23.1251C22.5121 22.4566 22.3299 21.8097 22.1317 21.2719L20.7243 21.7906ZM9.25303 23.2444C9.29179 22.7584 9.42887 22.252 9.59892 21.7906L8.19148 21.2719C7.99324 21.8097 7.8111 22.4566 7.75778 23.1251L9.25303 23.2444ZM19.0439 19.2759H11.2793V20.7759H19.0439V19.2759ZM9.59892 21.7906C9.82292 21.1829 10.4723 20.7759 11.2793 20.7759V19.2759C10.0107 19.2759 8.6853 19.9321 8.19148 21.2719L9.59892 21.7906ZM22.1317 21.2719C21.6379 19.9321 20.3125 19.2759 19.0439 19.2759V20.7759C19.8509 20.7759 20.5003 21.1829 20.7243 21.7906L22.1317 21.2719Z" fill="#FF8E8E"></path>
                            <ellipse cx="23.2761" cy="13.2222" rx="2.11088" ry="2.12964" stroke="#FF8E8E" stroke-width="1.5" stroke-linejoin="round"></ellipse>
                            <path d="M18.684 19.5062C18.7655 18.4833 21.8115 18.3447 22.1836 18.3316C22.2086 18.3307 22.2332 18.3304 22.2582 18.3304H23.573C23.573 18.3304 23.573 18.3304 23.573 18.3304C23.573 18.3304 27.4979 18.3304 27.4979 20.6758C27.5268 21.0382 27.2544 21.5506 26.9702 21.7406C26.3627 22.1467 24.4936 22.273 22.2207 22.273" stroke="#FF8E8E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                        Share your bets with friends
                    </li>
                    <li>
                        <svg width="36" height="36" viewbox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" d="M0 18C0 3.177 3.177 0 18 0C32.823 0 36 3.177 36 18C36 32.823 32.823 36 18 36C3.177 36 0 32.823 0 18Z" fill="#AD35E6"></path>
                            <path d="M27.5 20.0607C27.9142 20.0607 28.25 20.3965 28.25 20.8107C28.25 21.2249 27.9142 21.5607 27.5 21.5607L27.5 20.0607ZM8.50001 21.5607C8.08579 21.5607 7.75001 21.2249 7.75001 20.8107C7.75001 20.3965 8.08579 20.0607 8.50001 20.0607L8.50001 21.5607ZM24.1275 19.4296L24.8407 19.1975L24.1275 19.4296ZM23.133 16.3735L23.8462 16.1414L23.133 16.3735ZM17.7009 23.8074L18.4483 23.744L17.7009 23.8074ZM20.6735 23.9371L21.4125 24.0653L20.6735 23.9371ZM16.8097 13.2875L17.5571 13.2242L16.8097 13.2875ZM16.9536 23.8707L16.0624 13.3508L17.5571 13.2242L18.4483 23.744L16.9536 23.8707ZM19.9345 23.8089L21.2323 16.3284L22.7102 16.5848L21.4125 24.0653L19.9345 23.8089ZM23.8462 16.1414L24.8407 19.1975L23.4143 19.6617L22.4198 16.6056L23.8462 16.1414ZM26.0293 20.0607L27.5 20.0607L27.5 21.5607L26.0293 21.5607L26.0293 20.0607ZM14.5825 13.2535L13.2355 19.3995L11.7702 19.0783L13.1173 12.9324L14.5825 13.2535ZM10.5492 21.5607L8.50001 21.5607L8.50001 20.0607L10.5492 20.0607L10.5492 21.5607ZM24.8407 19.1975C25.0082 19.7123 25.488 20.0607 26.0293 20.0607L26.0293 21.5607C24.8384 21.5607 23.7828 20.7942 23.4143 19.6617L24.8407 19.1975ZM21.2323 16.3284C21.473 14.9412 23.4105 14.8026 23.8462 16.1414L22.4198 16.6056C22.4259 16.6244 22.4477 16.6601 22.4883 16.6854C22.5225 16.7067 22.5529 16.7103 22.5731 16.7088C22.5934 16.7074 22.6229 16.6995 22.6537 16.6736C22.6903 16.6427 22.7068 16.6043 22.7102 16.5848L21.2323 16.3284ZM13.2355 19.3995C12.9589 20.6614 11.8411 21.5607 10.5492 21.5607L10.5492 20.0607C11.1365 20.0607 11.6445 19.652 11.7702 19.0783L13.2355 19.3995ZM18.4483 23.744C18.5225 24.6203 19.7842 24.6754 19.9345 23.8089L21.4125 24.0653C20.9615 26.6647 17.1763 26.4995 16.9536 23.8707L18.4483 23.744ZM16.0624 13.3508C15.9898 12.4938 14.7666 12.4134 14.5825 13.2535L13.1173 12.9324C13.6697 10.4119 17.3392 10.6531 17.5571 13.2242L16.0624 13.3508Z" fill="#DD94FF"></path>
                        </svg>
                        Weekly sport prediction games
                    </li>
                </ul>
                <div class="start-app">
                    <div class="app-title">THE ALL NEW MONEYBALL IS COMING SOON</div>
                    <div class="app-items">
                        <div class="app-item">
                            <a href="/">
                                <img data-src="img/ios_w.png" data-retina="img/ios_w.png" data-webp="img/ios_w.webp" data-webp-retina="img/ios_w.webp" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyWebp" alt="">
                            </a>
                        </div>
                        <div class="app-item">
                            <a href="/">
                                <img data-src="img/google_w.png" data-retina="img/google_w.png" data-webp="img/google_w.webp" data-webp-retina="img/google_w.webp" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyWebp" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="b-partners">
        <div class="container">
            <div class="partners-line aos" data-aos="fade-up">
                <div class="title">Approved betting partner of:</div>
                <div class="logos">
                    <div>
                        <img data-src="img/logo-1.png" data-retina="img/logo-1.png" data-webp="img/logo-1.webp" data-webp-retina="img/logo-1.webp" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyWebp" alt="">
                    </div>
                    <div>
                        <img data-src="img/logo-2.png" data-retina="img/logo-2.png" data-webp="img/logo-2.webp" data-webp-retina="img/logo-2.webp" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyWebp" alt="">
                    </div>
                    <div>
                        <img data-src="img/logo-3.png" data-retina="img/logo-3.png" data-webp="img/logo-3.webp" data-webp-retina="img/logo-3.webp" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyWebp" alt="">
                    </div>
                    <div>
                        <img data-src="img/logo-4.png" data-retina="img/logo-4.png" data-webp="img/logo-4.webp" data-webp-retina="img/logo-4.webp" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyWebp" alt="">
                    </div>
                    <div>
                        <img data-src="img/logo-5.png" data-retina="img/logo-5.png" data-webp="img/logo-5.webp" data-webp-retina="img/logo-5.webp" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyWebp" alt="">
                    </div>
                    <div>
                        <img data-src="img/logo-6.png" data-retina="img/logo-6.png" data-webp="img/logo-6.webp" data-webp-retina="img/logo-6.webp" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyWebp" alt="">
                    </div>
                    <div>
                        <img data-src="img/logo-7.png" data-retina="img/logo-7.png" data-webp="img/logo-7.webp" data-webp-retina="img/logo-7.webp" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyWebp" alt="">
                    </div>
                    <div>
                        <img data-src="img/logo-8.png" data-retina="img/logo-8.png" data-webp="img/logo-8.webp" data-webp-retina="img/logo-8.webp" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyWebp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
