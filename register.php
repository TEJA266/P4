<html>
    <head>
        <title>HomeNest</title>
        <link href="style_register.css" rel="stylesheet">
    </head>
    <body>
        <h1></h1>
        <div class="seller_reg">

            <form method="post" action="seller_register_submit.php">

                <h3>Register as <br> a Seller?</h3>
                <div class="fields">
                    <input type="text" name="seller_name" id="seller_name" placeholder="Enter Name" required>
                </div> <br>
                <div class="fields">
                    <input type="text" name="seller_user_id" id="seller_user_id" placeholder="Enter Userid" required>
                </div> <br>
                <div class="fields">
                    <input type="email" name="seller_email" id="seller_email" placeholder="Enter Email" required>
                </div> <br>
                <div class="fields">
                    <input type="password" name="seller_password" id="seller_password" placeholder="Enter Password" required>
                </div> <br>
                <div class="fields">
                    <input type="checkbox" style="margin-left:6%;" required> <h8 style="color: red;">I agree to the Terms & Conditions</h8>
                </div><br>
                <div class="fields">
                    <input type="submit" value="SUBMIT">
                </div>

            </form>

        </div>
        <div class="cen">
            <div class="vl"></div>
        </div>
        <div class = "buyer_reg">

            <form method = "post" action="buyer_register_submit.php">
                <h3>Register as<br> a Buyer?</h3>

                <div class="fields">
                    <input type="text" name="buyer_name" id="buyer_name" placeholder="Enter Name" required>
                </div> <br>
                <div class="fields">
                    <input type="text" name="buyer_user_id" id="buyer_user_id" placeholder="Enter Userid" required>
                </div> <br>
                <div class="fields">
                    <input type="email" name="buyer_email" id="buyer_email" placeholder="Enter Email" required>
                </div> <br>
                <div class="fields">
                    <input type="password" name="buyer_password" id="buyer_password" placeholder="Enter Password" required>
                </div> <br>
                <div class="fields">
                    <input type="checkbox" style="margin-left:6%;" required> <h8 style="color: red;">I agree to the Terms & Conditions</h8>
                </div><br>
                <div class="fields">
                    <input type="submit" value="SUBMIT">
                </div>

            </form>


        </div>
        <div class="redirect">
            <h4>Already have an account? </h4><a href="login.php">LOGIN</a>
        </div>

    </body>
</html>


<!-- 

CREATE TABLE seller_data(seller_id int(6) unsigned auto_increment primary key,
seller_name varchar(30) not null, 
seller_user_id varchar(20) not null, seller_email varchar(30) not null, seller_password varchar(30) not null);





CREATE TABLE buyer_data(buyer_id int(6) unsigned auto_increment primary key,
buyer_name varchar(30) not null, 
buyer_user_id varchar(20) not null, buyer_email varchar(30) not null, buyer_password varchar(30) not null);





 -->