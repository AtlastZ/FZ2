<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FriendZone | Character</title>
  <!-- bootstrap & css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="custom.css">
</head>

<?php $id = $_GET['FRIENDS']; ?>

<body>
  <div class="container-fluid">
    <div class="text-center position-absolute top-50 start-50 translate-middle">
      <form method="post" action="insert.php">
        <div class="row mb-3">
          <div class="col-sm"><input type="text" name="FRIEND" id="FRIEND" size="10" value=<?php echo $id?> ></div>
        </div>
        <div class="row mb-3">
          <div class="col-sm-3">Name</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-8"><input type="text" name="NAME" id="NAME" maxlength="30"></div>
        </div>
        <div class="row mb-3">
          <div class="col-sm-3">Date</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-8"><input type="date" name="DATE" id="DATE"></div>
        </div>
        <div class="row mb-3">
          <div class="col-sm-3">Time:</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-8">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="TIME" id="TIME1" value="09.00-12.00" checked>
              <label class="form-check-label" for="TIME1">
                เช้า (09.00-12.00)
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="TIME" id="TIME2" value="13.00-16.00">
              <label class="form-check-label" for="TIME2">
                บ่าย (13.00-16.00)
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="TIME" id="TIME3" value="17.00-20.00">
              <label class="form-check-label" for="TIME3">
                เย็น (17.00-20.00)
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="TIME" id="TIME4" value="ALL">
              <label class="form-check-label" for="TIME4">
                ทั้งวันเป็นของคุณ
              </label>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-sm-3">Request</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-8"><input type="text" name="REQUEST" id="REQUEST" size="30" maxlength="255" style="height:100px;"></div>
        </div>

        <input class="btn btn-primary float-sm-end" type="submit" name="Submit" value="Submit">

      </form>
    </div>
  </div>
  </div>
</body>

</html>