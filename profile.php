<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <!-- Start Css -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/all.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <div class="header">
      <div class="nav-bar">
        <div class="container">
          <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img
                  class="logo"
                  src="https://scontent.fcai22-2.fna.fbcdn.net/v/t39.30808-6/275634928_4869720069759957_1221003474556286464_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=rw8DhSBJPVEAX9WJ11e&_nc_ht=scontent.fcai22-2.fna&oh=00_AfCVidpm_BRZueF5Z02FUr3aGDVYn_sn0N_8aQTVlv-3YQ&oe=63C8E272"
                />
              </a>
              <!-- Start Login Button -->

              <div class="d-flex">
                <button
                  class="navbar-toggler m-0"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#main"
                  aria-controls="main"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Start Menu -->
                <div class="collapse navbar-collapse" id="main">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Jobs</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Contact Us</a>
                    </li>
                  </ul>
                </div>
                <button class="btn btn-primary ms-1 button">Login</button>
                <button class="btn btn-primary ms-1 button">Sign Up</button>
              </div>
            </div>
          </nav>
        </div>
      </div>
      <div class="container">
        <div class="banner">
          <h1 class="fs-4">About Us</h1>
          <p class="fs-6 text-black-50">
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry.
          </p>
        </div>
      </div>
    </div>
    <!-- Start Profile -->
    <div class="container my-5 d-flex flex-column justify-content-center">
      <!-- Start Image -->
      <div class="row justify-content-center">
        <div class="col-6 col-md-4 col-lg-2">
          <img class="img-fluid rounded-5" src="images/team-1.png" />
        </div>
      </div>
      <!-- Start Tabs -->
      <div class="row justify-content-center mt-3 align-items-center">
        <!-- Start Tab -->
        <div class="col-4">
          <button
            class="btn button w-100"
            scifi-roll="main"
            scifi-tab-index="profile"
          >
            Profile
          </button>
        </div>
        <!-- Start Tab -->
        <div class="col-4">
          <button
            class="btn button w-100"
            scifi-roll="main"
            scifi-tab-index="applyJobs"
          >
            Jobs
          </button>
        </div>
        <!-- Start Tab -->
        <div class="col-4">
          <button
            class="btn button w-100"
            scifi-roll="main"
            scifi-tab-index="settings"
          >
            Settings
          </button>
        </div>
      </div>
      <div class="row my-3 scifi-active" scifi-tab="profile">
        <div class="col-12 col-md-4 col-lg-3">
          <div class="row">
            <div class="col-3 col-md-12">
              <button
                class="btn button d-flex justify-content-center align-items-center w-100 my-2"
                scifi-roll="tab"
                scifi-tab-index="person"
              >
                Person
              </button>
            </div>
            <div class="col-3 col-md-12">
              <button
                class="btn button d-flex justify-content-center align-items-center w-100 my-2"
                scifi-roll="tab"
                scifi-tab-index="contact"
              >
                Contact
              </button>
            </div>
            <div class="col-3 col-md-12">
              <button
                class="btn button d-flex justify-content-center align-items-center w-100 my-2"
                scifi-roll="tab"
                scifi-tab-index="experience"
              >
                Experience
              </button>
            </div>
            <div class="col-3 col-md-12">
              <button
                class="btn button d-flex justify-content-center align-items-center w-100 my-2"
                scifi-roll="tab"
                scifi-tab-index="course"
              >
                Course
              </button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-8 col-lg-9">
          <div class="row p-3 scifi-active" scifi-tab="person">
            <div class="col-md-4">
              <div class="mb-3">
                <label for="firstName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstName" />
              </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <label for="middleName" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="middleName" />
              </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <label for="lastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastName" />
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"
                ></textarea>
              </div>
            </div>
            <div class="col-12">
              <button class="btn button">Save</button>
            </div>
          </div>

          <div class="row p-3" scifi-tab="contact">
            <div class="col-6">
              <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input
                  type="text"
                  class="form-control"
                  id="phone"
                  placeholder="+20101558992"
                />
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  placeholder="example@gmail.com"
                />
              </div>
            </div>
            <div class="col-12">
              <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  placeholder=""
                />
              </div>
            </div>
            <div class="col-12">
              <button class="btn button">Add Contact</button>
            </div>
            <div class="col-12 d-flex justify-content-end">
              <button class="btn button">Save</button>
            </div>
          </div>

          <div class="row p-3" scifi-tab="experience">
            <div class="col-6">
              <div class="mb-3">
                <label for="phone" class="form-label">Position</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="email" class="form-label">Company</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  placeholder="example@gmail.com"
                />
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="date" class="form-label">Start Date</label>
                <input type="date" class="form-control" id="date" />
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="date" class="form-label">End Date</label>
                <input type="date" class="form-control" id="date" />
              </div>
            </div>
            <div class="col-12">
              <div class="mb-3">
                <label for="address" class="form-label">Description</label>
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"
                ></textarea>
              </div>
            </div>
            <div class="col-12">
              <button class="btn button">Add Experience</button>
            </div>
            <div class="col-12 d-flex justify-content-end">
              <button class="btn button">Save</button>
            </div>
          </div>

          <div class="row p-3" scifi-tab="course">
            <div class="col-12">
              <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" />
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="date" class="form-label">Start Date</label>
                <input type="date" class="form-control" id="date" />
              </div>
            </div>
            <div class="col-6">
              <div class="mb-3">
                <label for="date" class="form-label">End Date</label>
                <input type="date" class="form-control" id="date" />
              </div>
            </div>
            <div class="col-12">
              <div class="mb-3">
                <label for="address" class="form-label">Description</label>
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"
                ></textarea>
              </div>
            </div>
            <div class="col-12">
              <button class="btn button">Add Course</button>
            </div>
            <div class="col-12 d-flex justify-content-end">
              <button class="btn button">Save</button>
            </div>
          </div>
        </div>
      </div>
      <div class="jobs">
        <div class="row my-5" scifi-tab="applyJobs">
          <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
              <h1 class="fs-5 fw-bold">Web Desinger</h1>
              <h4 class="fs-6">Review Application</h4>
            </div>
            <div
              class="progress"
              role="progressbar"
              aria-label=""
              aria-valuenow="25"
              aria-valuemin="0"
              aria-valuemax="100"
            >
              <div class="progress-bar" style="width: 25%">25%</div>
            </div>
          </div>
        </div>
      </div>
      <div class="row my-3" scifi-tab="settings">... Settings</div>
    </div>

    <div class="bg-color">
      <div class="container">
        <div class="p-5">
          <div class="row justify-content-center">
            <div class="col-6 col-lg-4">
              <img
                class="img-fluid logo mb-2"
                src="https://scontent.fcai22-2.fna.fbcdn.net/v/t39.30808-6/275634928_4869720069759957_1221003474556286464_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=rw8DhSBJPVEAX9WJ11e&_nc_ht=scontent.fcai22-2.fna&oh=00_AfAmilRF2IT8RFAiYFylNjBsJ4cG1b6F2UB-Xk2B_Q8ejQ&oe=63CADCB2"
              />
              <p class="text-white">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
                aut eius maiores suscipit pariatur? Maxime, debitis
                consequuntur!
              </p>
            </div>
            <div class="col-6 col-lg-4">
              <h1 class="fs-3 text-white">Quick Links</h1>
              <ul class="list-unstyled mt-4">
                <li class="my-2">
                  <a class="text-decoration-none text-white">Home</a>
                </li>
                <li class="my-2">
                  <a class="text-decoration-none text-white">Jobs</a>
                </li>
                <li class="my-2">
                  <a class="text-decoration-none text-white">About Us</a>
                </li>
                <li class="my-2">
                  <a class="text-decoration-none text-white">Contact Us</a>
                </li>
              </ul>
            </div>
            <div class="col-6 col-lg-4 my-2 m-md-0">
              <h1 class="fs-3 text-white">Social Links</h1>
              <ul class="list-unstyled d-flex mt-4">
                <li>
                  <a class="text-decoration-none text-white"
                    ><i class="fa-brands fa-facebook fs-4 m-2"></i
                  ></a>
                </li>
                <li>
                  <a class="text-decoration-none text-white"
                    ><i class="fa-brands fa-whatsapp fs-4 m-2"></i
                  ></a>
                </li>
                <li>
                  <a class="text-decoration-none text-white"
                    ><i class="fa-brands fa-instagram fs-4 m-2"></i
                  ></a>
                </li>
                <li>
                  <a class="text-decoration-none text-white"
                    ><i class="fa-brands fa-linkedin-in fs-4 m-2"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/all.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
