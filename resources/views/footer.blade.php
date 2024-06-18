<!DOCTYPE html>
<html lang="en">
<body>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Alleyway Muse</h3>
      <p>A perfect cup of coffee should embody the darkness of the abyss, the vigor of a warrior's spirit, and the sweetness of a lover's embrace</p>
      <div class="social-links">
        @foreach ($data as $row)
        <a href="{{ $row->instagram }}" class="instagram"><i class="bx bxl-instagram"></i></a>
        @endforeach
      </div>
    </div>
  </footer><!-- End Footer -->
</body>

</html>