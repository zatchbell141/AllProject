<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Yash Infotech</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    </head>
    <body >
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2>Registration for Course</h2> 
                    <form method="post" action="" autocomplete="off">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> First Name:</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" maxlength="50">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="name"> Last Name:</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" maxlength="50">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="email"> Email:</label>
                                <input type="text" class="form-control" id="email" name="email" maxlength="50">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email"> Gender:</label>
                               <select class="form-control" name="txtgender">
                                   <option>Select Gender</option>
                                   <option value="Male">Male</option>
                                   <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="name"> Courses:</label>
                               <select class="form-control" name="txtcourses">
                                   <option>Select Course</option>
                                   <option value="Advance C">Advance C (3)</option>
<option value="Advanced Cpp">Advanced Cpp (10)</option>
<option value="Android app using Kotlin">Android app using Kotlin (10)</option>
<option value="Applications of GeoGebra">Applications of GeoGebra (15)</option>
<option value="Apps On Physics">Apps On Physics (13)</option>
<option value="Arduino">Arduino (21)</option>
<option value="ASCEND">ASCEND (6)</option>
<option value="Audacity">Audacity (4)</option>
<option value="Avogadro">Avogadro (8)</option>
<option value="BASH">BASH (23)</option>
<option value="Biogas Plant">Biogas Plant (11)</option>
<option value="Biopython">Biopython (5)</option>
<option value="Blender">Blender (15)</option>
<option value="BOSS Linux">BOSS Linux (17)</option>
<option value="C and Cpp">C and Cpp (20)</option>
<option value="CellDesigner">CellDesigner (7)</option>
<option value="ChemCollective Virtual Labs">ChemCollective Virtual Labs (13)</option>
<option value="Digital Divide">Digital Divide (17)</option>
<option value="Digital India">Digital India (5)</option>
<option value="Drupal">Drupal (28)</option>
<option value="DSpace">DSpace (17)</option>
<option value="DWSIM">DWSIM (20)</option>
<option value="Embedded Linux Device Driver">Embedded Linux Device Driver (13)</option>
<option value="eSim">eSim (11)</option>
<option value="ExpEYES">ExpEYES (10)</option>
<option value="Filezilla">Filezilla (2)</option>
<option value="Firefox">Firefox (10)</option>
<option value="Freeplane">Freeplane (10)</option>
<option value="FrontAccounting-2.4.7">FrontAccounting-2.4.7 (11)</option>
<option value="GChemPaint">GChemPaint (15)</option>
<option value="GCompris">GCompris (8)</option>
<option value="gedit Text Editor">gedit Text Editor (7)</option>
<option value="GeoGebra 5.04">GeoGebra 5.04 (11)</option>
<option value="GIMP">GIMP (22)</option>
<option value="Git">Git (10)</option>
<option value="Gnuplot">Gnuplot (13)</option>
<option value="Grace">Grace (7)</option>
<option value="HTML">HTML (14)</option>
<option value="Inkscape">Inkscape (19)</option>
<option value="Introduction to Computers">Introduction to Computers (5)</option>
<option value="Java">Java (43)</option>
<option value="Java Business Application">Java Business Application (7)</option>
<option value="JChemPaint">JChemPaint (3)</option>
<option value="Jmol Application">Jmol Application (13)</option>
<option value="Joomla">Joomla (9)</option>
<option value="K3b">K3b (2)</option>
<option value="Koha Library Management System">Koha Library Management System (21)</option>
<option value="KTouch">KTouch (3)</option>
<option value="KTurtle">KTurtle (7)</option>
<option value="LaTeX">LaTeX (14)</option>
<option value="LibreOffice Calc on BOSS Linux">LibreOffice Calc on BOSS Linux (9)</option>
<option value="LibreOffice Impress on BOSS Linux">LibreOffice Impress on BOSS Linux (9)</option>
<option value="LibreOffice Installation">LibreOffice Installation (2)</option>
<option value="LibreOffice Suite Base">LibreOffice Suite Base (22)</option>
<option value="LibreOffice Suite Calc">LibreOffice Suite Calc (12)</option>
<option value="LibreOffice Suite Calc 6.3">LibreOffice Suite Calc 6.3 (12)</option>
<option value="LibreOffice Suite Draw">LibreOffice Suite Draw (15)</option>
<option value="LibreOffice Suite Draw 6.3">LibreOffice Suite Draw 6.3 (8)</option>
<option value="LibreOffice Suite Impress">LibreOffice Suite Impress (10)</option>
<option value="LibreOffice Suite Impress 6.3">LibreOffice Suite Impress 6.3 (8)</option>
<option value="LibreOffice Suite Math">LibreOffice Suite Math (6)</option>
<option value="LibreOffice Suite Writer">LibreOffice Suite Writer (10)</option>
<option value="LibreOffice Suite Writer 6.3">LibreOffice Suite Writer 6.3 (10)</option>
<option value="LibreOffice Writer on BOSS Linux">LibreOffice Writer on BOSS Linux (8)</option>
<option value="Linux">Linux (17)</option>
<option value="Linux AWK">Linux AWK (11)</option>
<option value="Linux for Sys-Ads">Linux for Sys-Ads (7)</option>
<option value="Marble">Marble (15)</option>
<option value="Moodle Learning Management System">Moodle Learning Management System (20)</option>
<option value="Netbeans">Netbeans (8)</option>
<option value="OpenFOAM">OpenFOAM (23)</option>
<option value="OpenFOAM version 7">OpenFOAM version 7 (11)</option>
<option value="OpenModelica">OpenModelica (14)</option>
<option value="OpenModelica OpenIPSL">OpenModelica OpenIPSL (4)</option>
<option value="OpenPLC version1 with LDmicro">OpenPLC version1 with LDmicro (27)</option>
<option value="PERL">PERL (23)</option>
<option value="PhET">PhET (21)</option>
<option value="PHP and MySQL">PHP and MySQL (57)</option>
<option value="Python 3.4.3">Python 3.4.3 (39)</option>
<option value="Python Django">Python Django (10)</option>
<option value="Python Flask">Python Flask (4)</option>
<option value="QCad">QCad (5)</option>
<option value="QGIS">QGIS (15)</option>
<option value="R">R (23)</option>
<option value="RDBMS PostgreSQL">RDBMS PostgreSQL (9)</option>
<option value="Ruby">Ruby (10)</option>
<option value="Scilab">Scilab (30)</option>
<option value="Single Board Heater System">Single Board Heater System (5)</option>
<option value="Skill Development- Fitter">Skill Development- Fitter (1)</option>
<option value="Skill Development- InStore Promoter">Skill Development- InStore Promoter (1)</option>
<option value="Spoken Tutorial Technology">Spoken Tutorial Technology (12)</option>
<option value="Step">Step (2)</option>
<option value="Synfig">Synfig (12)</option>
<option value="Thunderbird">Thunderbird (4)</option>
<option value="Tux Typing">Tux Typing (2)</option>
<option value="Ubuntu Linux on Virtual Box">Ubuntu Linux on Virtual Box (3)</option>
<option value="UCSF Chimera">UCSF Chimera (11)</option>
<option value="Video Editing using Blender">Video Editing using Blender (8)</option>
<option value="What is Spoken Tutorial">What is Spoken Tutorial (2)</option>
<option value="Xfig">Xfig (3)</option>
                               </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs" name="btnsubmit">Apply</button>
                            </div>
                        </div>
                    </form>
                        <?php include 'include/addcoures.php';?>
                </div>
            </div>
        </div>
    </body>
</html>