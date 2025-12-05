
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <?php $activeSubmenu = 'basic'; include 'includes/sidebar.php'; ?>
        <div class="layout-page">
          <?php include 'includes/navbar.php'; ?>
          <div class="content-wrapper">
            <div class="container-xxl grow container-p-y">
              <div class="card">
                <div class="card-datatable table-responsive pt-0">
                  <table class="datatables-basic table">
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
              <div class="offcanvas offcanvas-end" id="add-new-record">
                <div class="offcanvas-body grow">
                  <form class="add-new-record pt-0 row g-2" id="form-add-new-record" onsubmit="return false">
                    <div class="col-sm-12 form-control-validation">
                      <label class="form-label" for="basicFullname">Full Name</label>
                      <div class="input-group input-group-merge">
                        <span id="basicFullname2" class="input-group-text"><i class="icon-base ti tabler-user"></i></span>
                        <input type="text" id="basicFullname" class="form-control dt-full-name" name="basicFullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
                      </div>
                    </div>
                    <div class="col-sm-12 form-control-validation">
                      <label class="form-label" for="basicPost">Post</label>
                      <div class="input-group input-group-merge">
                        <span id="basicPost2" class="input-group-text"><i class="icon-base ti tabler-briefcase"></i></span>
                        <input type="text" id="basicPost" name="basicPost" class="form-control dt-post" placeholder="Web Developer" aria-label="Web Developer" aria-describedby="basicPost2" />
                      </div>
                    </div>
                    <div class="col-sm-12 form-control-validation">
                      <label class="form-label" for="basicEmail">Email</label>
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="icon-base ti tabler-mail"></i></span>
                        <input type="text" id="basicEmail" name="basicEmail" class="form-control dt-email" placeholder="john.doe@example.com" aria-label="john.doe@example.com" />
                      </div>
                      <div class="form-text">You can use letters, numbers & periods</div>
                    </div>
                    <div class="col-sm-12 form-control-validation">
                      <label class="form-label" for="basicDate">Joining Date</label>
                      <div class="input-group input-group-merge">
                        <span id="basicDate2" class="input-group-text"><i class="icon-base ti tabler-calendar"></i></span>
                        <input type="text" class="form-control dt-date" id="basicDate" name="basicDate" aria-describedby="basicDate2" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" />
                      </div>
                    </div>
                    <div class="col-sm-12 form-control-validation">
                      <label class="form-label" for="basicSalary">Salary</label>
                      <div class="input-group input-group-merge">
                        <span id="basicSalary2" class="input-group-text"><i class="icon-base ti tabler-currency-dollar"></i></span>
                        <input type="number" id="basicSalary" name="basicSalary" class="form-control dt-salary" placeholder="12000" aria-label="12000" aria-describedby="basicSalary2" />
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <button type="submit" class="btn btn-primary data-submit me-sm-4 me-1">Submit</button>
                      <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>
              <hr class="my-12" />
              <div class="card">
                <h5 class="card-header border-bottom text-md-start text-center">Complex Headers</h5>
                <div class="card-datatable text-nowrap">
                  <table class="dt-complex-header table table-bordered table-responsive">
                    <thead>
                      <tr>
                        <th rowspan="2">Name</th>
                        <th colspan="2">Contact</th>
                        <th colspan="3">HR Information</th>
                        <th rowspan="2">Action</th>
                      </tr>
                      <tr>
                        <th>E-mail</th>
                        <th>City</th>
                        <th>Position</th>
                        <th>Salary</th>
                        <th class="border">Status</th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
              <hr class="my-12" />
              <div class="card">
                <h5 class="card-header border-bottom text-md-start text-center">Row Grouping</h5>
                <div class="card-datatable">
                  <table class="dt-row-grouping table table-bordered table-responsive">
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
                        <th>Action</th>
                      </tr>
                    </thead>

                  </table>
                </div>
              </div>
              <hr class="my-12" />
              <div class="card">
                <h5 class="card-header border-bottom text-md-start text-center">Multilingual</h5>
                <div class="card-datatable">
                  <table class="dt-multilingual table table-bordered table-responsive">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Position</th>
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
            </div>
            <?php include 'includes/footer.php'; ?>
            <!-- <div class="content-backdrop fade"></div> -->
          </div>
        </div>
      </div>
      <!-- <div class="layout-overlay layout-menu-toggle"></div>
      <div class="drag-target"></div> -->
    </div>
