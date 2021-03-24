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
    <title>Sleep_Efficiency</title>

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
                    <h2 class="title">Sleep_Efficiency_Calculator</h2>
                </div>
				
                <div class="card-body">
				
                    <form name="SE_Form">
					
						<div class="form-row">
						
                            <div class="name"> Total Sleep Time (Min)</div>
							
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="tst" size="10"required>
                                </div>
                            </div>
							
                        </div>
						
						<div class="form-row">
						
                            <div class="name">Times to fall asleep (Min)</div>
							
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="tfa" size="10"required>
                                </div>
                            </div>
							
                        </div>
						
						<div class="form-row">
						
                            <div class="name">Times to Awakened (Min)</div>
							
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="tta" size="10"required>
                                </div>
                            </div>
							
                        </div>
						
						<div class="form-row">
						
                            <div class="name">Total Sleep Time (Min)</div>
							
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="ftst" size="10" readonly>
                                </div>
                            </div>
							
                        </div>
						
                        
                        <div>
                            <input class="btn btn--radius-2 btn--red" type="button" value="Calculate Sleep Efficiency" onClick="calculateSE()">
						</div>
						
						<br>
						
						
							<div class="form-row">
						
                            <div class="name">Sleep Efficiency : </div>
							
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="se" size="10" readonly>
                                </div>
                            </div>
							
							</div>
							
								<div class="form-row">
						
                            <div class="name">SE Range : </div>
							
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="ser" size="10" readonly>
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
    
function calculateSE()
{
var total_st = parseInt(document.SE_Form.tst.value);
var fall_asleep = parseInt(document.SE_Form.tfa.value);
var awakened = parseInt(document.SE_Form.tta.value);

var total_sleep_time = (total_st - (fall_asleep+awakened));

document.SE_Form.ftst.value = (total_sleep_time);

var sleep_efficiency=((total_sleep_time/total_st)*100);

document.SE_Form.se.value = parseInt(sleep_efficiency)+"%";

if(parseInt(sleep_efficiency)>90)
{
	document.SE_Form.ser.value = "Good Sleep Efficiency";
}
else
{
	document.SE_Form.ser.value = "Normal Sleep Efficiency";
}
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