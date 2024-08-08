<style>
    nav {
        display: flex;
        width: 100%;
        background-color: black;
        padding-top: 1%;
        padding-bottom: 1%;
    }

    nav a {
        text-decoration: none;
        color: rgba(255, 255, 255, 0.8);
        padding: 1%;
        margin-left: 10px;
        background-color: rgba(255, 255, 255, 0.2);
    }

    nav a:hover,
    .active_page {
        color: rgba(255, 255, 255, 1);
        background-color: rgba(255, 255, 255, 0.1);
    }
</style>

<nav>
    <a href="/" class="<?= is_url('/') ? "active_page" : "" ?>">Home</a>
    <a href="/notes" class="<?= is_url('/notes') ? "active_page" : "" ?>">Notes</a>
    <a href="/about" class="<?= is_url('/about') ? "active_page" : "" ?>">About</a>
    <a href="/contact" class="<?= is_url('/contact') ? "active_page" : "" ?>">Contact Us</a>
</nav>