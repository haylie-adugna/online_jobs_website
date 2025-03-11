@extends('layouts.app')

@section('content')

  <!-- Main content -->
  <section class="content">
    <!-- Information sections -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- New Registrations Box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>1,120</h3>
            <p>New User Registrations</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">See Details <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- Job Postings Box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>320</h3>
            <p>New Job Postings</p>
          </div>
          <div class="icon">
            <i class="ion ion-briefcase"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- Scholarships Available Box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>50</h3>
            <p>Available Scholarships</p>
          </div>
          <div class="icon">
            <i class="ion ion-university"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- Active Listings Box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>200</h3>
            <p>Active Listings</p>
          </div>
          <div class="icon">
            <i class="ion ion-tags"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->

    <!-- User Engagement and Traffic Analysis -->
    <div class="row">
      <!-- Analytics and Charts -->
      <section class="col-lg-7 connectedSortable">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs pull-right">
            <li class="active"><a href="#user-activity-chart" data-toggle="tab">User Activity</a></li>
            <li><a href="#visitor-stats-chart" data-toggle="tab">Visitor Stats</a></li>
            <li class="pull-left header"><i class="fa fa-bar-chart"></i> Traffic Analysis</li>
          </ul>
          <div class="tab-content no-padding">
            <div class="chart tab-pane active" id="user-activity-chart" style="position: relative; height: 300px;"></div>
            <div class="chart tab-pane" id="visitor-stats-chart" style="position: relative; height: 300px;"></div>
          </div>
        </div>

        <!-- Recent User Feedback -->
        <div class="box box-success">
          <div class="box-header">
            <i class="fa fa-commenting"></i>
            <h3 class="box-title">User Feedback</h3>
          </div>
          <div class="box-body">
            <!-- Feedback Messages -->
            <div class="item">
              <p class="message">
                <a href="#" class="name">
                  <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                  Amanuel D.
                </a>
                The job application process was seamless and easy to navigate!
              </p>
            </div>
            <div class="item">
              <p class="message">
                <a href="#" class="name">
                  <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
                  Mulu G.
                </a>
                Excited about the new scholarship opportunities. Well done, Yesrabete!
              </p>
            </div>
          </div>
          <div class="box-footer">
            <input class="form-control" placeholder="Add feedback...">
          </div>
        </div>
      </section>
      <!-- /.Left col -->

      <!-- Quick Actions and Updates -->
      <section class="col-lg-5 connectedSortable">
        <!-- Notifications Box -->
        <div class="box box-info">
          <div class="box-header">
            <i class="fa fa-bell"></i>
            <h3 class="box-title">Recent Notifications</h3>
          </div>
          <div class="box-body">
            <ul>
              <li><strong>Job Posting Update:</strong> New employer has added listings today.</li>
              <li><strong>Scholarship Alert:</strong> Apply now for the international study scholarship.</li>
              <li><strong>System Maintenance:</strong> Scheduled for midnight, expect a brief downtime.</li>
            </ul>
          </div>
        </div>

        <!-- Event Calendar -->
        <div class="box box-solid bg-green-gradient">
          <div class="box-header">
            <i class="fa fa-calendar"></i>
            <h3 class="box-title">Upcoming Events</h3>
            <div class="pull-right box-tools">
              <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body no-padding">
            <div id="calendar" style="width: 100%"></div>
          </div>
        </div>
      </section>
    </div>
  </section>
@endsection
