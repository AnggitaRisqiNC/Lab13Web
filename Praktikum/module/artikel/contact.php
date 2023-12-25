<?php require('../../template/header.php'); ?>

<!-- Navbar -->
<nav>
    <a href="index.php">Home</a>
    <a href="tambah.php">Tambah Barang</a>
    <a href="contact.php">Contact</a>
</nav>

<!-- Content -->
<section id="contact" class="contact">
    <h2><span>Contact</span> Me</h2>
    <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.01409689679!2d107.12116680000001!3d-6.261872799999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69856c5acfcf57%3A0xb00f9f50fd44c965!2sSofa%20Hill%20Park!5e0!3m2!1sid!2sid!4v1692626477339!5m2!1sid!2sid"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

        <form id="contact-form" action="#" method="post" enctype="text/plain">
            <div class="input-group">
                <i data-feather="user"></i>
                <input type="text" placeholder="Nama" name="nama" required>
            </div>
            <div class="input-group">
                <i data-feather="mail"></i>
                <input type="text" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <i data-feather="message-circle"></i>
                <input type="text" placeholder="Text" name="text" required>
            </div>
            <button type="submit" class="btn">Contact me</button>
        </form>
    </div>
</section>

<?php require('../../template/footer.php'); ?>