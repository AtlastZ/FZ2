<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F❤️Z Character</title>
    <link rel="icon" href="../assets/images/Icon.png" type="image/x-icon">
    <!-- bootstrap & css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/queue.css">
</head>

<?php
 $id = $_GET['FRIENDS']; 
?>

<body>
    <div class="container-fluid">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="border border-dark rounded p-5 Ctable">
                <form class="row g-3" method="post" action="insert.php">
                    <div class="col-12">
                        <div class="input-group input-group-lg">
                            <span class="input-group-text" id="inputGroup-sizing-lg"><i
                                    class="bi bi-person-video3"></i></span>
                            <input type="text" class="form-control" name="FRIEND" id="FRIEND" size="10"
                                value=<?php echo $id?> aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-lg">
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="NAME" class="form-label">Your name</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                            <input type="text" class="form-control" placeholder="Name" aria-label="Name"
                                aria-describedby="basic-addon1" name="NAME" id="NAME" maxlength="30">
                        </div>
                        <label for="DATE" class="form-label">Please choose date</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar"></i></span>
                            <input type="date" class="form-control" placeholder="Name" aria-label="Name"
                                aria-describedby="basic-addon1" name="DATE" id="DATE">
                        </div>
                        <label for="TIME" class="form-label">What time do you prefer?</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-clock"></i></span>
                            <div class="float-end mx-auto">
                                <div class="col-12 form-check">
                                    <input class="form-check-input" type="radio" name="TIME" id="TIME1"
                                        value="09.00-12.00" checked>
                                    <label class="form-check-label" for="TIME1">
                                        เช้า (09.00-12.00)
                                    </label>
                                </div>
                                <div class="col-12 form-check">
                                    <input class="form-check-input" type="radio" name="TIME" id="TIME2"
                                        value="13.00-16.00">
                                    <label class="form-check-label" for="TIME2">
                                        บ่าย (13.00-16.00)
                                    </label>
                                </div>

                                <div class="col-12 form-check">
                                    <input class="form-check-input" type="radio" name="TIME" id="TIME3"
                                        value="17.00-20.00">
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
                        <label for="REQUEST" class="form-label">More request</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-people"></i></span>
                            <input type="text" class="form-control" placeholder="Request" aria-label="Request"
                                aria-describedby="basic-addon1" name="REQUEST" id="REQUEST">
                        </div>
                        <input class="btn btn-primary float-sm-end" type="submit" name="Submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <div class="Back">
        <div id="bt" class="container btimg" style="display: block;">
            <a href="ChooseFriend.php"><img class="imgbtn "
                    src="../assets/images/Back.png" alt=""></a>
        </div>
    </div>
</body>

</html>