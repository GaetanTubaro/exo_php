<?php

if (
    !empty($_POST['mail']) && filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) &&
    filter_var($_POST['subject'], FILTER_CALLBACK, array('options' => 'test')) &&
    filter_var($_POST['message'], FILTER_CALLBACK, array('options' => 'test'))
) {
    echo "Clara avait raison.....";
}

?>

<form class="w-25 mx-auto mt-2 d-flex flex-column" method="POST">
    <div class="mb-3">
        <label class="form-label">Sujet</label>
        <input type="text" class="form-control" placeholder="Sujet" name="subject" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="name@example.com" name="mail" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Message</label>
        <textarea class="form-control" rows="3" name="message" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary mx-auto">Envoyer</button>
</form>