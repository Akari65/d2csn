<!DOCTYPE html>
<html>
<head>
  <title>Role Management</title>
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
  <div class="container">
    <h2>Role Management</h2>
    <form action="create_role" method="post">
      @csrf
      <label for="username">Role Name:</label>
      <input type="text" id="role_name" name="role_name">

      <label>Status:</label>
      <input type="radio" id="status1" name="status" value="active">
      <label>Active</label>
      <input type="radio" id="status2" name="status" value="inactive">
      <label>Inactive</label>
      <br/><br/>
      <button type="submit">Submit</button>
    </form>
  </div>
</body>
</html>
