<form method="POST" name="contactform" action="contact-form-handler.php">
    <p>
        <label for='name'>Your Name:</label>
        <br>
        <input type="text" name="name">
    </p>
    <p>
        <label for='email'>Email Address:</label>
        <br>
        <input type="text" name="email">
        <br>
    </p>
    <p>
        <label for='message'>Message:</label>
        <br>
        <textarea name="message"></textarea>
    </p>
    <input type="submit" value="Submit">
    <br>
</form>