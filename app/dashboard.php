<?php
// bank/dashboard.php
include_once dirname(__DIR__).'/includes/header.php';

include_once('navbar.php');

?>

<!-- menubar and Main Content -->
<div class="container">
    <div class="row">
        <!-- menubar -->
        <div class="col-md-3 menubar">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="#fundingRequests" data-toggle="tab">Review Funding Requests</a></li>
                <li><a href="#manageOffers" data-toggle="tab">Manage Offers</a></li>
                <li><a href="#notifications" data-toggle="tab">Notifications</a></li>
                <li><a href="#accountSettings" data-toggle="tab">Account Settings</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="col-md-9 content">
            <div class="tab-content">
                
                <!-- Funding Requests of Interest -->
                <div class="tab-pane fade in active" id="fundingRequests">
                
                <?php include_once ('funding_requests.php'); ?>


                </div>

                <!-- Active Investment Opportunities -->
                <div class="tab-pane fade" id="manageOffers">
                    <h2 class="section-header">Active Offers List</h2>
                    <!-- Replace with dynamic content -->
                    <p>Based on bids tables.</p>
                </div>


                <!-- Notifications -->
                <div class="tab-pane fade" id="notifications">
                    <h2 class="section-header">Notifications</h2>
                    <!-- Replace with dynamic content -->
                    <p>e.g., New funding requests, Updates.</p>
                </div>

                <!-- Summary of Investment Activity -->
                <div class="tab-pane fade" id="summaryActivity">
                    <h2 class="section-header">Summary of Investment Activity</h2>
                    <!-- Replace with dynamic content -->
                    <p>Graphs or charts showing investment trends, portfolio performance, etc.</p>
                </div>

                <!-- Documents -->
                <div class="tab-pane fade" id="documents">
                    <h2 class="section-header">Documents</h2>
                    <div class="document-list">
                        <!-- Replace with dynamic content -->
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="#">Document 1</a>
                                <span class="pull-right">
                                    <a href="#" class="btn btn-default btn-xs">View</a>
                                    <a href="#" class="btn btn-default btn-xs">Download</a>
                                    <a href="#" class="btn btn-danger btn-xs">Delete</a>
                                </span>
                            </li>
                            <li class="list-group-item">
                                <a href="#">Document 2</a>
                                <span class="pull-right">
                                    <a href="#" class="btn btn-default btn-xs">View</a>
                                    <a href="#" class="btn btn-default btn-xs">Download</a>
                                    <a href="#" class="btn btn-danger btn-xs">Delete</a>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <button class="btn btn-primary">Upload New Document</button>
                </div>

                <!-- Analytics (Optional) -->
                <div class="tab-pane fade" id="analytics">
                    <h2 class="section-header">Analytics</h2>
                    <!-- Replace with dynamic content -->
                    <p>Graphs or charts showing investment trends, portfolio performance, etc.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once dirname(__DIR__).('/includes/footer.php'); ?>

