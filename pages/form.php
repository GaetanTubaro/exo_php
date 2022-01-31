<?php
if (isset($_POST['mail']) && isset($_POST['subject']) && filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
    var_dump($_POST['mail']);
}




?>


<form class="w-25 mx-auto mt-2 d-flex flex-column" method="POST">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Sujet</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Sujet" name="subject" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com" name="mail" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary mx-auto">Envoyer</button>
</form>