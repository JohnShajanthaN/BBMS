<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>BMR Calculator</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>

    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
			
                <div class="card-heading">
                    <h2 class="title">BMR Calculator</h2>
                </div>
				
                <div class="card-body">
				
                    <form name="bmrForm">
					
					
						<div class="form-row">
						
                            <div class="name">Age:</div>
							
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="age" size="10" required>
                                </div>
                            </div>
							
                        </div>
						
						
						<div class="form-row">
						
                            <div class="name">Weight (Kg):</div>
							
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="weight" size="10" required>
                                </div>
                            </div>
							
                        </div>
						
						<div class="form-row">
						
                            <div class="name">Height (Cm):</div>
							
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="height" size="10" required>
                                </div>
                            </div>
							
                        </div>
						
							<div class="form-row">
						
                            <div class="name">Gender:</div>
							
                            <div class="value">
                                <div class="input-group">
								<input class="input--style-5" type="text" name="gender" size="10" required>
                                </div>
                            </div>
							
                        </div>
						
						
						
						
						
                        <div>
                            <input class="btn btn--radius-2 btn--red" type="button" value="Calculate BMR" onClick="calculateBmr()">
						</div>
						
						<br>
						
						
							<div class="form-row">
						
                            <div class="name">Your BMR:</div>
							
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="bmr" size="10">
                                </div>
                            </div>
							
							</div>
						
							
							<div>
                            <input class="btn btn--radius-2 btn--red" type="reset" value="Reset">
						</div>
						
                    </form>
                </div>
				
            </div>
        </div>
    </div>
	
	<script>
    

function calculateBmr()
 {
	
var age = document.bmrForm.age.value;
var weight = document.bmrForm.weight.value;
var height = document.bmrForm.height.value;
var gender = document.bmrForm.gender.value;

var BMRCalculation;

if (gender == "Male" || gender == "male")
{
 BMRCalculation = ( (10*weight) + (6.25*height) - (5*age) + 5 );
}
else if(gender == "Female" || gender == "female" )
{
 BMRCalculation = ((10*weight) + (6.25*height) - (5*age) - 161 );
}
else
{
	alert("Invalid Gender Type!!");
}
document.bmrForm.bmr.value =BMRCalculation;
}

    </script>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->