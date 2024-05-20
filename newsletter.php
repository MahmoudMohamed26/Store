<div class="subscribe">
    <div class="special-container">
        <div class="special-header">
            <h1 class="heading_style">Subscribe Our Newsletter</h1>
            <img src="imgs/line.png" alt="" />
            <p>
                Enter Your email address to join our mailing list and keep yourself
                update
            </p>
        </div>
        <form class="newsletter_sub" action="sub.php" method="post">
            <input type="email" name="email" placeholder="Enter your mail..." required />
            <input type="submit" value="Subscribe" class="special-btn" name="sub" />
        </form>

        <p style="margin-top: 12px;" id="newsletter_msg"></p>
    </div>
</div>

<script>
    const form = document.querySelector(".newsletter_sub")
    form.addEventListener("submit", async function(event) {
        event.preventDefault()

        const formData = new FormData(form)
        const response = await fetch("http://localhost:8088/web%20project/sub.php", {
            method: "POST",
            body: formData
        })
        const data = await response.text()
        document.querySelector("#newsletter_msg").textContent = data
    })
</script>