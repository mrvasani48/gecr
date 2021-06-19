<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="http://www.gecrj.cteguj.in/uploads/8896/logo.JPG" type="image/x-icon">
    <title> GEC-Rajkot </title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="abooking.css">
    <script src="abooking.js"></script>
</head>

<body>
    <?php include_once 'header.php'; ?>

    <h1>Auditorium Booking System</h1>
    <div class="abookmain">

        <form action="abooking.php"  method="post" >
            <label for="rf">request for :</label>
            <select name="rf" id="rf" >
                <option required class="rf" value="">Auditorium</option>

            </select><br><br>

            <label for="fname" ">Faculty name:</label>
            <input type="text" required id="fname" placeholder="x y z" name="fname"><br><br>

            <label for="email"  >Email Id :</label>
            <input type="email" required id="email" name="email" placeholder="abcd@gmail.com"><br><br>

            <label for="mnumber">Mobile Number:</label>
            <input type="number" required id="mnumber" onchange="numbervalidate()" name="mnumber" placeholder="9121351545"><br><br>

            <label for="toe">Type Of Event :</label>
            <select name="" required id="toe">
                <option value="">Seminar</option>
                <option value="">Expert talk</option>
                <option value="">Conference</option>
                <option value="">Training session</option>
                <option value="">Other</option>
            </select><br><br>

            <label for="purpose">Purpose for Booking :</label><br>
            <textarea name=""required id="purpose" cols="36" rows="5">
                write the purpose of booking for auditorium
            </textarea><br><br>

            <label for="sdate">Start Date :</label>
            <input type="date" required id="sdate" name="sdate" ><br>
            <br>

            <label for="edate">End Date :</label>
            <input type="date" required id="edate" name="sdate"><br>
            <br>

            <input  type="submit"id="button" onsubmit="main()" value="Submit">

        </form >
    </div>

    <?php include_once 'footer.php' ;?>
</body>

</html>