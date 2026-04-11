<form method="post" action="<?= ROOT ?>/contract">
    <input type="hidden" name="_csrf_token" value="<?=CSRF::generate(); ?>">

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Enter your name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Enter your email" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" placeholder="Enter your message" required></textarea>

    <button type="submit">Submit</button>
</form>
