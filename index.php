<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
</head>

<body>
    <form action="/thanks.php" method="post">
        <h1>Your demand</h1>

        <p>
            <label for="firstName">First Name : </label>
            <input type="text" name="firstName" id="firstName">
        </p>

        <p>
            <label for="lastName">Last Name : </label>
            <input type="text" name="lastName" id="lastName">
        </p>

        <p>
            <label for="eMail">E-Mail : </label>
            <input type="email" name="eMail" id="eMail">
        </p>

        <p>
            <label for="phoneNumber">Phone Number : </label>
            <input type="tel" name="phoneNumber" id="phoneNumber">
        </p>

        <p>
            <label for="subjects">Subject : </label>
            <select name="subject" id="subjects">
                <option value="">--Please choose an option--</option>
                <option value="bug">Bug</option>
                <option value="error">Error</option>
                <option value="nothing">Nothing</option>
            </select>
        </p>

        <p>
            <label for="message">Message : </label>
            <textarea id="message" name="message" rows="5" cols="33">Type your text here</textarea>
        </p>

        <p>
            <button type="submit">Envoyer</button>
        </p>

    </form>

</body>

</html>