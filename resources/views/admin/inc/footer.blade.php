@if(Auth::check())
<!-- Footer Section -->
<div class="footer">
    <div class="policy">
        <hr>
        <p class="mb-0 text-center pb-2">© <span id="currentYear"></span> Plutus Technologies Pvt. Ltd.</p>
    </div>
</div>
<script>
document.getElementById('currentYear').innerHTML = new Date().getFullYear();
</script>
@endif