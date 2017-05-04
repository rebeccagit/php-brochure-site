<?php include 'includes/headers.php' ?>
<!DOCTYPE html>
<html>
<head>
<title>Company A - Picture Gallery - Company A in Tomball and Spring, TX
</title>
<meta name="description" content="We offer many Company A services in Tomball and Spring, TX." />
<meta name="keywords" content="Company A." />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="scripts/bootstrap/bootstrapcss.css">
<link rel="stylesheet" href="scripts/css/main.css">
<script src="scripts/jquery/jquery.js"></script>
<script src="scripts/bootstrap/bootstrap.js"></script>

</head>
<body>
    <div id="body">
        <div id="container" class="container-fluid">
        <?php include 'includes/header.php';?>
        <?php include 'includes/menubar.php';?>
        <div id="main">
            <div class="row">
                <div class="col-md-12"><br /><br />
					<p><h2>PICTURES</h2></p>
					<br/>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
				<br />				
                <p class="pgcontentheader">Our satisified customers' work!</p>
				<br /><br />
                </div>
				<div class="col-md-2"></div>				
            </div>
            <div class="row">
                <div class="col-md-8"><br /><br />
           
           
                    <div class="row">
                        <div class="col-md-2"></div>                        
                        <div class="col-md-2 small" id="one" onclick="getid(this)">
                            <img src="pictures/samplepicone.png" alt="Design" style="width:125px;"><br /><br/>
                            <p>Random text random text random text random text.</p><br />
                        </div>
                        <div class="col-md-2 small" id="two" onclick="getid(this)">
                            <img src="pictures/samplepictwo.png" alt="Design" style="width:125px;"><br /><br/>
							<p>Random text random text random text random text.</p><br />
							
                        </div>
                        <div class="col-md-2 small" id="three" onclick="getid(this)">
                            <img src="pictures/samplepicthree.png" alt="Design" style="width:125px;"><br /><br/>
							 <p>Random text random text random text random text.</p><br />
                        </div>                
                        <div class="col-md-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"><br /></div>
                    </div>            
                     <div class="row">
                        <div class="col-md-2"></div>                        
                        <div class="col-md-2 small" id="four" onclick="getid(this)">
                            <img src="pictures/samplepicfour.png" alt="Design" style="width:125px;">
                        </div>
                        <div class="col-md-2 small" id="five" onclick="getid(this)">
                            <img src="pictures/samplepicfive.png" alt="Design" style="width:125px;">
                        </div>
                        <div class="col-md-2 small" id="six" onclick="getid(this)">  
                            <img src="pictures/samplepicsix.png" alt="Design" style="width:125px;">
                        </div>                        
                        <div class="col-md-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"><br /></div>
                    </div>               
                    <div class="row">
                        <div class="col-md-2"></div>                         
                        <div class="col-md-2 small" id="seven" onmouseover="getid(this)">
                            <img src="pictures/samplepicseven.png" alt="Design" style="width:125px;">
                        </div>
                        <div class="col-md-2 small" id="eight" onmouseover="getid(this)">
                            <img src="pictures/samplepiceight.png" alt="Design" style="width:125px;">
                        </div>
                        <div class="col-md-2 small" id="nine" onmouseover="getid(this)">  
                            <img src="pictures/samplepicnine.png" alt="Design" style="width:125px;">
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                 </div>
                <div class="col-md-4">
                    <div class="row">
                        <br /><br /><br /><br />
                    </div>                
                    <div class="row">
                        <div class="col-md-12">
                            <div id="popupModal" class="modalBG">
                                <div class="modalPage">
                                    <span class="close">&times;</span>
                                    <p id="largeImage"></p>
                                    <p id="caption"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <br /><br /><br /><br />
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php';?>
    </div>
</div>

<script>
    function getid(obj) {
        let imageid = obj.id;
        let elem = document.createElement("img");
		
		let theimage = { 
			"one" : "pictures/samplepicone.png", 
			"two" : "pictures/samplepictwo.png", 
			"three" : "pictures/samplepicthree.png", 
			"four" : "pictures/samplepicfour.png", 
			"five" : "pictures/samplepicfive.png", 
			"six" : "pictures/samplepicsix.png",
			"seven" : "pictures/samplepicseven.png", 
			"eight" : "pictures/samplepiceight.png", 
			"nine" : "pictures/samplepicnine.png"
			};
			
		modal.style.display = "block";

        if (imageid) {              
			elem.setAttribute("src", theimage[imageid]);
            document.getElementById("caption").innerHTML = "Random text random text random text random text.";   
            }
                                            
            elem.setAttribute("height", "60%");
            elem.setAttribute("width", "80%");
            elem.setAttribute("alt", "Flower");
            document.getElementById("largeImage").appendChild(elem);
        } 

    const modal = document.getElementById('popupModal');
    const closeModal = document.getElementsByClassName("close")[0];        

    closeModal.onclick = function() {
        document.getElementById("largeImage").innerHTML = "";
        document.getElementById("caption").innerHTML = "";
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            document.getElementById("largeImage").innerHTML = "";
            document.getElementById("caption").innerHTML = "";
            modal.style.display = "none";
        }
    }
</script>

</body></html>