<!-- Footer -->

<footer style="background-color: #003366; color: #ffffff; text-align: center; padding: 1rem 0; margin-top: 2rem;">

    <p>&copy; <?php
                echo date("Y");
                ?>
        Awo Dufie. All rights reserved. | Designed by: GenieDev +233592725542</p>

</footer>



<script>
    const hamburger = document.getElementById('hamburger');

    const navLinks = document.getElementById('nav-links');

    const links = navLinks.querySelectorAll('li a'); // Select all navigation links



    hamburger.addEventListener('click', () => {

        navLinks.classList.toggle('active');

    });



    // Close the hamburger menu when a nav link is clicked

    links.forEach(link => {

        link.addEventListener('click', () => {

            navLinks.classList.remove('active'); // Remove the active class to close the menu

        });

    });
</script>

</body>



</html>