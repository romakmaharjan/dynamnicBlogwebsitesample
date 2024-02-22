<?php
require_once "header.php";
?>
<a id="contact">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">Contact</h2>
        </div>

        <div class="w-50 m-auto">
            <form action="about.php" method="post">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email Address:</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Phone Number:</label>
                    <input type="text" name="number" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </section>
</a>

<?php 
require_once "footer.php";
?>