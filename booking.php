<html>
    <head>
        <title>
            Booking
        </title>
        <meta charset="utf-8">
        <link href="styles/booking.css" rel="stylesheet">
        <link rel="icon" href="images/logo.jpg">
    </head>
    <body>
        <div class="container">
           <form action="insert.php" method="GET">
               <header>
                   <h1>
                       Time for booking !
                   </h1>
               </header>
               <div class="c1">
                   <div class="c2">
                       <label><b>FIRST NAME & FAMILY NAME</b></label>
                   </div>
                   <div class="c3">
                       <input type="text" name="name" placeholder="Write your first name & family name" required>
                   </div>
               </div>
               <div class="c1">
                <div class="c2">
                    <label><b>BIRTH DATE</b></label>
                </div>
                <div class="c3">
                    <input type="date" name="birth" placeholder="jj/mm/aaaa" required>
                </div>
               </div>
               <div class="c1">
                <div class="c2">
                    <label><b>ADDRESS</b></label>
                </div>
                <div class="c3">
                    <input type="text" name="address" placeholder="Write your address" required>
                </div>
               </div> 
               <div class="c1">
                <div class="c2">
                    <label><b>MAIL</b></label>
                </div>
                <div class="c3">
                    <input type="email" name="mail" placeholder="fname.famname@example.com" required>
                </div>
               </div> 
               <div class="c1">
                <div class="c2">
                    <label><b>REQUIREMENTS</b></label>
                </div>
                <div class="c3">
                    <textarea name="requirements" style="height:300px" cols="30" rows="10" placeholder="Write any requirements"></textarea>
                </div>
               </div>
               <div class="c1">
                <div class="c2">
                    <label><b>ARRIVAL</b></label>
                </div>
                <div class="c3">
                    <input type="date" name="arrival" placeholder="jj/mm/aaaa" required>
                </div>
               </div>
               <div class="c1">
                <div class="c2">
                    <label><b>DEPARTURE</b></label>
                </div>
                <div class="c3">
                    <input type="date" name="departure" placeholder="jj/mm/aaaa" required>
                </div>
               </div>
               <div class="c1">
                   <div class="c2">
                       <label>ADULTS</label>
                   </div>
                   <div class="c3">
                       <input type="number" name="adults">
                   </div>
               </div>
               <div class="c1">
                <div class="c2">
                    <label>CHILDREN</label>
                </div>
                <div class="c3">
                    <input type="number" name="children">
                </div>
               </div>
               <div class="c1">
                <div class="c2">
                    <label><b>CHOOSE YOUR ROOM</b></label>
                </div>
                <div class="c3">
                    <select name="room">
                        <option>SUITE</option>
                        <option>DOUBLE</option>
                        <option>SINGLE</option>
                    </select>
                </div>
           </div>
               <div class="c1">
                    <div class="c2">
                        <label><b>PAYMENT OPRIONS</b></label>
                    </div>
                    <div class="c3">
                        <select name="payment">
                            <option>CASH</option>
                            <option>CHECKS</option>
                            <option>CREDIT CARD</option>
                            <option>MOBILE PAYMENTS</option>
                            <option>ELECTRONIC BANK TRANSFERS</option>
                        </select>
                    </div>
               </div>
               <div class="d">
                <input type="reset" value="Cancel" class="d1">
                <input type="submit" value="Book" class="d2" onSubmit="return verif()">
               </div>
           <a href="index.html">Back to Home page</a>
           </form>
        </div>
        <script>
            function verif()
            {
                var ch=f.name.value;
                ch=ch.toUpperCase();
                if (ch.length<3 || ch.length>30)
                    {
                        alert("Le nom doit être entre 3 et 30 caractères");
                        return false;
                    }

            }
        </script>
    </body>
</html>
<?php
    if($_POST)
        {
            extract($_POST);
            echo "<script>Swal.fire('$name a commandé $birth $address','info','success')</script>";
        }
?>