<?php
include '../phpFiles/header.php';
?>
            
            <div class="aboutUs-main-content">
                
                <div class="aboutUs-container">
                    <div class="aboutUs-inner-container">
                        <h1>About Us</h1>
                        <p class="text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
                        </p>
                    </div>
                </div>

                <div class="contactUs-container">
                    <h1>Contact Us</h1>
                     <div class="column">
                        <form name="formCU" id=" formCU" action="#">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Your name..">
                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                            <label for="subject">Subject</label>
                            <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                            <button id="submitbtn"> Submit </button>
                        </form>
                    </div>
                  

                </div>
            </div>

            <script src="../jsFiles/script.js"></script>

<?php
include '../phpFiles/footer.php';
?>