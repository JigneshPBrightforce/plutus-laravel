@if(Auth::check())
<!-- Footer Section -->
<div class="footer">
    <div class="policy p-2"> 
        <p class="mb-0 text-center">© <span id="currentYear"></span> Plutus Technologies Pvt. Ltd.</p>
    </div>
</div>
<script>
document.getElementById('currentYear').innerHTML = new Date().getFullYear();
</script>
@endif