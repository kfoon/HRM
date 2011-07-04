<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Form</title>
<script type='text/javascript' src='./includes/js/jquery.foggle.min.for.demo.js'></script>

</head>
<body>

<div id='page'>
	<div class="maincontent">
                                    <div class="mainHeading"><h3 id="immigrationHeading">Photograph</h3></div>
                                    <form enctype="multipart/form-data" action="/orangehrm-2.6.5/symfony/web/index.php/pim/viewPhotograph" method="post" id="frmPhoto" name="frmPhoto">
                                        <input type="hidden" id="csrf_token" value="1532f9bb40ed6212f2349eeca11309c0" name="_csrf_token">                                        <input type="hidden" id="emp_number" value="0" name="emp_number">                                                                                <br class="clear">
                                        <div class="formFields">
                                            <label for="photofile">Select a Photograph</label>                                   
                                 <input type="file" id="photofile" class="duplexBox" name="photofile"><span class="helpText">.jpg, .png or .gif file with maximum size of 1MB</span><br class="clear">
                                            
                                            
                                        </div>
                                        <div class="formbuttons">
                                            <input type="button" value="Upload" id="btnSave" class="savebutton" disabled="">
                                            <input type="button" value="Delete" id="btnDelete" class="savebutton">
                                        </div>
                                    </form>

                                </div>
<!-- footer -->
<div id="footer"></div>
<!-- /footer -->

</div>
</body>
</html>