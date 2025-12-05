
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <?php $activeSubmenu = 'extensions'; include 'includes/sidebar.php'; ?>
        <div class="layout-page">
          <?php include 'includes/navbar.php'; ?>
          <div class="content-wrapper">
            <div class="container-xxl grow container-p-y">
              <div class="card">
                <h5 class="card-header text-md-start text-center border-bottom">Scrollable Table</h5>
                <div class="card-datatable text-nowrap">
                  <table class="dt-scrollableTable table table-bordered table-responsive">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>Date</th>
                        <th>Salary</th>
                        <th>Age</th>
                        <th>Experience</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
              <hr class="my-12" />
              <div class="card">
                <h5 class="card-header text-md-start text-center border-bottom">Fixed Header</h5>
                <div class="card-datatable table-responsive">
                  <table class="dt-fixedheader table table-bordered">
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Salary</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
              <hr class="my-12" />
              <div class="card">
                <div class="card-datatable text-nowrap">
                  <table class="dt-fixedcolumns table table-bordered table-responsive">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>Date</th>
                        <th>Salary</th>
                        <th>Age</th>
                        <th>Experience</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
              <hr class="my-12" />
              <div class="card">
                <h5 class="card-header text-md-start text-center border-bottom">Select</h5>
                <div class="card-datatable dataTable_select text-nowrap">
                  <table class="dt-select-table table table-bordered table-responsive">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>Date</th>
                        <th>Salary</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
            <?php include 'includes/footer.php'; ?>
            <!-- <div class="content-backdrop fade"></div> -->
          </div>
        </div>
      </div>
      <!-- <div class="layout-overlay layout-menu-toggle"></div>
      <div class="drag-target"></div> -->
    </div>

