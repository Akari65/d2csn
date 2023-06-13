<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  @include('common.css')
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }
    
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 100px;
    }
    
    .container h2 {
      text-align: center;
    }
    
    .container input[type="text"],
    .container input[type="password"] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    
    .container button {
      background-color: #4CAF50;
      color: #fff;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }
    
    .container button:hover {
      opacity: 0.8;
    }
  </style>
</head>
<body>
  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 col-lg-4 offset-md-1 offset-lg-2">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Registration form
               
            </div>
            
            <form action="/register_new_user" method="POST">
            @csrf
              <div>
                <label for="full name">Full name:</label>
                <input type="text" placeholder="Full Name " name="full_name" id="full_name" />
              </div>
              <div>
              <label for="email">Email:</label>
                <input type="email" placeholder="Email" id="email" name="email"/>
              </div>
              <div>
              <label for="phone_number">Phone number:</label>
                <input type="text" placeholder="Phone_number" id="Phone_number"/>
              </div>
              <div>
              <label for="password">Password:</label>
                <input type="text" placeholder="Password" id="password" name="password"required />
              </div>
             <div className="dropdown">
              <label for="role">Role:</label>
              <select name="role" id="role">
                <option value="">Select role</option>
                @foreach ($response_data as $data)
                <option value="{{ $data->id }}">{{ $data->name}} </option>
                @endforeach
               </select>
              <div class="d-flex ">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6  px-0">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->
</body>
</html>
