<?php
session_start();  
include('database_connection.php');    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Travel-Geeks</title>
  </head>
  <body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
          href="#"
          >Travel geeks</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0">
            <div class="input-group">
              <input
                class="form-control"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-primary" type="submit">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-person-fill"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Actions</a></li>
                <li><a class="dropdown-item" href="#">Check previous</a></li>
                <!-- <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li> -->
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-dark"
      tabindex="-1"
      id="sidebar"
    >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3">
                ADMIN
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span>Control Panel</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Interface
              </div>
            </li>
            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layouts"
              >
                <span class="me-2"><i class="bi bi-layout-split"></i></span>
                <span>Layouts</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="#" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span>Monitoring Desk</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-book-fill"></i></span>
                <span>Pages</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Data
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-graph-up"></i></span>
                <span>Charts</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-table"></i></span>
                <span>Tables</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Monitoring Desk</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <div class="card bg-primary text-white h-100">
              <div class="card-body py-5">Travelers</div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-warning text-dark h-100">
              <div class="card-body py-5">Hotels</div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-success text-white h-100">
              <div class="card-body py-5">Guides</div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-danger text-white h-100">
              <div class="card-body py-5">Site visitors</div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Data Table
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    id="example"
                    class="table table-striped data-table"
                    style="width: 100%"
                  >
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Area</th>
                        <th>Hotel</th>
                        <th>Age</th>
                        <th>Check in</th>
                        <th>Amount Bdt</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
             $sql= 'SELECT * FROM admin2 ORDER BY id DESC;';
             $result= mysqli_query($conn, $sql);
             while ($admin = mysqli_fetch_array($result)) {?>
                      <tr>
                        <td> <?php echo $admin['name']; ?> </td>
                        <td> <?php echo $admin['area']; ?> </td>
                        <td> <?php echo $admin['hotel'];?> </td>
                        <td> <?php echo $admin['age'];?> </td>
                        <td> <?php echo $admin['checkin'];?> </td>
                        <td><?php echo $admin['amount_bdt'];?></td>
                      </tr>
                      <?php } ?>
                      <!-- <tr>
                        <td>Adam Milne</td>
                        <td>Chicago</td>
                        <td>The Paradise</td>
                        <td>28</td>
                        <td>2021/01/25</td>
                        <td>$750</td>
                      </tr>
                      <tr>
                        <td>Alex Costa</td>
                        <td>Chicago</td>
                        <td>The Paradise</td>
                        <td>26</td>
                        <td>2021/01/12</td>
                        <td>$800</td>
                      </tr>
                      <tr>
                        <td>Wayne Rooney</td>
                        <td>Chicago</td>
                        <td>The Paradise</td>
                        <td>22</td>
                        <td>2020/03/29</td>
                        <td>$450</td>
                      </tr>
                      <tr>
                        <td>Steven Gerrard</td>
                        <td>Concordia</td>
                        <td>Astro Hotel</td>
                        <td>33</td>
                        <td>2020/11/28</td>
                        <td>$700</td>
                      </tr>
                      <tr>
                        <td>Rafael Nadal</td>
                        <td>Concordia</td>
                        <td>Astro Hotel</td>
                        <td>36</td>
                        <td>2012/12/02</td>
                        <td>$350</td>
                      </tr>
                      <tr>
                        <td>David Arnold</td>
                        <td>Chicago</td>
                        <td>The Paradise</td>
                        <td>33</td>
                        <td>2012/08/06</td>
                        <td>$400</td>
                      </tr>
                      <tr>
                        <td>Ronaldo Nazario</td>
                        <td>Concordia</td>
                        <td>Astro Hotel</td>
                        <td>35</td>
                        <td>2010/10/14</td>
                        <td>$900</td>
                      </tr>
                      <tr>
                        <td>Sony Norde</td>
                        <td>Chicago</td>
                        <td>The Paradise</td>
                        <td>29</td>
                        <td>2021/03/15</td>
                        <td>$500</td>
                      </tr>
                      <tr>
                        <td>Alison Becker</td>
                        <td>Concordia</td>
                        <td>Astro Hotel</td>
                        <td>23</td>
                        <td>2008/12/13</td>
                        <td>$600</td>
                      </tr>
                      <tr>
                        <td>James Rodri</td>
                        <td>Chicago</td>
                        <td>The Paradise</td>
                        <td>30</td>
                        <td>2008/12/19</td>
                        <td>$900</td>
                      </tr>
                     
                      <tr>
                        <td>Alex Sandro</td>
                        <td>NY</td>
                        <td>Enchanted Garden</td>
                        <td>31</td>
                        <td>2020/02/12</td>
                        <td>$1090</td>
                      </tr>
                      <tr>
                        <td>Xavi</td>
                        <td>NY</td>
                        <td>nchanted Garden</td>
                        <td>27</td>
                        <td>2020/02/14</td>
                        <td>$500</td>
                      </tr>
                      <tr>
                        <td>Mitchel Jhonson</td>
                        <td>Concordia</td>
                        <td>Astro Hotel</td>
                        <td>36</td>
                        <td>2021/2/11</td>
                        <td>$200</td>
                      </tr> -->

                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
