<?php require_once('../../layouts/web/header.php') ?>

<div class="hero overlay" style="background-image: url('../../assets/web/images/bg_3.jpg');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 ml-auto">
                <h1 class="text-white">Pochinki Premier League</h1>
                <p>Only Place You Need About Your Football</p>
                <p>
                    <a href="../../auth/login.php" class="btn btn-primary py-3 px-4 mr-3">Login</a>
                    <a href="../../auth/login.php" class="more light">Register</a>
                </p>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex team-vs">
                <span class="score">4-1</span>
                <div class="team-1 w-50">
                    <div class="team-details w-100 text-center">
                        <img src="https://resources.premierleague.com/premierleague/badges/t1.svg" alt="Image" class="img-fluid">
                        <h3>LA LEGA <span>(win)</span></h3>
                        <ul class="list-unstyled">
                            <li>Anja Landry (7)</li>
                            <li>Eadie Salinas (12)</li>
                            <li>Ashton Allen (10)</li>
                            <li>Baxter Metcalfe (5)</li>
                        </ul>
                    </div>
                </div>
                <div class="team-2 w-50">
                    <div class="team-details w-100 text-center">
                        <img src="https://resources.premierleague.com/premierleague/badges/t43.svg" alt="Image" class="img-fluid">
                        <h3>JUVENDU <span>(loss)</span></h3>
                        <ul class="list-unstyled">
                            <li>Macauly Green (3)</li>
                            <li>Arham Stark (8)</li>
                            <li>Stephan Murillo (9)</li>
                            <li>Ned Ritter (5)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="widget-next-match">
                    <div class="widget-title">
                        <h3>Next Match</h3>
                    </div>
                    <div class="widget-body mb-3">
                        <div class="widget-vs">
                            <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                                <div class="team-1 text-center">
                                    <img src="https://resources.premierleague.com/premierleague/badges/t1.svg" alt="Image" style="height: 110px; width: 110px;">
                                    <h3>MU</h3>
                                </div>
                                <div>
                                    <span class="vs"><span>VS</span></span>
                                </div>
                                <div class="team-2 text-center">
                                    <img src="https://resources.premierleague.com/premierleague/badges/t43.svg" alt="Image" style="height: 110px; width: 110px;">
                                    <h3>MC</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center widget-vs-contents mb-4">
                        <h4>World Cup League</h4>
                        <p class="mb-5">
                            <span class="d-block">December 20th, 2020</span>
                            <span class="d-block">9:30 AM GMT+0</span>
                            <strong class="text-primary">New Euro Arena</strong>
                        </p>

                        <div id="date-countdown2" class="pb-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="widget-next-match">
                    <table class="table custom-table">
                        <thead>
                            <tr>
                                <th>P</th>
                                <th>Team</th>
                                <th>W</th>
                                <th>D</th>
                                <th>L</th>
                                <th>PTS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><strong class="text-white">Football League</strong></td>
                                <td>22</td>
                                <td>3</td>
                                <td>2</td>
                                <td>140</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><strong class="text-white">Soccer</strong></td>
                                <td>22</td>
                                <td>3</td>
                                <td>2</td>
                                <td>140</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><strong class="text-white">Juvendo</strong></td>
                                <td>22</td>
                                <td>3</td>
                                <td>2</td>
                                <td>140</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><strong class="text-white">French Football League</strong></td>
                                <td>22</td>
                                <td>3</td>
                                <td>2</td>
                                <td>140</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><strong class="text-white">Legia Abante</strong></td>
                                <td>22</td>
                                <td>3</td>
                                <td>2</td>
                                <td>140</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><strong class="text-white">Gliwice League</strong></td>
                                <td>22</td>
                                <td>3</td>
                                <td>2</td>
                                <td>140</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td><strong class="text-white">Cornika</strong></td>
                                <td>22</td>
                                <td>3</td>
                                <td>2</td>
                                <td>140</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td><strong class="text-white">Gravity Smash</strong></td>
                                <td>22</td>
                                <td>3</td>
                                <td>2</td>
                                <td>140</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

<?php require_once('../../layouts/web/footer.php') ?>