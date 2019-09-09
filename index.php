<?php include 'inc/header.php'; ?>

        <section class="full-banner">
            <div class="tagline-box">
                <div class="tagline">
                    <h1>Transforming&nbsp;Lives &amp;&nbsp;Bringing Families&nbsp;Together</h1>
                    <h3>A Christ-Centered Program</h3>
                    <a href="give.php" class="btn-pink btn">Give to Lydia House</a>
                    <a href="about.php" class="btn">Learn More</a>
                </div>
            </div>
        </section>
        <script>
            function myFunction() {
                var x = document.getElementById("nav");
                if (x.style.display === "block") {
                    x.style.display = "none";
                } else {
                    x.style.display = "block";
                }
            }
            $(document).ready(function(){
                $("i").click(function(){
                    $("i").toggleClass("fa-times");
                });
            });
        </script>
    </body>
</html>
