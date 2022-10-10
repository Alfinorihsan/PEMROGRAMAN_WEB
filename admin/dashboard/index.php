<?php require_once('../../layouts/admin/header.php') ?>


<div id="main" class="min-vh-100 pt-4">
    <div class="row">
        <div class="col-12 mb-4">
            <h2 class="h4">Selamat Datang, <?= $_SESSION['email'] ?></h2>
        </div>
        <div class="col-12 mb-4">
            <div class="card bg-yellow-100 border-0 shadow">
                <div class="card-header d-sm-flex flex-row align-items-center flex-0">
                    <div class="d-block mb-3 mb-sm-0">
                        <div class="fs-5 fw-normal mb-2">Sales Value</div>
                        <h2 class="fs-3 fw-extrabold">$10,567</h2>
                        <div class="small mt-2"><span class="fw-normal me-2">Yesterday</span> <span class="fas fa-angle-up text-success"></span> <span class="text-success fw-bold">10.57%</span></div>
                    </div>
                    <div class="d-flex ms-auto"><a href="#" class="btn btn-secondary text-dark btn-sm me-2">Month</a> <a href="#" class="btn btn-dark btn-sm me-3">Week</a></div>
                </div>
                <div class="card-body p-2">
                    <div class="ct-chart-sales-value ct-double-octave ct-series-g">
                        <div class="chartist-tooltip" style="top: 55.6094px; left: 449px;"></div><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;">
                            <g class="ct-grids">
                                <line x1="50" x2="50" y1="15" y2="344.25" class="ct-grid ct-horizontal"></line>
                                <line x1="292" x2="292" y1="15" y2="344.25" class="ct-grid ct-horizontal"></line>
                                <line x1="534" x2="534" y1="15" y2="344.25" class="ct-grid ct-horizontal"></line>
                                <line x1="776" x2="776" y1="15" y2="344.25" class="ct-grid ct-horizontal"></line>
                                <line x1="1018" x2="1018" y1="15" y2="344.25" class="ct-grid ct-horizontal"></line>
                                <line x1="1260" x2="1260" y1="15" y2="344.25" class="ct-grid ct-horizontal"></line>
                                <line x1="1502" x2="1502" y1="15" y2="344.25" class="ct-grid ct-horizontal"></line>
                            </g>
                            <g>
                                <g class="ct-series ct-series-a">
                                    <path d="M50,344.25L50,344.25C130.667,333.275,211.333,325.958,292,311.325C372.667,296.692,453.333,260.108,534,245.475C614.667,230.842,695.333,230.11,776,212.55C856.667,194.99,937.333,80.85,1018,80.85C1098.667,80.85,1179.333,146.7,1260,146.7C1340.667,146.7,1421.333,58.9,1502,15L1502,344.25Z" class="ct-area"></path>
                                    <path d="M50,344.25C130.667,333.275,211.333,325.958,292,311.325C372.667,296.692,453.333,260.108,534,245.475C614.667,230.842,695.333,230.11,776,212.55C856.667,194.99,937.333,80.85,1018,80.85C1098.667,80.85,1179.333,146.7,1260,146.7C1340.667,146.7,1421.333,58.9,1502,15" class="ct-line"></path>
                                    <line x1="50" y1="344.25" x2="50.01" y2="344.25" class="ct-point" ct:value="0"></line>
                                    <line x1="292" y1="311.325" x2="292.01" y2="311.325" class="ct-point" ct:value="10"></line>
                                    <line x1="534" y1="245.475" x2="534.01" y2="245.475" class="ct-point" ct:value="30"></line>
                                    <line x1="776" y1="212.55" x2="776.01" y2="212.55" class="ct-point" ct:value="40"></line>
                                    <line x1="1018" y1="80.85000000000002" x2="1018.01" y2="80.85000000000002" class="ct-point" ct:value="80"></line>
                                    <line x1="1260" y1="146.7" x2="1260.01" y2="146.7" class="ct-point" ct:value="60"></line>
                                    <line x1="1502" y1="15" x2="1502.01" y2="15" class="ct-point" ct:value="100"></line>
                                </g>
                            </g>
                            <g class="ct-labels">
                                <foreignObject style="overflow: visible;" x="50" y="349.25" width="242" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 242px; height: 20px;">Mon</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="292" y="349.25" width="242" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 242px; height: 20px;">Tue</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="534" y="349.25" width="242" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 242px; height: 20px;">Wed</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="776" y="349.25" width="242" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 242px; height: 20px;">Thu</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="1018" y="349.25" width="242" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 242px; height: 20px;">Fri</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="1260" y="349.25" width="242" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 242px; height: 20px;">Sat</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="1502" y="349.25" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">Sun</span></foreignObject>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>