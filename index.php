<?php 
include "views/header.php"; 
?>
        <div class="reg-form">
            <p class="title">REGISTRATION</p>
            <form method="POST" action="models/register_account.php">
                <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Pantonial@gmail.com">
                <label for="firstname">First name</label>
                    <input type="text" name="firstname" id="firstname" placeholder="jean lordy">
                <label for="lastname">Last name</label>
                    <input type="text" name="lastname" id="lastname" placeholder="pantonial">
                <label for="password">Password</label>
                    <input type="password" name="password" id="password">    
                <label for="cpassword">Confirm Password</label>
                    <input type="password" name="cpassword" id="cpassword" >
                    <input type="submit" value="signup">
            </form>
        </div>
<?php
include "views/footer.php";

