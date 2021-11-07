<!-- Contact section starts -->
<section class="contact" id="contact">

    <h1 class="heading">Register</h1>

    <!-- Gym details  -->
    <div class="contact-container">
        <ul>
            <li><i class="fa fa-map-marker" aria-hidden="false"></i><span> Bomiriya 117/1 Kaduwela, Sri Lanka</span>
            </li>
            <li><i class="fa fa-envelope" aria-hidden="true"></i><span>rathnayakagyms@gmail.com</span></li>
            <li><i class="fa fa-phone" aria-hidden="true"></i><span>075-7107140</span></li>
        </ul>
    </div>

    <!-- contact form -->
    <form id="contactForm" method="POST" action="system/contactFormValidate.php">
        <div class="inputBox">
            <input type="text" name="firstname" id="fname" placeholder="First Name" required>
            <input type="text" name="lastname" id="lname" placeholder="Last Name" required>
        </div>

        <div class="inputBox">
            <input id="email" name="email" type="email" placeholder="Your Email" required>
            <input id="number" name="number" type="text" placeholder="Your Number" required>
        </div>

        <textarea name="address" id="msg" cols="30" rows="10" placeholder="Your Address" required></textarea>

        <input name="submit" type="submit" class="btn" value="submit">
    </form>

</section>
<!-- Contact section ends -->


<!-- footer section starts  -->
<section class="footer">
    Student ID : <a href="#">CL/HNDCSE/91/17 </a>
</section>