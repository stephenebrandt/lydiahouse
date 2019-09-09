<?php include 'inc/header.php'; ?>

        <section class="half-banner" id="contact-banner">
            <div class="tagline-box">
                <div class="tagline">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </section>
        <section class="main-text" id="contact-text">
            <article>
                <h2>Get in Touch</h2>
                <form action="post" id="contact-form" autocomplete="off" name="contact" onsubmit="submitForm(); return false;">
                    <input
                        type="text"
                        name="name"
                        id="name"
                        placeholder="Name (required)"
                        required
                    />
                    <input
                        type="e-mail"
                        name="email"
                        id="email"
                        placeholder="E-mail Address (required)"
                        required
                    />
                    <input
                        type="tel"
                        name="phone"
                        id="phone"
                        placeholder="Phone Number"
                    />

                    <input
                        type="text"
                        mame="organization"
                        id="organization"
                        placeholder="Organization"
                    />
                    <textarea
                        name="message"
                        id="message"
                        cols="30"
                        rows="10"
                        placeholder="Your message here... (required)"
                        required
                    ></textarea>
                    <input id="send" type="submit" class="btn btn-pink" value="Send">
                </form>
                <div id="contact-thanks"></div>
                <div id="contact-info">
                    <h3>Call Us</h3>
                    <p>407-514-4223</p>
                    <h3>E-mail Us</h3>
                    <p><a href="mailto:LydiaHouse@FirstOrlando.com" target="_blank">LydiaHouse@FirstOrlando.com</a></p>
                    <h3>Write Us</h3>
                    <p>
                        <span style="font-weight: 600">Lydia House</span><br />
                        c/o First Baptist Orlando<br />
                        3000 S. John Young Parkway<br />
                        Orlando, Florida 32805
                    </p>
                </div>
            </article>
        </section>

<?php include 'inc/footer.php'; ?>