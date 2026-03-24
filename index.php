<?php require_once "./includes/header.php" ?>
    <h1> Contents</h1>

<div class="w-75 mx-auto mt-5">
<form class="row g-3" method="POST" action="receive.php">
  
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email">
  </div>
  
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="address">
  </div>
  
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity" name="city">
  </div>
  
  <div class="col-md-4">
    <label for="inputState" class="form-label">Province</label>
    <select id="inputState" class="form-select" name="province">
      <option selected>Choose...</option>
      <option>Alberta</option>
      <option>British Columbia</option>
      <option>Manitoba</option>
      <option>New Brunswick</option>
      <option>Newfoundland and Labrador</option>
      <option>Northwest Territories</option>
      <option>Nova Scotia</option>
      <option>Nunavut</option>
      <option>Ontario</option>
      <option>Prince Edward Island</option>
      <option>Quebec</option>
      <option>Saskatchewan</option>
      <option>Yukon</option>
    </select>
  </div>

  <div class="col-md-2">
    <label for="inputZip" class="form-label">Postal Code</label>
    <input type="text" class="form-control" id="inputZip" name="postal_code">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>

</form>

<form class="row g-3" method="POST" action="delete.php">
  
  <div class="col-md-4">
    <input type="text" class="form-control" id="inputDeleteKey" name="deleteKey">
  </div>

        <div class="col-md-8">
          <a href="delete.php" class="btn btn-info w-100" style="background-color:red">Delete Record</a>
        </div>

</form>


<div>

<?php require_once "./includes/footer.php" ?>
