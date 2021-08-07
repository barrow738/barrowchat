<?php include "header.php"?>


    <div class="container">
        <div class="chat-section">
            <h2>Register or login to chat</h2>
            <hr class="op-1">
            <form action="#">
                <div class="d-flex space-btn">
                    <div>
                        <label for="last_name" class="form-label">Last name</label>
                        <input type="text" name="lastname" id="last_name" class="form-input" placeholder="Eg. Doe" require>
                    </div>
                    <div>
                        <label for="last_name" class="form-label">Last name</label>
                        <input type="text" name="lastname" id="last_name" class="form-input" placeholder="Eg. Doe" require>
                    </div>
                </div>
                <label for="user_email" class="form-label">Email address</label>
                <input type="email" name="useremail" id="user_email" class="form-input" placeholder="Eg. example@mail.com" require>
                <label for="user_pass" class="form-label">Password</label>
                <input type="password" name="cuserpass" id="cuser_pass" class="form-input" require>
                <label for="cuser_pass" class="form-label">Confirm Password</label>
                <input type="password" name="userpass" id="user_pass" class="form-input" require>
                <label for="profile_pic" class="form-label">Profile picture</label>
                <input type="file" name="profilepic" id="profile_pic" require>
                <input type="submit" class="btn btn-main btn-block my-2 btn-lg" value="Continue to chat">
                Already have an account? <a href="#">Login</a>
            </form> 
        </div>
    </div>


<?php include "footer.php"?>