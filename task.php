<?php
    $Student = mysqli_connect("localhost","root","","vipulsir") or die("connection problem");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task</title>
    <style>
        body {
            margin: 0px 0px;
            background-image: url(img/cn.jpg);
            background-size: cover;
        }

        form {
            /* align-items: center; */
            margin: -10% 20% 20% 20%;
        }
        
        table {
            width: 100%;
            height: 100%;
            margin: -8% 0%;
            /* border: 2px solid rgb(171 143 143); */
            border-radius: 5px;
            border-collapse: collapse;
        }

        label {
            font-size: 20px;
            margin: 5px 5px;

        }

        input {
            height: 18px;
            /* width: 30px; */
        }

        td {
            padding: 20px 20px;
            /* border: 2px solid rgb(171 143 143); */
            /* box-sizing: border-box;  */
            /* resize: vertical; */
        }

        h1 {
            color: white;
            text-align: center;
            font-size: 42px;
            /* background-color: red; */
            display: block;
        }

        #reset {
            width: 121px;
            height: 35px;
            font-size: 20px;
            border-radius: 5px;
            background-color: red;
        }
        #submit {
            width: 100%;
            height: 35px;
            font-size: 20px;
            border-radius: 5px;
            background-color: green;
            color: white;
        }
        /* style="background-image:url(Images/one.jpg); background-size:cover ;" */
        </style>
</head>

<body>
    
        <div>

            <h1> Student Registration For AIU Placement</h1>
        </div>    
        <form method="post" action="tast_insert.php" >
            <table>
            <div>
                <tr style="background-color: rgb(220, 220, 220);">
                    <td>
                        <label for="fname">First Name:</label>
                    </td>
                    <td>
                        <input type="text" name="firstname" id="fname" size="80%">
                    </td>
                </tr>
            </div>
            <br>
            <div>
                <tr style="background-color: rgb(187, 187, 187);">
                    <td>
                        <label for="mname">Middle Name::</label>
                    </td>
                    <td>
                        <input type="text" name="middlename" id="mname" size="80%">
                    </td>
                </tr>
            </div>
            <br>
            <div>
                <tr style="background-color: rgb(220, 220, 220);">
                    <td>
                        <label for="lname">Last Name</label>
                    </td>
                    <td>
                        <input type="text" name="lastname" id="lname" size="80%">
                    </td>
                </tr>
            </div>
            <br>
            <div>
                <tr style="background-color: rgb(187, 187, 187);">
                    <td>
                        <label for="f name">Father Name</label>
                    </td>
                    <td>
                        <input type="text" name="f_name" id="f name" size="80%">
                    </td>
                </tr>
            </div>
            <br>
            <div>
                <tr style="background-color: rgb(220, 220, 220);">
                    <td>
                        <label for="enrollment">Enrollment</label>
                    </td>
                    <td>
                        <input type="text" name="enrollment" id="enrollment" size="80%">
                    </td>
                </tr>
            </div>
            <br>
            <div>
                <tr style="background-color: rgb(187, 187, 187);">
                    <td>
                        <label for="birthdate">Date of Birth</label>
                    </td>
                    <td>
                        <input type="date" name="birthdate" id="birthdate" size="80%">
                    </td>
                </tr>
            </div>
            <br>
            <div>
                <tr style="background-color: rgb(220, 220, 220);">
                    <td>
                        <label for="gender">Gender</label>
                    </td>
                    <td>
                        <input type="radio" name="gender" id="gender" checked>Male
                        <input type="radio" name="gender" id="gender">Female
                        <input type="radio" name="gender" id="gender">Other
                    </td>
                </tr>
            </div>
            <br>
            <div>
                <tr style="background-color: rgb(187, 187, 187);">
                    <td>
                        <label for="mobile no">Mobile No.</label>
                    </td>
                    <td>
                        <input type="text" name="mobile_no" id="mobile no" size="80%">
                    </td>
                </tr>
            </div>
            <br>
            <div>
                <tr style="background-color: rgb(220, 220, 220);">
                    <td>
                        <label for="email">Email</label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" size="80%">
                    </td>
                </tr>
            </div>
            <br>
            <div>
                <tr style="background-color: rgb(187, 187, 187);">
                    <td>
                        <label for="Work">Work</label>
                    </td>
                    <td>
                        <input type="checkbox" name="Work" id="Work">Part time
                        <input type="checkbox" name="Work" id="Work">Full time
                        <input type="checkbox" name="Work" id="Work">No work
                    </td>
                </tr>
            </div>
            <br>
            <div>
                <tr style="background-color: rgb(220, 220, 220);">
                    <td>
                        <label for="state">State</label>
                    </td>
                    <td>
                        <select name="state" id="state">
                            <option value="Gujrat" name="state">Gujrat</option>
                            <option value="Rajasthan" name="state">Rajasthan</option>
                            <option value="Maharastra" name="state">Maharastra</option>
                            <option value="UP" name="state">UP</option>
                            <option value="MP" name="state">MP</option>
                        </select>
                    </td>
                </tr>
            </div>
            <br>
            <div>
                <tr style="background-color: rgb(187, 187, 187);">
                    <td>
                        <input id="reset" type="submit" name="submit" value="Reset">
                    </td>
                    <td>
                        <input id="submit" type="submit" name="sumbit" value="Submit">
                    </td>
                </tr>
            </div>

            <br>
        </table>
    </form>

    
</body>

</html>