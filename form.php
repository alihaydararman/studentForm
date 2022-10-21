<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Student Registration Form In Bootstrap 5 </title>
    <style>
      body {
      padding: 0;
      margin: 0;
      font-family: "Nunito Sans";
      background-color: #F4BE2C;
      }
      input[type=number]::-webkit-inner-spin-button,
      input[type=number]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
      }
      p{
      margin: 0;
      text-transform: capitalize;
      font-weight: bold;
      }
      th{
      padding: 10px !important;
      }
      .table{
      margin-bottom: 0px;
      }
      .dropdown-toggle{
      background-color: #fff;
      }
      .table>:not(caption)>*>*{
      border-color: #F4BE2C;
      vertical-align: middle;
      white-space: nowrap;
      }
      .table>:not(:first-child){
      border-top:#F4BE2C;
      }
      .table>thead{
      background-color:#F4BE2C;
      color: #fff;
      }
      .row{
      align-items: center;
      }
      .form-control {
      line-height: 2;
      border: 1px solid #ddd;
      border-radius: 2px;
      }
      .form-control:focus{
      box-shadow: none;
      border-color:#F4BE2C;
      }
      .form-check-input:checked{
      background-color: #F4BE2C;
      border-color: #F4BE2C;
      }
      .form-check-input:focus{
      box-shadow: none;
      }
      .form-control:hover{
      border-color: #F4BE2C;
      }
      .bg-custom {
      border: 1px solid #F4BE2C;
      }
      .btn-custom {
      border-color: #F4BE2C;
      color: #F4BE2C;
      }
      .btn-custom:hover {
      background-color: #F4BE2C;
      color: #fff;
      box-shadow:0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
      }
      .row.m-0{
      border-bottom: 1px solid #f4be2b;
      margin-bottom: 15px !important;
      background: #f4be2b;
      font-weight: 600;
      color: #fff;
      }
      .row.mb-2{
      margin: 0;
      }
      .col-lg-4 p{
      font-size: 12px;
      }
      
      @media(max-width: 992px) {
      form{
      width: 80%;
      }
      }
      @media(max-width: 575px) {
      form{
      width: 100%;
      }
      }
    </style>
  </head>
  <body>
    <div class="container  mt-5 mb-5">
      <form class="bg-light p-4 m-auto" action="#">
        <div class="row mb-3 d-flex justify-content-center">
          <h1>Student Information</h1>
        </div>
        <div class="row mb-3">
          <div class="col-lg-2">
            <p>First Name</p>
          </div>
          <div class="col-lg-5">
            <input type="text" class="form-control" placeholder="First Name" required>
          </div>
          <div class="col-lg-4">
            <p>(max 30 characters a-z and A-Z)</p>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-2">
            <p>Last Name</p>
          </div>
          <div class="col-lg-5">
            <input type="text" class="form-control" placeholder="Last Name" required>
          </div>
          <div class="col-lg-4">
            <p>(max 30 characters a-z and A-Z)</p>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-2">
            <p>Date of Birth</p>
          </div>
          <div class="col-lg-5 d-flex">
            <div class="dropdown">
              <a class="btn border btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              Days
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#">1</a></li>
                <li><a class="dropdown-item" href="#">2</a></li>
                <li><a class="dropdown-item" href="#">3</a></li>
              </ul>
            </div>
            <div class="dropdown mx-2">
              <a class="btn border btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              Months
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#">1</a></li>
                <li><a class="dropdown-item" href="#">2</a></li>
                <li><a class="dropdown-item" href="#">3</a></li>
              </ul>
            </div>
            <div class="dropdown">
              <a class="btn border btn-light btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              Years
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#">2018</a></li>
                <li><a class="dropdown-item" href="#">2019</a></li>
                <li><a class="dropdown-item" href="#">2020</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-2">
            <p>Email id </p>
          </div>
          <div class="col-lg-5">
            <input type="text" class="form-control" placeholder="Email id" required>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-2">
            <p>Gender</p>
          </div>
          <div class="col-lg-5 d-flex">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
              Male
              </label>
            </div>
            <div class="form-check mx-3">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
              Female
              </label>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-2">
            <p>Address</p>
          </div>
          <div class="col-lg-7">
            <textarea class="form-control" rows="5"></textarea>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-2">
            <p>Pin code</p>
          </div>
          <div class="col-lg-5">
            <input type="text" class="form-control" placeholder="Pin code" required>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-2">
            <p>State </p>
          </div>
          <div class="col-lg-5">
            <input type="text" class="form-control" placeholder="State" required>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-2">
            <p>City </p>
          </div>
          <div class="col-lg-5">
            <input type="text" class="form-control" placeholder="City" required>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-2">
            <p>Country </p>
          </div>
          <div class="col-lg-5">
            <input type="text" class="form-control" placeholder="Country" required>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-2">
            <p>Hobbies </p>
          </div>
          <div class="col-lg-5">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
              <label class="form-check-label" for="inlineCheckbox1">Drawing </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox2">Singing </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox2">Dancing  </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox2">Sketching  </label>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-2">
            <p>Qualification </p>
          </div>
          <div class="col-lg-9">
            <div class="bg-custom table-responsive">
              <table class="table ">
                <thead>
                  <tr>
                    <th scope="col">Sl.No.</th>
                    <th scope="col">Examination</th>
                    <th scope="col">Board</th>
                    <th scope="col">Percentage</th>
                    <th scope="col">Year Of Passing</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td> <input type="text" class="form-control" placeholder="Examination" required></td>
                    <td> <input type="text" class="form-control" placeholder="Board" required></td>
                    <td> <input type="text" class="form-control" placeholder="Percentage" required></td>
                    <td> <input type="text" class="form-control" placeholder="Year Of Passing" required></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td> <input type="text" class="form-control" placeholder="Examination" required></td>
                    <td> <input type="text" class="form-control" placeholder="Board" required></td>
                    <td> <input type="text" class="form-control" placeholder="Percentage" required></td>
                    <td> <input type="text" class="form-control" placeholder="Year Of Passing" required></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td> <input type="text" class="form-control" placeholder="Examination" required></td>
                    <td> <input type="text" class="form-control" placeholder="Board" required></td>
                    <td> <input type="text" class="form-control" placeholder="Percentage" required></td>
                    <td> <input type="text" class="form-control" placeholder="Year Of Passing" required></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-lg-2">
            <p>Courses</p>
          </div>
          <div class="col-lg-5 d-flex">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
              BCA 
              </label>
            </div>
            <div class="form-check mx-3">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
              MCA
              </label>
            </div>
          </div>
        </div>
        <button type="button" class="btn btn-custom btn-lg btn-block">Send Now</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>